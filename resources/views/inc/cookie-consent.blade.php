<div id="cookie-consent" class="cookie-consent" role="dialog" aria-live="polite" aria-label="{{ __('Cookies') }}" hidden>
    <p>
        {{ __('We\'d like to use Google Analytics cookies to see how people use the site. Is that OK?') }}
        <a href="https://veganhacktivists.org/privacy-policy" target="_blank">{{ __('Privacy policy') }}</a>
    </p>
    <div class="cookie-consent-buttons">
        <button type="button" class="btn btn-primary swirvy-box" data-consent="granted">{{ __('Accept') }}</button>
        <button type="button" class="btn btn-outline-primary swirvy-box" data-consent="denied">{{ __('No thanks') }}</button>
    </div>
</div>

<script>
    // Google Analytics only loads after someone accepts. The choice is kept in
    // this browser, and any "Cookies" link (data-cookie-settings) reopens the banner.
    (function () {
        var KEY = 'analytics-consent'
        var GA_ID = 'G-KVJ9LMXWX7'
        var banner = document.getElementById('cookie-consent')

        function stored() {
            try { return localStorage.getItem(KEY) } catch (e) { return null }
        }

        function loadAnalytics() {
            if (window.gtag) return
            window.dataLayer = window.dataLayer || []
            window.gtag = function () { dataLayer.push(arguments) }
            gtag('js', new Date())
            gtag('config', GA_ID)

            var script = document.createElement('script')
            script.async = true
            script.src = 'https://www.googletagmanager.com/gtag/js?id=' + GA_ID
            document.head.appendChild(script)
        }

        function removeAnalyticsCookies() {
            var host = location.hostname
            document.cookie.split(';').forEach(function (cookie) {
                var name = cookie.split('=')[0].trim()
                if (name.indexOf('_ga') !== 0) return
                ;[host, '.' + host, '.' + host.split('.').slice(-2).join('.')].forEach(function (domain) {
                    document.cookie = name + '=; Max-Age=0; path=/; domain=' + domain
                })
                document.cookie = name + '=; Max-Age=0; path=/'
            })
        }

        banner.addEventListener('click', function (event) {
            var choice = event.target.getAttribute('data-consent')
            if (!choice) return

            try { localStorage.setItem(KEY, choice) } catch (e) {}
            banner.hidden = true

            if (choice === 'granted') {
                loadAnalytics()
            } else {
                removeAnalyticsCookies()
                // Analytics already running on this page can't be unloaded, so start fresh
                if (window.gtag) location.reload()
            }
        })

        document.addEventListener('click', function (event) {
            if (!event.target.closest('[data-cookie-settings]')) return
            event.preventDefault()
            banner.hidden = false
        })

        if (stored() === 'granted') {
            loadAnalytics()
        } else if (stored() === null) {
            banner.hidden = false
        }
    })()
</script>
