@extends('auth.passwords.reset-layout')

@section('card_body')
{{ Form::open( [ 'route' => 'password.update' ] ) }}

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group row">

        <div class="col-md-8 offset-md-2">
            {{ Form::email('email', false, [
                'class' => 'form-control text-white' . ($errors->has('email') ? ' is-invalid' : ''),
                'required' => true,
                'autofocus' => true,
                'placeholder' => 'YOUR EMAIL ADDRESS',
            ]) }}

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">

        <div class="col-md-8 offset-md-2">
            {{ Form::password('password', [
                'class' => 'form-control text-white' . ($errors->has('password') ? ' is-invalid' : ''),
                'required' => true,
                'placeholder' => 'NEW PASSWORD'
            ]) }}

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">

        <div class="col-md-8 offset-md-2">
            {{ Form::password('password_confirmation', [
                'class' => 'form-control text-white' . ($errors->has('password_confirmation') ? ' is-invalid' : ''),
                'required' => true,
                'placeholder' => 'CONFIRM PASSWORD',
            ]) }}

            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-5 ml-auto">
            {{ Form::submit(__('Reset Password'), ['class' => 'btn btn-primary swirvy-box']) }}
        </div>
    </div>
{{ Form::close() }}
@endsection
