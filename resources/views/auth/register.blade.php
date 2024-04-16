@extends('auth/login-layout')

@section('register-pane')
    <div class="d-flex">
        <h1 class="mr-auto">{{ __('Register') }}</h1>
        <a href="{{ route('login') }}">
            <button class="btn btn-link font-weight-bold my-auto">@lang('loginregister.or-login')&nbsp;<i class="fas fa-caret-right"></i></button>
        </a>
    </div>
    <p class="mt-3">
        @lang('loginregister.intro')
    </p>
    <form method="post" action="{{ route('register') }}">
        @csrf
        <input type="text" name="name" class="form-control text-uppercase mb-1{{ $errors->has('name') ? ' is-invalid' : '' }}" required placeholder="{{ __('Your Name') }}" value="{{ old('name') }}"/>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input type="email" name="email" class="form-control text-uppercase mb-1 @error('password') is-invalid @enderror" required placeholder="{{ __('Your Email') }}" value="{{ old('email') }}"/>

        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        <input type="password" name="password" class="form-control text-uppercase mb-1 @error('password') is-invalid @enderror" required placeholder="{{ __('Password') }}" value="{{ old('password') }}"/>

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input type="password" name="password_confirmation" class="form-control text-uppercase mb-1 @error('password_confirmation') is-invalid @enderror" required placeholder="{{ __('Confirm Password') }}" value="{{ old('password_confirmation') }}"/>

        @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }} mt-3">
            <label class="text-md-right">@lang('loginregister.robot')</label>
            <div>
                {!! app('captcha')->display() !!}

                @error('g-recaptcha-response'))
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-inline">
            <div class="form-check">
                <input type="checkbox" name="newsletter-check" class="form-check-input" id="newsletter-check" value="{{ old('newsletter-check') }}"/>
                <label class="form-check-label small" for="newsletter-check" style="font-size: 15px;">@lang('loginregister.newsletter')</label>
            </div>
            <button type="submit" class="btn btn-primary swirvy-box ml-auto">@lang('Create Account')</button>
        </div>
    </form>
@endsection

