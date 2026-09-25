// Records an event in Umami (cookieless, self-hosted by Vegan Hacktivists).
// Umami only loads once UMAMI_WEBSITE_ID is set, so until then this does
// nothing. Event data describes what was used, never who used it.
export function track(event, data = {}) {
    try {
        window.umami?.track(event, { lang: document.documentElement.lang, ...data })
    } catch {
        // Analytics must never break the page
    }
}
