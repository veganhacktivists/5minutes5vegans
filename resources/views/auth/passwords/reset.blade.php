@extends('layout')

@section('title', 'Reset Password')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    {{ Form::open( [ 'route' => 'password.update' ] ) }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            {{ Form::label('email', __('E-Mail Address'), [ 'class' => 'col-md-4 col-form-label text-md-right' ]) }}

                            <div class="col-md-6">
                                {{ Form::email('email', false, [
                                    'class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''),
                                    'required' => true,
                                    'autofocus' => true,
                                ]) }}

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('password', __('Password'), [ 'class' => 'col-md-4 col-form-label text-md-right' ]) }}

                            <div class="col-md-6">
                                {{ Form::password('password', [
                                    'class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''),
                                    'required' => true,
                                ]) }}

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('password_confirmation', __('Confirm Password'), [ 'class' => 'col-md-4 col-form-label text-md-right' ]) }}

                            <div class="col-md-6">
                                {{ Form::password('password_confirmation', [
                                    'class' => 'form-control' . ($errors->has('password_confirmation') ? ' is-invalid' : ''),
                                    'required' => true,
                                ]) }}

                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {{ Form::submit(__('Reset Password'), ['class' => 'btn btn-primary']) }}
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
