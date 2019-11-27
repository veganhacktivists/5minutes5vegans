<ul class="flag-list">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    <li class="flag-item {{ (LaravelLocalization::getCurrentLocale() == $localeCode) ? 'flag-item-selected' : '' }}">
    <div class="d-flex ">
        <a hreflang="{{ $localeCode }}"
            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
            class="align-self-center mx-auto">
        <img src="{{ mb_strtolower(asset('images/landing/'.getCountry( $properties )), 'UTF-8') }}.png">
        </a>
    </div>
    </li>
    @endforeach
</ul>
