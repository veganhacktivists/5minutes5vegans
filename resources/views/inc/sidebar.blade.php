<div class="text-center">
    <a href="{{ route('feed') }}"><img class="w-50 logo" src="{{ asset('images/logo.png') }}"/></a>
</div>

<h3 class="text-white">
    <div class="p-3 text-center">In just 5 minutes you can help 5 or more people become Vegan right <i>now</i> — get started below!</div>
    <div class="row justify-content-center no-gutters timer-section">
        <div class="timer-display col-auto mr-2">5:00</div>
        <div class="col-auto"><i class="fas fa-stopwatch"></i></div>
    </div>
    <div class="timer-complete text-center text-success">
        <small>5 minutes have passed, you did it!<br/>
            Did you manage to create 5 new vegans?<br/>
            <button class="mt-1 timer-restart btn btn-success">
                <i class="fas fa-redo"></i> Again!
            </button>
        </small>
    </div>
</h3>
<hr/>
@include('verbiage.index')
