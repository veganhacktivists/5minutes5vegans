<nav class="navbar text-light border-bottom border-success">
    <div class="col">
        <div class="dropdown">
            <button type="button" class="text-white btn btn-sm btn-default dropdown-toggle" data-bs-toggle="dropdown" id="localeChooser">
                <span class="me-2">{{ __('navbar.picker') }}</span>
                <img src="https://www.countryflags.io/{{ getCurrentCountry() }}/flat/32.png" class="flag" />
            </button>

            <div class="dropdown-menu" aria-labelledby="localeChooser">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <a class="dropdown-item"
                    rel="alternate"
                    hreflang="{{ $localeCode }}"
                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                >
                    <img src="https://www.countryflags.io/{{ getCountry( $properties ) }}/flat/32.png"/>
                    <div class="d-inline p-2">{{ $properties['native'] }}</div>
                </a>
            @endforeach

            </div>
        </div>
    </div>
    <div class="col-auto">
        <a class="text-white btn rounded-pill font-bold btn-sm bg-pink" href="https://veganhacktivists.org/support" target="_blank">
            <i class="me-1 d-md-none d-xl-inline-block fas fa-hand-holding-heart" style="color:#EC361F"></i>@lang('Donate')&nbsp;&nbsp;
        </a>
    </div>
    <div class="col-auto">
        @guest
            <a href="{{ route('register') }}">@lang('Register')</a>
            @lang('or')
            <a href="{{ route('login') }}">@lang('Login')</a>
        @endguest

        @auth
        <form method="post" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-primary">@lang('Logout')</button>
        </form>
        @endauth
    </div>
</nav>
