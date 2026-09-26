import { test as base, expect } from '@playwright/test'
import { readFileSync } from 'node:fs'

const LANGUAGES = ['en', 'de', 'es', 'fr', 'it', 'nl', 'pt']

// Any uncaught error, Content-Security-Policy violation or failed request to
// the site itself fails the test. Other hosts' failures (X avatars, fonts) are
// left out, since CI can't vouch for them.
const test = base.extend({
    problems: [async ({ page, baseURL }, use) => {
        const problems = []
        page.on('pageerror', (error) => problems.push(error.message))
        page.on('console', (message) => {
            if (message.text().includes('Content Security Policy')) problems.push(message.text())
        })
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

test('the register page loads, reCAPTCHA included', async ({ page }) => {
    await page.goto('/en/register')

    await expect(page.locator('input[name=password_confirmation]')).toBeVisible()
})

test('the login page loads', async ({ page }) => {
    await page.goto('/en/login')

    await expect(page.locator('input[type=email]')).toBeVisible()
    await expect(page.locator('a[href="https://veganhacktivists.org/privacy-policy"]')).toBeAttached()
})

test('copying and rewording are counted in Umami, without anything about the visitor', async ({ page, isMobile }) => {
    await page.addInitScript(() => {
        window.umami = { track: (event, data) => (window.events ||= []).push([event, data]) }
    })
    await openMessages(page, isMobile)
    await page.locator('.verbiage-link').nth(3).click()
    const topic = (await page.locator('.verbiage-link').nth(3).innerText()).trim()

    await page.locator('.reword-btn').click()
    await page.locator('.copy-btn').click()

    await expect.poll(() => page.evaluate(() => window.events)).toEqual([
        ['Reword', { lang: 'en', topic }],
        ['Copy reply', { lang: 'en', topic, kind: 'ready-made' }],
    ])
})

test('on a phone, the pager works from the keyboard', async ({ page, isMobile }) => {
    test.skip(!isMobile, 'phones only')
    await page.goto('/en')
    const [messages, feed] = [page.locator('.swiper-pagination-bullet').first(), page.locator('.swiper-pagination-bullet').last()]
    await expect(feed).toHaveAttribute('aria-pressed', 'true')

    await messages.focus()
    await page.keyboard.press('Enter')

    await expect.poll(() => page.evaluate(() => window.mySwiper.activeIndex)).toBe(0)
    await expect(messages).toHaveAttribute('aria-pressed', 'true')
    await expect(feed).toHaveAttribute('aria-pressed', 'false')
})

test('a signed-in volunteer can pick an icon for their own message', async ({ page, isMobile }) => {
    // The icon lists normally come from GitHub. A stub keeps the test offline,
    // and the browser still checks the Content-Security-Policy before asking.
    await page.route('https://raw.githubusercontent.com/iconify/icon-sets/**', (route) => route.fulfill({
        json: { icons: { leaf: { body: '<path d="M0 0h1v1H0z"/>' } }, width: 512, height: 512 },
    }))

    // Seeded by database/seeds/BrowserTestUserSeeder.php
    await page.goto('/en/login')
    await page.locator('input[name=email]').fill('browser-test@example.com')
    await page.locator('input[name=password]').fill('password')
    await page.locator('button[type=submit]').click()
    await expect(page.locator('.verbiage-link').first()).toBeAttached()

    if (isMobile) await page.locator('.swiper-pagination-bullet').first().click()
    await page.getByRole('button', { name: 'Your own' }).click()
    await page.getByRole('button', { name: 'New', exact: true }).click()
    await page.locator('#icon-select').click()

    await expect(page.locator('.icon-element').first()).toBeVisible()
})

test('on a phone, the inactive pager tab keeps its outline', async ({ page, isMobile }) => {
    test.skip(!isMobile, 'phones only')
    await page.goto('/en')

    const messages = page.locator('.swiper-pagination-bullet').first()
    await expect(messages).not.toHaveClass(/swiper-pagination-bullet-active/)
    expect(await messages.evaluate((el) => getComputedStyle(el).borderTopWidth)).toBe('2px')
})

test('on a phone, rewording straight after copying keeps the box open', async ({ page, isMobile }) => {
    test.skip(!isMobile, 'phones only')
    await openMessages(page, isMobile)
    await page.locator('.verbiage-link').nth(12).click()

    await page.locator('.copy-btn').click()
    await page.locator('.reword-btn').click()
    await page.waitForTimeout(1600)

    await expect(page.locator('.verbiage-msg textarea')).toBeVisible()
    expect(await page.evaluate(() => window.mySwiper.activeIndex)).toBe(0)
})

test('the reply box survives a phone turning into a wider screen', async ({ page, isMobile }) => {
    test.skip(!isMobile, 'phones only')
    await openMessages(page, isMobile)
    await page.locator('.verbiage-link').nth(12).click()
    await expect(page.locator('.verbiage-msg textarea')).toBeVisible()

    await page.setViewportSize({ width: 1024, height: 800 })

    await expect(page.locator('.verbiage-msg')).toHaveCount(1)
    await expect(page.locator('#reply-dock .verbiage-msg')).toHaveCount(0)
    await expect(page.locator('.verbiage-msg textarea')).toBeVisible()
})

// The same cases pin the PHP check that every reply fits, in TweetContentTest
const X_LENGTHS = JSON.parse(readFileSync(new URL('../fixtures/x-length.json', import.meta.url)))

test('the character counter counts the way X does', async ({ page, isMobile }) => {
    test.skip(isMobile, 'one size is enough')
    await page.goto('/en')
    const box = page.locator('.verbiage-msg textarea')

    for (const { text, length, why } of X_LENGTHS) {
        await box.fill(text)
        await box.press('End')
        expect(parseInt(await page.locator('.cc-count').innerText(), 10), `${text}: ${why}`).toBe(280 - length)
    }
})

// WCAG AA: small text needs 4.5:1 against what's behind it
async function contrast(locator) {
    return locator.evaluate((el) => {
        const channels = (colour) => colour.match(/[\d.]+/g).slice(0, 3).map(Number)
        const luminance = (colour) => {
            const [r, g, b] = channels(colour).map((v) => {
                v /= 255
                return v <= 0.03928 ? v / 12.92 : ((v + 0.055) / 1.055) ** 2.4
            })
            return 0.2126 * r + 0.7152 * g + 0.0722 * b
        }
        let node = el
        let background = 'rgb(255, 255, 255)'
        while (node) {
            const colour = getComputedStyle(node).backgroundColor
            if (colour && !colour.startsWith('rgba(0, 0, 0, 0)') && colour !== 'transparent') {
                background = colour
                break
            }
            node = node.parentElement
        }
        const [light, dark] = [luminance(getComputedStyle(el).color), luminance(background)].sort((a, b) => b - a)
        return (light + 0.05) / (dark + 0.05)
    })
}

test('small text on the feed is readable', async ({ page }) => {
    await page.goto('/en')

    for (const selector of ['#minutes-left:visible', '.cc-count', '.timeline .card .reply-on-x', '.timeline .card time']) {
        expect(await contrast(page.locator(selector).first()), selector).toBeGreaterThanOrEqual(4.5)
    }
})

test('the timer restart is big enough to tap', async ({ page }) => {
    await page.goto('/en')

    const box = await page.locator('#resetLink:visible').boundingBox()
    expect(box.width).toBeGreaterThanOrEqual(24)
    expect(box.height).toBeGreaterThanOrEqual(24)
})

test('icons come from the site itself', async ({ page }) => {
    const elsewhere = []
    page.on('request', (request) => {
        if (request.url().includes('cdnjs.cloudflare.com')) elsewhere.push(request.url())
    })
    await page.goto('/en')
    await page.evaluate(() => document.fonts.ready)

    const icon = page.locator('#resetLink:visible i')
    expect(await icon.evaluate((el) => getComputedStyle(el, '::before').fontFamily)).toContain('Font Awesome 6 Free')
    expect(await page.evaluate(() => [...document.fonts].some((font) => font.family.includes('Font Awesome 6 Free') && font.status === 'loaded'))).toBe(true)
    expect(elsewhere).toEqual([])
})
