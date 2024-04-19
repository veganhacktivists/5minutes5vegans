<div class="timeline">
    @foreach ($tweets as $tweet)
        <a class="tweet" href="https://twitter.com/_/status/{{ $tweet->id }}" target="_blank">
            <div>
                <p>{{ $tweet->from }}</p>
                <p>{{ $tweet->text }}</p>
            </div>
        </a>
    @endforeach
</div>
