@extends('layout')

@section( 'page_content' )

<h1>Twitter OAuth Token Generation</h1>
Fill in your Consumer API keys as listed under Keys and tokens in your app on <a href="https://developer.twitter.com/apps">Twitter Developers</a>.
If left empty, this will use the keys of the official 5M5V app, which will generate tokens <strong>unusable with your own app</strong>.
<hr/>
{{ Form::open() }}

@error('general')
<div class="alert alert-danger">
    {{ $message }}
</div>
@enderror

<div class="form-group row">
    {{ Form::label('consumer_key', 'Consumer Key', [ 'class' => 'col-md-4 col-form-label text-md-right' ]) }}

    <div class="col-md-6">
        {{ form::text('consumer_key', false, [
            'class' => 'form-control' . ( $errors->has('consumer_key') ? ' is-invalid' : '' ),
            'placeholder' => 'aa1bb2cc3dd4ee5ff6gg7hh8i',
            'autofocus' => true
        ])}}
        @error('consumer_key')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    {{ Form::label('consumer_secret', 'Consumer Secret', [ 'class' => 'col-md-4 col-form-label text-md-right' ]) }}

    <div class="col-md-6">
        {{ form::text('consumer_secret', false, [
            'class' => 'form-control' . ( $errors->has('consumer_secret') ? ' is-invalid' : '' ),
            'placeholder' => 'Aa1Bb2Cc3Dd4Ee5Ff6Gg7Hh8Ii9Jj0Kk1Ll2Mm3Nn4Oo5Pp6Qq'
        ])}}
        @error('consumer_secret')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-8 offset-md-4">
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    </div>
</div>


{{ Form::close() }}

@endsection
