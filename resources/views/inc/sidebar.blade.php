<!-- <div class="text-center">
    <a href="{{ route('feed') }}"><img class="w-50 logo" src="{{ asset('images/logo.png') }}"/></a>
</div> -->
<div class="row no-gutters">
    <div class="col text-left">
        <img class="logo" src="{{ asset('images/logo.svg') }}"/>
    </div>
    <div class="col text-center timer-section">
        <div class="timer-display">
            <div class="minutes">5</div>
            <div class="seconds">00</div>
        </div>
    </div>
    <div class="col text-right">
      <div id="donate-button">
        <div id="donate-corner-left"></div>
        <div id="donate-corner-border-left"></div>
        <div id="donate-corner-right"></div>
        <div id="donate-corner-border-right"></div>
        Donate <i class="fa fa-heart"></i>
      </div>
    </div>
</div>
<div id="minutes-left" class="text-center mb-5">
    MINUTES LEFT
</div>

<h3 id="easy-to-copy-resources" class="pb-1">EASY TO COPY RESOURCES</h3>

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

@if(isset($verbiages))
    @include('verbiage.index')
@else
    HIiiiiiiiiiiiiiiiiiiiiiiiiiiiii
@endif
