<div class="navbar text-light border-bottom border-success row">
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
            <i class="mr-1 d-md-none d-xl-inline-block fas fa-hand-holding-heart"></i>Donate
        </a>
    </div>
    <div class="col-auto">
        <span class="">{{ link_to_route( 'register', __('Register') ) }} {{__('or')}} {{ link_to_route( 'login', __('Login') ) }}</span>
    </div>
</div>
