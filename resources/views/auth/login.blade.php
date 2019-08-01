@extends('layout')

@section('title', 'Login')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    {{ Form::open( [ 'route' => 'login' ] ) }}

                        <div class="form-group row">
                            {{ Form::label('email', __('E-Mail Address'), [ 'class' => 'col-md-4 col-form-label text-md-right' ]) }}

                            <div class="col-md-6">
                                {{ Form::email('email', false, [
                                    'class' => 'form-control' . ( $errors->has('email') ? ' is-invalid' : '' ),
                                    'required' => true,
                                    'autofocus' => true,
                                ] ) }}

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
                                    'class' => 'form-control' . ( $errors->has('password') ? ' is-invalid' : '' ),
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
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    {{ Form::checkbox('remember', false, [ 'class' => 'form-check-input' ]) }}
                                    {{ Form::label('remember', __('Remember Me')), [ 'class' => 'form-check-label' ] }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {{ Form::submit(__('Login'), ['class' => 'btn btn-primary']) }}
                                @if (Route::has('password.request'))
                                    {{ link_to_route( 'password.request', __('Forgot Your Password?'), false, [ 'class' => 'btn btn-link' ] ) }}
                                @endif
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
