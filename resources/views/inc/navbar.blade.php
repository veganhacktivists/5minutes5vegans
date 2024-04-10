<nav class="navbar text-light border-bottom border-success">
    <div class="col">
        <div class="dropdown">
            <button type="button" class="text-white btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" id="localeChooser">
                <span class="mr-2">{{ __('navbar.picker') }}</span>
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
        <a class="text-white btn rounded-pill font-bold btn-sm bg-pink" href="https://www.patreon.com/veganhacktivists" target="_blank">
            <i class="mr-1 d-md-none d-xl-inline-block fas fa-hand-holding-heart" style="color:#EC361F"></i>@lang('Donate')&nbsp;&nbsp;
        </a>
    </div>
    <div class="col-auto">
        @guest
            <a href="{{ route('register') }}">@lang('Register')</a>
            @lang('or')
            <a href="{{ route('login') }}">@lang('Login')</a>
        @endguest

        @auth
        {{ Form::open([ 'route' => 'logout']) }}
            <button type="submit" class="btn btn-primary">{{__('Logout')}}</button>
        {{ Form::close() }}
        @endauth
    </div>
</nav>
