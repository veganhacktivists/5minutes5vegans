<!-- <div class="text-center">
    <a href="{{ route('feed') }}"><img class="w-50 logo" src="{{ asset('images/logo.png') }}"/></a>
</div> -->
<div id="feed-nav-1" class="row no-gutters mb-4">
    <div class="col text-left">
        <a href="{{ route('feed') }}"><img class="logo" src="{{ asset('images/logo.svg') }}"/></a>
    </div>
    <div class="col text-right">
        @guest
            {{ link_to_route('register', 'Register', null, array('class' => 'mr-3')) }}
        @endquest
        <a href="https://www.patreon.com/veganhacktivists" id="donate-button">
            Donate <i class="fa fa-hand-holding-heart"></i>
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
        @guest
            {{ link_to_route('register', 'Register', null, array('class' => 'mr-3')) }}
        @endguest
        <a href="https://www.patreon.com/veganhacktivists" id="donate-button">
            Donate <i class="fa fa-hand-holding-heart"></i>
        </a>
    </div>
</div>

<div id="minutes-left" class="text-center mb-4">
    MINUTES LEFT
</div>

<script>
    var customVerbiages = @json($verbiages);
</script>

<verbiages></verbiages>

<!-- <h3 class="">
    <div class="p-3 text-center">{!! __('sidebar.header') !!}</div>
    <div class="timer-complete text-center text-success">
        <small>{!! __('sidebar.success') !!}
            <br/>
            <button class="mt-2 timer-restart btn btn-success">
                <i class="fas fa-redo"></i> {{ __('sidebar.repeat') }}
            </button>
        </small>
    </div>
</h3> -->

<div class="footer mt-4">
        <img src="https://i.imgur.com/xSHDo4E.png" height="100">
        <div class="text-center font-serif mt-4 px-4">Website hosted and designed by {{ link_to('https://veganhacktivists.org/', 'Vegan Hacktivists') }} with love
              <i class="far fa-heart"></i>
      </div>
</div>
