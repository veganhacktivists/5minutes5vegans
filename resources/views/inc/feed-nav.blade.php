<nav class="row g-0 justify-content-between">
    <div class="col">
        <div class="logo">
            @include('inc.logo')
        </div>
    </div>
    <div class="col text-center timer-section-middle">
        <div class="timer-section">
            <div class="timer-display">
                <div class="minutes">05</div>
                <div class="seconds">00</div>
                <a id="resetLink" href="#" aria-label="{{ __('Restart timer') }}"><span><i class="fas fa-undo fa-sm" style="color:red"></i></span></a>
            </div>
            <div id="minutes-left" class="text-center">
                @lang('sidebar.minutes-left')
            </div>
        </div>
        <div class="timer-complete">
            <div>@lang("Time's up!")</div>
            <button type="button" class="timer-restart">
                <i class="fas fa-redo"></i> @lang('sidebar.repeat')
            </button>
        </div>
    </div>
    <div class="col d-flex justify-content-end">
        <a href="https://veganhacktivists.org/donate" id="donate-button">
            @lang('Donate') <i class="fa fa-hand-holding-heart"></i>
        </a>
    </div>
</nav>
<form id="logout-form" method="post" action="{{ route('logout') }}">
    @csrf
</form>
