<div class="text-center">
    <a href="{{ route('feed') }}"><img class="w-50 logo" src="{{ asset('images/logo.png') }}"/></a>
</div>

<h3 class="text-white">
    <div class="p-3 text-center">{!! __('sidebar.header') !!}</div>
    <div class="row justify-content-center no-gutters timer-section">
        <div class="timer-display col-auto mr-2">5:00</div>
        <div class="col-auto"><i class="fas fa-stopwatch"></i></div>
    </div>
    <div class="timer-complete text-center text-success">
        <small>{!! __('sidebar.success') !!}
            <br/>
            <button class="mt-2 timer-restart btn btn-success">
                <i class="fas fa-redo"></i> {{ __('sidebar.repeat') }}
            </button>
        </small>
    </div>
</h3>
<hr/>

@if(route::is('feed'))
    @include('inc.verbiage')
@else
    HIiiiiiiiiiiiiiiiiiiiiiiiiiiiii
@endif
