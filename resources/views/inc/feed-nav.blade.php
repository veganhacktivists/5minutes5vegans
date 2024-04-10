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
            <a id="resetLink" href="#"><span><i class="fas fa-undo fa-sm" style="color:red"></i></span></a>
        </div>
    </div>
    <div class="col text-right">
        <a href="https://veganhacktivists.org/support" id="donate-button">
            @lang('Donate') <i class="fa fa-hand-holding-heart"></i>
        </a>
    </div>
</nav>
<div class="timer-section-middle">
    <div id="minutes-left" class="text-center">
        @lang('sidebar.minutes-left')
    </div>
</div>
<form id="logout-form" method="post" action="{{ route('logout') }}">
    @csrf
</form>
