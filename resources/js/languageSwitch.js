// On the feed, a flag switches language without reloading. The new language's
// page and topics are fetched first, then its text and posts are swapped in and
// the address changes, so the timer keeps going. Each language still has its
// own page for search engines. If anything goes wrong, the page loads normally.

// What the swap replaces. The modal goes whole, as Bootstrap keeps hold of its insides.
const REGIONS = ['#feed-nav-1', '#feed-nav-2', '#rightside-inner', '#feed .footer']
const MODAL = '#how-it-works'
const HEAD = 'meta[name="description"], link[rel="canonical"], link[rel="alternate"][hreflang], meta[property^="og:"], script[type="application/ld+json"]'
// Topics slower than this are left for the page to load itself
const TOPICS_WAIT = 1500

const prefetchedTopics = new Map()
let latest = 0

// The topics fetched for a switch, once
export function takePrefetchedTopics(url) {
    const topics = prefetchedTopics.get(url)
    prefetchedTopics.delete(url)
    return topics
}

export function initLanguageSwitch(swapped) {
    if (!document.getElementById('feed')) return

    document.addEventListener('click', (event) => {
        const link = event.target.closest('.lang-switch a[hreflang]')
        if (!link || event.defaultPrevented || event.button !== 0) return
        // New tabs and windows open as usual
        if (event.metaKey || event.ctrlKey || event.shiftKey || event.altKey) return

        event.preventDefault()
        if (link.getAttribute('aria-current') !== 'page') switchTo(link.href, true, swapped)
    })

    window.addEventListener('popstate', () => switchTo(location.href, false, swapped))
}

async function switchTo(url, push, swapped) {
    const id = ++latest
    try {
        const response = await fetch(url, { headers: { Accept: 'text/html' } })
        if (!response.ok) throw new Error(`${url} answered ${response.status}`)
        const page = new DOMParser().parseFromString(await response.text(), 'text/html')
        const data = JSON.parse(page.getElementById('page-data')?.textContent ?? 'null')
        if (!data || [...REGIONS, MODAL].some((selector) => !page.querySelector(selector) || !document.querySelector(selector))) {
            throw new Error(`${url} isn't a feed page`)
        }

        const topics = await Promise.race([
            fetch(data.routes.tweets).then((r) => (r.ok ? r.json() : null)).catch(() => null),
            new Promise((resolve) => setTimeout(resolve, TOPICS_WAIT, null)),
        ])
        // A later click wins
        if (id !== latest) return
        if (topics) prefetchedTopics.set(data.routes.tweets, topics)

        // The timer and the chosen topic, taken now for the page after the swap
        document.dispatchEvent(new Event('carry-over'))

        swap(page)
        Object.assign(window, {
            customVerbiages: data.customVerbiages,
            routes: data.routes,
            lang: data.lang,
            currentUser: data.currentUser || undefined,
        })
        if (push) history.pushState(null, '', response.url || url)

        swapped()
    } catch (error) {
        console.error('Switching language in place failed, so loading the page', error)
        if (id === latest) location.assign(url)
    }
}

function swap(page) {
    document.documentElement.lang = page.documentElement.lang
    document.title = page.title

    document.head.querySelectorAll(HEAD).forEach((element) => element.remove())
    page.head.querySelectorAll(HEAD).forEach((element) => document.head.append(document.importNode(element, true)))

    for (const selector of REGIONS) {
        document.querySelector(selector).innerHTML = page.querySelector(selector).innerHTML
    }
    document.querySelector(MODAL).replaceWith(document.importNode(page.querySelector(MODAL), true))
}
