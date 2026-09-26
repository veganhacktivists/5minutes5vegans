@extends('auth/login-layout')
@php($pageName = __('Register'))

@section('register-pane')
    <div class="d-flex">
        <h1 class="me-auto">{{ __('Register') }}</h1>
        <a href="{{ route('login') }}">
            <button class="btn btn-link font-weight-bold my-auto">@lang('loginregister.or-login')&nbsp;<i class="fas fa-caret-right"></i></button>
        </a>
    </div>
    <p class="mt-3">
        @lang('loginregister.intro')
    </p>
    <form method="post" action="{{ route('register') }}">
        @csrf
        <input type="text" name="name" class="form-control mb-1{{ $errors->has('name') ? ' is-invalid' : '' }}" required placeholder="{{ __('Your Name') }}" value="{{ old('name') }}"/>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input type="email" name="email" class="form-control mb-1 @error('email') is-invalid @enderror" required placeholder="{{ __('Your Email') }}" value="{{ old('email') }}"/>

        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        <input type="password" name="password" class="form-control mb-1 @error('password') is-invalid @enderror" required placeholder="{{ __('Password') }}"/>

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input type="password" name="password_confirmation" class="form-control mb-1 @error('password_confirmation') is-invalid @enderror" required placeholder="{{ __('Confirm Password') }}"/>

        @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <div class="mb-3{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }} mt-3">
            <label class="text-md-right">@lang('loginregister.robot')</label>
            <div>
                {!! app('captcha')->display() !!}

                @error('g-recaptcha-response')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary swirvy-box">@lang('Create Account')</button>
        </div>
    </form>
@endsection

