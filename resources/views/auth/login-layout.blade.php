@extends('layout')

@section('title', 'Register')

@section('scripts')
    <script src="https://www.google.com/recaptcha/api.js?hl={{ app()->getLocale() === 'pt' ? 'pt-BR' : app()->getLocale() }}" async defer></script>
@endsection

@section('page_content')
<section id="login-bg" style="background-image: url({{ asset('images/login_bg.jpg') }});">
</section>

<header>
    <nav class="container pt-4">
        <div class="row">
            <div class="col-4 col-md-3 col-lg-2">
                @include('inc.logo')
            </div>
            <div class="col-sm d-flex justify-content-end">
                <button type="button" class="login-how" data-bs-toggle="modal" data-bs-target="#how-it-works">
                    @lang('loginregister.how')
                </button>
            </div>
        </div>
    </nav>
</header>
<main id="login-main" class="container p-0 px-0">
    <div class="row mx-auto mt-3 login-panes">
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
            <h5 style="letter-spacing: 1px;" class="my-4 font-weight-bold"><div class="horz-line"></div>@lang('PICK YOUR LANGUAGE')</h5>
            @include('inc.flag-list')
            <h5 style="letter-spacing: 1px;" class="mt-4 font-weight-bold"><div class="horz-line"></div>@lang('GET READY...')</h5>
            <div class="d-flex flex-wrap align-items-center gap-3 my-4">
                <span class="me-auto text-white" style="font-size: 17px;">@lang('And take up the challenge!')</span>
                <a href="{{ route('feed') }}" class="btn swirvy-box start-cta">@lang('loginregister.start')</a>
            </div>
        </div>
    </div>
</main>

@include('inc.how-it-works')

<footer class="footer mt-auto py-3 login-footer text-white">
    @include('inc.footer')
</footer>
@endsection
