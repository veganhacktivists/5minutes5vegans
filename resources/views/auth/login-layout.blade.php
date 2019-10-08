@extends('layout')

@section('title', 'Register')

@section('scripts')
    <script src="https://www.google.com/recaptcha/api.js?" async defer></script>
    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/login-landing.js') }}" defer></script>
@endsection

@section('page_content')
<div class="container-fluid" style="background-image: url({{ asset('images/login_bg.png') }})">
        <div class="container py-5">
            <!-- Header -->
            <div class="row">
                <div class="col-sm">
                    <a href="{{ route('feed') }}"><img class="w-25" src="{{ asset('images/logo.svg') }}"/></a>
                </div>
                <div class="col-sm text-right">
                    <a class="text-black btn font-bold btn-sm bg-transparent py-2 px-3 swirvy-box"
                       style="border-color: #4dc0b5;"
                       href="/">
                        How does it work?
                    </a>
                </div>
            </div>
            <!-- Content -->
            <div class="row mt-5 mx-auto login-panes">
                <div class="col login-pane login-pane-left">
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
                <div class="col login-pane login-pane-right">
                    <h3>Start without account</h3>
                    <h5 class="my-5 font-weight-bold"><div class="horz-line"></div>PICK YOUR LANGUAGE.</h5>
                        <div class="d-flex mb-5 lang-flags">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                @php
                                    $checked = (LaravelLocalization::getCurrentLocale() == $localeCode) ? true : false;
                                    $flag = strtolower(getCountry( $properties ));
                                @endphp
                                    <button type="button" class="btn">
                                        <a hreflang="{{ $localeCode }}"
                                          href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            <img src="{{ asset('images/landing/'.$flag).'.png' }}">
                                        </a>
                                    </button>
                            @endforeach
                        </div>
                        <h5 class="mt-5 font-weight-bold"><div class="horz-line"></div>GET READY...</h5>
                        <div class="d-flex align-middle">
                            <span class="mr-auto my-5 font-weight-bold text-white">And take up the challenge!</span>
                            <a href="{{ route('feed') }}">
                                <button id="play-submit-btn" class="btn start-btn px-0"><div><div><i class="fas fa-caret-right"></i></div></div></button>
                            </a>
                        </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="d-flex flex-row justify-content-between align-items-center py-3">
            <div>
                <a href="https://www.patreon.com/veganhacktivists/"><img src="{{ asset('images/patreon-button.png') }}"></a>
            </div>
            <div class="text-secondary">
                Website hosted and designed by <a href="https://veganhacktivists.org/">vegan hactivists</a> with love&nbsp;<i class="fas fa-heart text-danger"></i>
            </div>
            <div>
                <a href="https://veganhacktivists.org/"><img class="float-right" src="https://i.imgur.com/xSHDo4E.png"></a>
            </div>
        </footer>
    </div>
@endsection
