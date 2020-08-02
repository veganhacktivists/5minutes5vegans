<nav class="row no-gutters justify-content-between">
    <div class="col">
        <div class="logo">
            @include('inc.logo')
        </div>
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
</nav>
<div class="timer-section-middle">
    <div id="minutes-left" class="text-center">
        @lang('sidebar.minutes-left')
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
