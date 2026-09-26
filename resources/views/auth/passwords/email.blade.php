@extends('auth.passwords.reset-layout')
@php($pageName = __('Reset Password'))

@section('card_body')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<form method="post" action="{{ route('password.email') }}">
    @csrf

    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus placeholder="{{ __('Your Email') }}" />

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <div class="d-flex justify-content-end mt-4">
        <button type="submit" class="btn btn-primary swirvy-box">
            {{ __('Send Password Reset Link') }}
        </button>
    </div>
</form>
@endsection
