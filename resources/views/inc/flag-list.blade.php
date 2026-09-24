<nav class="lang-switch" id="languageFlags" aria-label="Language">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <a hreflang="{{ $localeCode }}"
            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
            title="{{ $properties['native'] }}"
            aria-label="{{ $properties['native'] }}"
            @if (LaravelLocalization::getCurrentLocale() == $localeCode) class="active" aria-current="page" @endif
        >
            <span class="lang-flag"><img src="{{ asset('images/landing/'.strtolower(getCountry($properties)).'@3x.png') }}" alt=""></span>
            <span class="lang-code">{{ strtoupper($localeCode) }}</span>
        </a>
    @endforeach
</nav>
