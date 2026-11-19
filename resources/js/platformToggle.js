// Volunteers can hide X or Bluesky posts, but not both. The choice is a class
// on <html> (hide-x or hide-bluesky), which the layout's head script sets before
// the first paint, so cards a language switch swaps in follow it too.

const KEY = 'hidden-platform'
const PLATFORMS = ['x', 'bluesky']
const root = document.documentElement

function hiddenPlatform() {
    return PLATFORMS.find((platform) => root.classList.contains(`hide-${platform}`)) ?? null
}

function hide(platform) {
    PLATFORMS.forEach((each) => root.classList.toggle(`hide-${each}`, each === platform))
    try {
        if (platform) localStorage.setItem(KEY, platform)
        else localStorage.removeItem(KEY)
    } catch {
        // Not remembered, but the page still follows the click
    }
    applyPlatforms()
}

// Brings the buttons and the empty message in line with the classes on <html>
export function applyPlatforms() {
    const hidden = hiddenPlatform()
    const shown = hidden && PLATFORMS.find((platform) => platform !== hidden)

    document.querySelectorAll('.platform-toggle button[data-platform]').forEach((button) => {
        const platform = button.dataset.platform
        button.setAttribute('aria-pressed', String(platform !== hidden))
        // The one left on can't be switched off
        if (platform === shown) button.setAttribute('aria-disabled', 'true')
        else button.removeAttribute('aria-disabled')
    })

    const timeline = document.querySelector('.timeline')
    timeline?.querySelectorAll('.platform-empty').forEach((message) => {
        message.hidden = !(shown && message.dataset.platform === shown && !timeline.querySelector(`.card[data-platform="${shown}"]`))
    })
}

export function initPlatformToggle() {
    document.addEventListener('click', (event) => {
        const button = event.target.closest('.platform-toggle button[data-platform]')
        if (!button) return

        const platform = button.dataset.platform
        const hidden = hiddenPlatform()
        if (hidden === platform) hide(null)
        else if (!hidden) hide(platform)
    })
}
