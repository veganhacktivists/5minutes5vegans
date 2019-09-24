@extends('layout')

@section('title', 'Register')

@section('scripts')
    <script src="https://www.google.com/recaptcha/api.js?" async defer></script>
@endsection

@section('page_content')
    <div class="container-fluid" style="background-color: gainsboro;">
        <div class="container py-5">
            <!-- Header --> 
            <div class="row">
                <div class="col-sm">
                    <a href="{{ route('feed') }}"><img class="w-25" src="{{ asset('images/logo.png') }}"/></a>
                </div>
                <div class="col-sm text-right">
                    <a class="text-black btn font-bold btn-sm bg-transparent py-2 px-3 swirvy-box"
                       style="border-color: #4dc0b5;"
                       href="#">
                        How does it work?
                    </a>
                </div>
            </div>
            <!-- Content -->
            <div class="row mt-5 mx-auto w-75">
                <div class="col login-pane login-pane-left">
                    <span class="d-flex">
                        <h1 class="mr-auto">{{ __('Register') }}</h1>
                        <a class="small font-weight-bold my-auto" href="#">Or login&nbsp;<i class="fas fa-caret-right"></i></a>
                    </span>
                    <p class="mt-3">
                        When you register a free account, you will be able to edit
                        and add quick to copy answers to the most common questions
                        people curious about veganism have.
                    </p>
                    {{ Form::open( [ 'route' => 'register' ] ) }}
                        {{ Form::text('name', false, [
                            'class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''),
                            'required' => true,
                            'autofocus' => true,
                            'placeholder' => 'YOUR NAME',
                        ]) }}

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        {{ Form::email('email', false, [
                            'class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''),
                            'required' => true,
                            'placeholder' => 'YOUR EMAIL',
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

                        {{ Form::password('password_confirmation', [
                            'class' => 'form-control' . ($errors->has('password_confirmation') ? ' is-invalid' : ''),
                            'required' => true,
                            'placeholder' => 'CONFIRM PASSWORD',
                        ]) }}

                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }} mt-3">
                            <label class="text-md-right">Confirm you are not a robot</label>
                            <div>
                                {!! app('captcha')->display() !!}

                                @error('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-inline">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="newsletter-check">
                                <label class="form-check-label small" for="newsletter-check">I'd like to receive newsletter</label>
                            </div>
                            {{ Form::submit(__('Create Account'), ['class' => 'btn btn-sm btn-primary swirvy-box ml-auto']) }}
                        </div>
                    {{ Form::close() }}
                </div>
                <div class="col login-pane login-pane-right">
                    <h3>Start without account</h3>
                    <h5 class="my-5 font-weight-bold"><div class="horz-line"></div>PICK YOUR LANGUAGE.</h5>
                    
                    <div class="d-flex mb-5 lang-flags">
                        <div class="border-dark border-right">
                            <img src="{{ asset('images/en-flag.png') }}">
                        </div>
                        <div class="border-dark border-right">
                            <img src="{{ asset('images/de-flag.png') }}">
                        </div>
                        <div class="border-dark border-right">
                            <img src="{{ asset('images/fr-flag.png') }}">
                        </div>
                        <div>
                            <img src="{{ asset('images/es-flag.png') }}">
                        </div>
                    </div>
                    
                    <h5 class="mt-5 font-weight-bold"><div class="horz-line"></div>GET READY...</h5>
                    <div class="d-flex align-middle">
                    <span class="mr-auto my-5 font-weight-bold text-white">And take up the challenge!</span>
                    <button class="btn start-btn px-0"><div><div><i class="fas fa-caret-right"></i></div></div></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="d-flex flex-row justify-content-between align-items-center pb-3">
            <div>
                <a href="https://youaretheirvoice.com/"><img style="height: 45px;" src="{{ asset('images/yatv-logo.png') }}"></a>
            </div>
            <div class="text-secondary">
                Website hosted and designed by vegan hactivists with love&nbsp;<i class="fas fa-heart text-danger"></i>
            </div>
            <div>
                <a href="https://veganhacktivists.org/"><img class="float-right" style="height: 45px;" src="https://i.imgur.com/xSHDo4E.png"></a>
            </div>
        </div>
    </div>
@endsection