@extends('layout')

@section('title', 'Reset Password')

@section('page_content')
<section id="login-bg" style="background-image: url({{ asset('images/login_bg.png') }});">
</section>
<div style="background-color: #3e6c5b82 !important;">
    @include('inc.navbar')
</div>
<main class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card reset-box">
                <div class="card-header">
                    <h2 style="font-family: 'Lora';">
                        {{ __('Reset Password') }}
                    </h2>
                </div>

                <div class="card-body">
                    @yield('card_body')
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="py-3 page-footer text-white fixed-bottom">
    @include('inc.footer')
</footer>
@endsection
