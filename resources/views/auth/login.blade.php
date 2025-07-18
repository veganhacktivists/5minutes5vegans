@extends('auth/login-layout')

@section('login-pane')
    <div class="d-flex mb-4">
        <h1 class="me-auto">{{ __('Login') }}</h1>
        <a href="{{ route('register') }}">
            <button class="btn btn-link font-weight-bold my-auto">@lang('loginregister.or-register')&nbsp;<i class="fas fa-caret-right"></i></button>
        </a>
    </div>
    <form method="post" action="{{ route('login') }}">
        @csrf
        <input type="email" class="text-uppercase form-control mb-2 @error('email') is-invalid @enderror" required placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}"></input>

        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        <input type="password" class="form-control text-uppercase @error('password') is-invalid @enderror" required placeholder="{{ __('Password') }}" name="password" value="{{ old('password') }}" />

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <div class="d-flex justify-content-end mt-5">
            <button type="submit" class="btn btn-large btn-primary swirvy-box">@lang('loginregister.login')</button>
        </div>
    </form>

    <div class="d-flex justify-content-end mt-3">
        <a href="{{ route('password.update') }}" class="small">Forgot password?</a>
    </div>
@endsection
