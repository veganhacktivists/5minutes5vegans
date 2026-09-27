// Switching language loads a new page. Clicking a flag hands the timer and
// the chosen topic to it in sessionStorage.
const KEY = 'carried-over'
const FRESH_FOR = 30 * 1000

function read() {
    try {
        return JSON.parse(sessionStorage.getItem(KEY)) || {}
    } catch {
        return {}
    }
}

function write(values) {
    try {
        sessionStorage.setItem(KEY, JSON.stringify(values))
    } catch {}
}

// Save a value when a flag is clicked
export function carryOverOnLanguageSwitch(name, value) {
    document.addEventListener('click', (event) => {
        if (!event.target.closest('.lang-switch a')) return

        const current = value()
        if (current === undefined) return
        write({ ...read(), [name]: current, at: Date.now() })
    })
}

// The value handed over by the page before, once
export function pickUp(name) {
    const values = read()
    if (!(name in values)) return undefined

    const { [name]: value, ...rest } = values
    write(rest)
    return Date.now() - values.at < FRESH_FOR ? value : undefined
}
