@extends('layout')

@section('title', 'Register')

@section('scripts')
    <script src="https://www.google.com/recaptcha/api.js?" async defer></script>
@endsection

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    {{ Form::open( [ 'route' => 'register' ] ) }}

                        <div class="form-group row">
                            {{ Form::label('name', __('Name'), [ 'class' => 'col-md-4 col-form-label text-md-right' ]) }}

                            <div class="col-md-6">
                                {{ Form::text('name', false, [
                                    'class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''),
                                    'required' => true,
                                    'autofocus' => true,
                                ]) }}

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('email', __('E-Mail Address'), [ 'class' => 'col-md-4 col-form-label text-md-right' ]) }}

                            <div class="col-md-6">
                                {{ Form::email('email', false, [
                                    'class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''),
                                    'required' => true,
                                ]) }}

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
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
                            {{ Form::label('password-confirm', __('Confirm Password'), [ 'class' => 'col-md-4 col-form-label text-md-right' ]) }}

                            <div class="col-md-6">
                                {{ Form::password('password-confirm', [
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
                        </div>

                        <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }} row">
                            <label class="col-md-4 col-form-label text-md-right">Confirm you are not a robot</label>
                            <div class="col-md-6">
                                {!! app('captcha')->display() !!}

                                @error('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {{ Form::submit(__('Register'), ['class' => 'btn btn-primary']) }}
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
