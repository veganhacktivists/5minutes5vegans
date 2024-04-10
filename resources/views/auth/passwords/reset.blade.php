@extends('auth.passwords.reset-layout')

@section('card_body')
<form method="post" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group row">

        <div class="col-md-8 offset-md-2">
            <input type="email" class="form-control text-white @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus placeholder="YOUR EMAIL ADDRESS" />

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">

        <div class="col-md-8 offset-md-2">
            <input type="password" class="form-control text-white @error('password') is-invalid @enderror" name="password" value="{{ old('password')  }}" required placeholder="NEW PASSWORD" />

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">

        <div class="col-md-8 offset-md-2">
            <input type="password" class="form-control text-white @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{ old('password_confirmation') }}" required placeholder="CONFIRM PASSWORD" />

            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-5 ml-auto">
            <button type="submit" class="btn btn-primary swirvy-box">
                {{ __('Reset Password') }}
            </button>
        </div>
    </div>
</form>
@endsection
