// The feed shows X or Bluesky posts, one at a time, X unless the volunteer
// chose Bluesky. The choice is a class on <html> (hide-x or hide-bluesky),
// which the layout's head script sets before the first paint, so cards a
// language switch swaps in follow it too.

const KEY = 'platform'
const PLATFORMS = ['x', 'bluesky']
const root = document.documentElement

function shownPlatform() {
    return root.classList.contains('hide-x') ? 'bluesky' : 'x'
}

function show(platform) {
    PLATFORMS.forEach((each) => root.classList.toggle(`hide-${each}`, each !== platform))
    try {
        localStorage.setItem(KEY, platform)
    } catch {
        // Not remembered, but the page still follows the click
    }
    applyPlatforms()
}

// Brings the buttons and the empty message in line with the class on <html>
export function applyPlatforms() {
    const shown = shownPlatform()

    document.querySelectorAll('.platform-toggle button[data-platform]').forEach((button) => {
        button.setAttribute('aria-pressed', String(button.dataset.platform === shown))
    })

    const timeline = document.querySelector('.timeline')
    timeline?.querySelectorAll('.platform-empty').forEach((message) => {
        message.hidden = message.dataset.platform !== shown || !!timeline.querySelector(`.card[data-platform="${shown}"]`)
    })
}

export function initPlatformToggle() {
    document.addEventListener('click', (event) => {
        const button = event.target.closest('.platform-toggle button[data-platform]')
        if (button && button.dataset.platform !== shownPlatform()) show(button.dataset.platform)
    })
}
