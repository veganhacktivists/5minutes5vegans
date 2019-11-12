<div class="row no-gutters">
    <div class="col text-left">
        <a href="{{ route('feed') }}"><img class="logo" src="{{ asset('images/logo.svg') }}"/></a>
    </div>
    <div class="col text-center timer-section-middle">
        <div class="timer-display">
            <div class="minutes">05</div>
            <div class="seconds">00</div>
        </div>
    </div>
    <div class="col text-right">
        <a href="https://www.patreon.com/veganhacktivists" id="donate-button">
            @lang('Donate') <i class="fa fa-hand-holding-heart"></i>
        </a>
    </div>
</div>
<div class="timer-section-middle">
    <div id="minutes-left" class="text-center">
        @lang('sidebar.minutes-left')
    </div>
</div>
<div id="auth-links-beneath" class="row">
    <div class="col text-center">
        @auth
            {{ link_to_route('logout', __('Logout'), null, ['class' => 'auth-link', 'onclick' => 'event.preventDefault(); $("#logout-form").submit();']) }}
        @endauth
        @guest
            {{ link_to_route('register', __('register'), null, array('class' => 'auth-link')) }}
            or
            {{ link_to_route('login', __('login'), null, array('class' => 'auth-link')) }}
        @endguest
    </div>
</div>

<div class="col text-center timer-section-beneath">
    <div class="timer-display">
        <div class="minutes">05</div>
        <div class="seconds">00</div>
    </div>
    <div id="minutes-left" class="text-center">
        @lang('sidebar.minutes-left')
    </div>
</div>

{{ Form::open(['route' => 'logout', 'id' => 'logout-form']) }}{{ Form::close() }}
