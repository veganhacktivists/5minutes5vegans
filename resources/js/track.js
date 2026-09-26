// An Umami event. Does nothing until Umami loads (UMAMI_WEBSITE_ID is set).
// Send what was used, and nothing about the visitor.
export function track(event, data = {}) {
    try {
        window.umami?.track(event, { lang: document.documentElement.lang, ...data })
    } catch {
        // Analytics must never break the page
    }
}
