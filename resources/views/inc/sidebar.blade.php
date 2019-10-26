<!-- <div class="text-center">
    <a href="{{ route('feed') }}"><img class="w-50 logo" src="{{ asset('images/logo.png') }}"/></a>
</div> -->
<div id="feed-nav-1" class="row no-gutters mb-4">
    <div class="col text-left">
        <a href="{{ route('feed') }}"><img class="logo" src="{{ asset('images/logo.svg') }}"/></a>
    </div>
    <div class="col text-right">
        @auth
            {{ link_to_route('logout', __('Logout'), null, ['class' => 'mr-3', 'onclick' => 'event.preventDefault(); $("#logout-form").submit();']) }}
        @endauth
        @guest
            {{ link_to_route('register', __('Register'), null, array('class' => 'mr-3')) }}
        @endguest
        <a href="https://www.patreon.com/veganhacktivists" id="donate-button">
            @lang('Donate') <i class="fa fa-hand-holding-heart"></i>
        </a>
    </div>
</div>

<div id="feed-nav-2" class="row no-gutters">
    <div class="col text-left">
        <a href="{{ route('feed') }}"><img class="logo" src="{{ asset('images/logo.svg') }}"/></a>
    </div>
    <div class="col text-center timer-section">
        <div class="timer-display">
            <div class="minutes">05</div>
            <div class="seconds">00</div>
        </div>
    </div>
    <div class="col text-right">
        @auth
            {{ link_to_route('logout', __('Logout'), null, ['class' => 'mr-3', 'onclick' => 'event.preventDefault(); $("#logout-form").submit();']) }}
        @endauth
        @guest
            {{ link_to_route('register', __('Register'), null, array('class' => 'mr-3')) }}
        @endguest
        <a href="https://www.patreon.com/veganhacktivists" id="donate-button">
            @lang('Donate') <i class="fa fa-hand-holding-heart"></i>
        </a>
    </div>
</div>

{{ Form::open(['route' => 'logout', 'id' => 'logout-form']) }}{{ Form::close() }}

<div id="minutes-left" class="text-center mb-4">
    @lang('sidebar.minutes-left')
</div>

<script>
    var customVerbiages = @json($verbiages);
</script>

<verbiages></verbiages>

<div class="footer mt-4">
        <img src="https://i.imgur.com/xSHDo4E.png" height="100">
        <div class="text-center font-serif mt-4 px-4">@lang('landing.credits', [ 'link' => link_to('https://veganhacktivists.org/', 'Vegan Hacktivists', ['target' => '_blank']) ])
              <i class="far fa-heart"></i>
      </div>
</div>
