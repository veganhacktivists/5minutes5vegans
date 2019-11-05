@extends('auth.passwords.reset-layout')

@section('card_body')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

{{ Form::open( [ 'route' => 'password.email' ] ) }}

    <div class="form-group row">
        <div class="col-md-8 offset-md-2">
            {{ Form::email('email', false, [
                'class' => 'form-control text-white' . ($errors->has('email') ? ' is-invalid' : ''),
                'required' => true,
                'autofocus' => true,
                'placeholder' => __('YOUR EMAIL ADDRESS'),
            ]) }}

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-4 offset-md-6">
            {{ Form::submit(__('Send Password Reset Link'), ['class' => 'btn btn-primary swirvy-box']) }}
        </div>
    </div>
{{ Form::close() }}
@endsection
