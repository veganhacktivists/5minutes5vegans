@extends('layout')

@section('title', 'Register')

@section('scripts')
    <script src="https://www.google.com/recaptcha/api.js?" async defer></script>
    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
@endsection

@section('page_content')
<section id="login-bg" style="background-image: url({{ asset('images/login_bg.png') }});">
</section>


<div class="container-fluid login-container">
    <div class="container py-5">
        <!-- Header -->
        <div class="row">
            <div class="col-sm">
                <a href="{{ route('feed') }}"><img class="w-25" src="{{ asset('images/logo.svg') }}"/></a>
            </div>
            <div class="col-sm text-right">
                <a class="text-black btn font-bold btn-sm bg-transparent py-2 px-3 swirvy-box"
                    style="border-color: #4dc0b5;font-size: 20px;"
                    href="/">
                    How does it work?
                </a>
            </div>
        </div>
        <!-- Content -->
        <div class="row mt-5 mx-auto login-panes">
            <div class="col login-pane-left">
                @if (Route::getCurrentRoute()->getName() == 'login')
                    <div id="login-pane">
                        @yield('login-pane')
                    </div>
                @else
                    <div id="register-pane">
                        @yield('register-pane')
                    </div>
                @endif
            </div>
            <div class="col login-pane-right">
                <h3 style="font-size: 24px;">..or start without an account!</h3>
                <h5 style="letter-spacing: 1px;" class="my-5 font-weight-bold"><div class="horz-line"></div>PICK YOUR LANGUAGE.</h5>
                <div class="d-flex mb-5 lang-flags">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        @php
                            $active = (LaravelLocalization::getCurrentLocale() == $localeCode) ? true : false;
                            $flag = strtolower(getCountry( $properties ));
                        @endphp
                            <a hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                <button type="button" class="btn {{ $active ? "login-flag-active" : "" }}">
                                    <img src="{{ asset('images/landing/'.$flag).'.png' }}">
                                </button>

                            </a>
                    @endforeach
                </div>
                <h5 style="letter-spacing: 1px;" class="mt-5 font-weight-bold"><div class="horz-line"></div>GET READY...</h5>
                <div class="d-flex align-middle">
                  <span class="mr-auto my-5 font-weight-bold text-white" style="font-size: 17px;font-weight: normal !important;">And take up the challenge!</span>
                    <a href="{{ route('feed') }}">
                        <button id="play-submit-btn" class="btn start-btn px-0"><div><div><i class="fas fa-caret-right"></i></div></div></button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="py-2 page-footer text-white">
    <div class="container-fluid container-fluid-max">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                Follow us on <i class="fab fa-instagram"></i> {{ link_to('https://www.instagram.com/veganhacktivists', 'Instagram') }}
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div>
                    Website hosted and designed by {{ link_to('https://veganhacktivists.org/', 'Vegan Hacktivists') }} with love
                    <i class="far fa-heart"></i>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-right">
                {{ link_to('https://www.patreon.com/veganhacktivists', 'Support us on Patreon') }}
            </div>
        </div>
    </div>
</footer>
@endsection
