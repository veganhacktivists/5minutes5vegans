@extends('auth.passwords.reset-layout')

@section('card_body')
<form method="post" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">

    <input type="email" class="form-control mb-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus placeholder="{{ __('Your Email') }}" />

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <input type="password" class="form-control mb-2 @error('password') is-invalid @enderror" name="password" required placeholder="{{ __('New Password') }}" />

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required placeholder="{{ __('Confirm Password') }}" />

    @error('password_confirmation')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <div class="d-flex justify-content-end mt-4">
        <button type="submit" class="btn btn-primary swirvy-box">
            {{ __('Reset Password') }}
        </button>
    </div>
</form>
@endsection
