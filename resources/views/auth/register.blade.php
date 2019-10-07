@extends('layout')

@section('title', 'Register')

@section('scripts')
    <script src="https://www.google.com/recaptcha/api.js?" async defer></script>
    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/login-landing.js') }}" defer></script>
@endsection

@section('page_content')
<div class="container-fluid" style="background-image: url({{ asset('images/5minutes5vegans_design_v1_login_bg.png') }})">
        <div class="container py-5">
            <!-- Header -->
            <div class="row">
                <div class="col-sm">
                    <a href="{{ route('feed') }}"><img class="w-25" src="{{ asset('images/logo.svg') }}"/></a>
                </div>
                <div class="col-sm text-right">
                    <a class="text-black btn font-bold btn-sm bg-transparent py-2 px-3 swirvy-box"
                       style="border-color: #4dc0b5;"
                       href="/">
                        How does it work?
                    </a>
                </div>
            </div>
            <!-- Content -->
            <div class="row mt-5 mx-auto login-panes">
                <div class="col login-pane login-pane-left">
                    <div id="register-pane">
                        <div class="d-flex">
                            <h1 class="mr-auto">{{ __('Register') }}</h1>
                            <button id="login-btn" class="btn btn-link font-weight-bold my-auto">Or login&nbsp;<i class="fas fa-caret-right"></i></button>
                        </div>
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
                                    {{ Form::checkbox('newsletter-check', null, false, [
                                        "class" => "form-check-input",
                                    ]) }}
                                    <label class="form-check-label small" for="newsletter-check">I'd like to receive newsletter</label>
                                </div>
                                {{ Form::submit(__('Create Account'), ['class' => 'btn btn-sm btn-primary swirvy-box ml-auto']) }}
                            </div>
                        {{ Form::close() }}
                    </div>
                    <div id="login-pane" class="d-none">
                        @include('auth/login')
                        @yield('login-pane')
                    </div>
                </div>
                <div class="col login-pane login-pane-right">
                    <h3>Start without account</h3>
                    <h5 class="my-5 font-weight-bold"><div class="horz-line"></div>PICK YOUR LANGUAGE.</h5>
                    {{ Form::open([ 'route' => 'login' ]) }}
                        <div class="d-flex mb-5 lang-flags">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                @php
                                    $checked = (LaravelLocalization::getCurrentLocale() == $localeCode) ? true : false;
                                    $flag = strtolower(getCountry( $properties ));
                                @endphp
                                <label>
                                    {{ Form::radio("flag-selection", null, $checked) }}
                                    <button type="button" class="btn">
                                        <img src="{{ asset('images/landing/'.$flag).'.png' }}">
                                    </button>
                                </label>
                            @endforeach
                        </div>
                        <h5 class="mt-5 font-weight-bold"><div class="horz-line"></div>GET READY...</h5>
                        <div class="d-flex align-middle">
                            <span class="mr-auto my-5 font-weight-bold text-white">And take up the challenge!</span>
                            <button class="btn start-btn px-0" type="submit"><div><div><i class="fas fa-caret-right"></i></div></div></button>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="d-flex flex-row justify-content-between align-items-center py-3">
            <div>
                <a href="https://www.patreon.com/veganhacktivists/"><img src="{{ asset('images/patreon-button.png') }}"></a>
            </div>
            <div class="text-secondary">
                Website hosted and designed by <a href="https://veganhacktivists.org/">vegan hactivists</a> with love&nbsp;<i class="fas fa-heart text-danger"></i>
            </div>
            <div>
                <a href="https://veganhacktivists.org/"><img class="float-right" src="https://i.imgur.com/xSHDo4E.png"></a>
            </div>
        </footer>
    </div>

    {{-- <script>
        const $signupSection = document.getElementById('register-pane')
        const $loginSection = document.getElementById('login-pane')
        const $loginButton = document.getElementById('login-btn')

        showLoginSection = function () {
            $loginSection.classList.add('d-block')
            $loginSection.classList.remove('d-none')

            $signupSection.classList.add('d-none')
            $signupSection.classList.remove('d-block')
        }

        $loginButton.addEventListener("click", showLoginSection)

        if (new URL(window.location).searchParams.get('login') === '1') {
            showLoginSection()
        }
    </script> --}}
@endsection
