@extends('layout')

@section( 'page_content' )

<h1>Twitter OAuth Token Generation</h1>

<div class="alert alert-success">
    <strong>Success!</strong> You have succesfully generated OAuth keys to authorise {{ $screen_name }} to use your app.<br/>
</div>
<div class="mb-3">
    Your credentials are listed temporarily below. They will function identically to your developer access tokens in your app, until access is revoked by the user.<br/>
    All associated information has been deleted from our server. This page will reset in two minutes.
</div>

<div class="form-group row">
    {{ Form::label('oauth_token', 'OAuth Token', [ 'class' => 'col-md-4 col-form-label text-md-right' ]) }}

    <div class="col-md-6">
        {{ form::text('oauth_token', $oauth_token, [
            'class' => 'form-control',
            'readonly' => true
        ])}}
    </div>
</div>

<div class="form-group row">
    {{ Form::label('oauth_token_secret', 'OAuth Token Secret', [ 'class' => 'col-md-4 col-form-label text-md-right' ]) }}

    <div class="col-md-6">
        {{ form::text('oauth_token_secret', $oauth_token_secret, [
            'class' => 'form-control',
            'readonly' => true
        ])}}
    </div>
</div>

{{ link_to_route('twitteroauth', 'Back') }}

<script>
    setTimeout( () => {
        document.location = '{{ route('twitteroauth') }}'
    }, 2 * 60 * 1000 );
</script>

@endsection
