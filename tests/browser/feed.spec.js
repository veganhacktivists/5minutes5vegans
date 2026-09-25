import { test as base, expect } from '@playwright/test'

const LANGUAGES = ['en', 'de', 'es', 'fr', 'it', 'nl', 'pt']

// Any uncaught error, or a failed request to the site itself, fails the test.
// Other hosts (X avatars, fonts) are left out, since CI can't vouch for them.
const test = base.extend({
    problems: [async ({ page, baseURL }, use) => {
        const problems = []
        page.on('pageerror', (error) => problems.push(error.message))
        page.on('response', (response) => {
            if (response.url().startsWith(baseURL) && response.status() >= 400) {
                problems.push(`${response.status()} ${response.url()}`)
            }
        })

        await use(problems)

        expect(problems).toEqual([])
    }, { auto: true }],
})

async function openMessages(page, isMobile) {
    await page.goto('/en')
    await expect(page.locator('.verbiage-link').first()).toBeAttached()
    // Phones open on the feed
    if (isMobile) await page.locator('.swiper-pagination-bullet').first().click()
}

async function expectNoSidewaysScroll(page) {
    const overflow = await page.evaluate(() => ({
        page: document.documentElement.scrollWidth - window.innerWidth,
        pager: document.querySelector('.swiper-container')?.scrollLeft ?? 0,
    }))
    expect(overflow).toEqual({ page: 0, pager: 0 })
}

for (const lang of LANGUAGES) {
    test(`the ${lang} page loads its topics`, async ({ page }) => {
        await page.goto(`/${lang}`)

        await expect(page.locator('.verbiage-link')).not.toHaveCount(0)
        await expectNoSidewaysScroll(page)
    })
}

test('a topic gives a reply that fits on X, and Reword changes it', async ({ page, isMobile }) => {
    await openMessages(page, isMobile)
    await page.locator('.verbiage-link').nth(10).click()

    const box = page.locator('.verbiage-msg textarea')
    await expect(box).not.toHaveValue('')
    expect(parseInt(await page.locator('.cc-count').innerText(), 10)).toBeGreaterThanOrEqual(0)

    const first = await box.inputValue()
    await page.locator('.reword-btn').click()
    await expect(box).not.toHaveValue(first)
})

test('Copy puts the reply on the clipboard', async ({ page, context, isMobile }) => {
    await context.grantPermissions(['clipboard-read', 'clipboard-write'])
    await openMessages(page, isMobile)
    await page.locator('.verbiage-link').nth(3).click()

    const reply = await page.locator('.verbiage-msg textarea').inputValue()
    await page.locator('.copy-btn').click()

    await expect(page.locator('.copy-btn')).toContainText('Copied!')
    expect(await page.evaluate(() => navigator.clipboard.readText())).toBe(reply)
})

test('when the Clipboard API is refused, Copy falls back to the older way', async ({ page, isMobile }) => {
    await page.addInitScript(() => {
        navigator.clipboard.writeText = () => Promise.reject(new Error('Denied'))
    })
    await openMessages(page, isMobile)
    await page.locator('.verbiage-link').nth(3).click()
    await page.locator('.copy-btn').click()

    await expect(page.locator('.copy-btn')).toContainText('Copied!')
})

test('if copying fails, the reply stays put with a note to copy it by hand', async ({ page, isMobile }) => {
    await page.addInitScript(() => {
        navigator.clipboard.writeText = () => Promise.reject(new Error('Denied'))
        document.execCommand = () => false
    })
    await openMessages(page, isMobile)
    await page.locator('.verbiage-link').nth(3).click()
    await page.locator('.copy-btn').click()

    await expect(page.locator('.copy-hint')).toContainText("Couldn't copy")
    await expect(page.locator('.copy-btn')).not.toContainText('Copied!')
    await expect(page.locator('.verbiage-msg textarea')).toBeVisible()
})

test('on a phone, picking a topic keeps everything on screen and Copy moves on to the feed', async ({ page, isMobile }) => {
    test.skip(!isMobile, 'phones only')
    await openMessages(page, isMobile)

    await page.locator('.verbiage-link').nth(12).click()
    await expectNoSidewaysScroll(page)
    const box = await page.locator('.verbiage-msg').boundingBox()
    const width = page.viewportSize().width
    expect(box.x).toBeGreaterThanOrEqual(0)
    expect(box.x + box.width).toBeLessThanOrEqual(width)

    await page.locator('.copy-btn').click()
    await expect.poll(() => page.evaluate(() => window.mySwiper.activeIndex)).toBe(1)
    await expectNoSidewaysScroll(page)
})

test('the feed shows posts with how old they are', async ({ page }) => {
    await page.goto('/en')

    const time = page.locator('.timeline .card time').first()
    await expect(time).toHaveText(/ago|now|yesterday/)
})

test('the login page loads', async ({ page }) => {
    await page.goto('/en/login')

    await expect(page.locator('input[type=email]')).toBeVisible()
    await expect(page.locator('a[href="https://veganhacktivists.org/privacy-policy"]')).toBeAttached()
})
