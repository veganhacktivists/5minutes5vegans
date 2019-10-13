@extends('auth/login-layout')

@section('register-pane')
    <div class="d-flex">
        <h1 class="mr-auto">{{ __('Register') }}</h1>
        <a href="{{ route('login') }}">
            <button class="btn btn-link font-weight-bold my-auto">@lang('register.login')&nbsp;<i class="fas fa-caret-right"></i></button>
        </a>
    </div>
    <p class="mt-3">
        @lang('register.intro')
    </p>
    {{ Form::open( [ 'route' => 'register' ] ) }}
        {{ Form::text('name', false, [
            'class' => 'form-control text-uppercase mb-1' . ($errors->has('name') ? ' is-invalid' : ''),
            'required' => true,
            'autofocus' => true,
            'placeholder' => __('Your Name'),
        ]) }}

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        {{ Form::email('email', false, [
            'class' => 'form-control text-uppercase mb-1' . ($errors->has('email') ? ' is-invalid' : ''),
            'required' => true,
            'placeholder' => __('Your Email'),
        ]) }}

        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        {{ Form::password('password', [
            'class' => 'form-control text-uppercase mb-1' . ($errors->has('password') ? ' is-invalid' : ''),
            'required' => true,
            'placeholder' => __('Password'),
        ]) }}

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        {{ Form::password('password_confirmation', [
            'class' => 'form-control text-uppercase mb-1' . ($errors->has('password_confirmation') ? ' is-invalid' : ''),
            'required' => true,
            'placeholder' => __('Confirm Password'),
        ]) }}

        @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }} mt-3">
            <label class="text-md-right">@lang('register.robot')</label>
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
                {{ Form::checkbox('newsletter-check', null, false, [
                    "class" => "form-check-input",
                ]) }}
                <label class="form-check-label small" for="newsletter-check" style="font-size: 15px;">@lang('register.newsletter')</label>
            </div>
            {{ Form::submit(__('Create Account'), ['class' => 'btn btn-large btn-primary swirvy-box ml-auto']) }}
        </div>
    {{ Form::close() }}
@endsection

