@extends('layout')

@section('title', 'Reset Password')

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
                <button type="button" class="login-how" data-bs-toggle="modal" data-bs-target="#how-it-works">
                    @lang('loginregister.how')
                </button>
            </div>
        </div>
    </nav>
</header>
<main id="login-main" class="container">
    <div class="row mx-auto mt-5 justify-content-center">
        <div class="col-md-10 col-lg-7 reset-pane">
            <div class="d-flex mb-4">
                <h1 class="me-auto">{{ __('Reset Password') }}</h1>
                <a href="{{ route('login') }}">
                    <button class="btn btn-link font-weight-bold my-auto">@lang('loginregister.or-login')&nbsp;<i class="fas fa-caret-right"></i></button>
                </a>
            </div>

            @yield('card_body')

            <div class="mt-5">
                @include('inc.flag-list')
            </div>
        </div>
    </div>
</main>

@include('inc.how-it-works')

<footer class="footer mt-auto py-3 login-footer text-white">
    @include('inc.footer')
</footer>
@endsection
