@section('login-pane')
<h1 class="mb-5">Login</h1>
{{ Form::open( [ 'route' => 'login' ] ) }}
    {{ Form::email('email', false, [
        'class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''),
        'required' => true,
        'placeholder' => 'EMAIL',
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
    {{ Form::submit(__('Log In'), ['class' => 'btn btn-sm btn-primary swirvy-box mt-5 float-right']) }}
{{ Form::close() }}
@endsection
