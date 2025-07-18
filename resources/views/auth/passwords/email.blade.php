@extends('auth.passwords.reset-layout')

@section('card_body')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<form method="post" action="{{ route('password.email') }}">
@csrf

    <div class="mb-3 row">
        <div class="col-md-8 offset-md-2">
            <input type="email" class="form-control text-white @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus placeholder="{{ __('YOUR EMAIL ADDRESS') }}" />

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-4 offset-md-6">
            <button type="submit" class="btn btn-primary swirvy-box">
                {{ __('Send Password Reset Link') }}
            </button>
        </div>
    </div>
</form>
@endsection
