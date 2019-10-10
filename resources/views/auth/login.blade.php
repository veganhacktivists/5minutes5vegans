@extends('auth/login-layout')

@section('login-pane')
    <div class="d-flex mb-4">
        <h1 class="mr-auto">{{ __('Login') }}</h1>
        <a href="{{ route('register') }}">
            <button class="btn btn-link font-weight-bold my-auto">Or Register&nbsp;<i class="fas fa-caret-right"></i></button>
        </a>
    </div>
    {{ Form::open( [ 'route' => 'login' ] ) }}
        {{ Form::email('email', false, [
            'class' => 'form-control mb-2' . ($errors->has('email') ? ' is-invalid' : ''),
            'required' => true,
            'placeholder' => 'EMAIL',
        ]) }}

        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        {{ Form::password('password', [
            'class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''),
            'required' => true,
            'placeholder' => 'PASSWORD',
        ]) }}

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        {{ Form::submit(__('Log In'), ['class' => 'btn btn-sm btn-primary swirvy-box mt-5 float-right']) }}
    {{ Form::close() }}
@endsection
