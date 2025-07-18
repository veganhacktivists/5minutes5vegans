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

<header>
    <nav class="container pt-5">
        <div class="row">
            <div class="col-4 col-md-3 col-lg-2">
                @include('inc.logo')
            </div>
            <div class="col-sm d-flex justify-content-end">
                <a class="text-black btn font-bold btn-sm bg-transparent py-2 px-3 swirvy-box"
                    style="border-color: #4dc0b5;font-size: 20px;"
                    href="/">
                    @lang('loginregister.how')
                </a>
            </div>
        </div>
    </nav>
</header>
<main id="login-main" class="container p-0 px-0">
    <div class="row mx-auto mt-5 login-panes">
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
            <h3 style="font-size: 24px;">@lang('loginregister.without-account')</h3>
            <h5 style="letter-spacing: 1px;" class="my-5 font-weight-bold"><div class="horz-line"></div>@lang('PICK YOUR LANGUAGE').</h5>
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
            <h5 style="letter-spacing: 1px;" class="mt-5 font-weight-bold"><div class="horz-line"></div>@lang('GET READY...')</h5>
            <div class="d-flex align-middle">
                <span class="me-auto my-5 font-weight-bold text-white" style="font-size: 17px;font-weight: normal !important;">@lang('And take up the challenge!')</span>
                <a href="{{ route('feed') }}">
                    <button id="play-submit-btn" class="btn start-btn px-0"><div><div><i class="fas fa-caret-right"></i></div></div></button>
                </a>
            </div>
        </div>
    </div>
</main>

<footer class="footer mt-auto py-3 login-footer text-white">
    @include('inc.footer')
</footer>
@endsection
