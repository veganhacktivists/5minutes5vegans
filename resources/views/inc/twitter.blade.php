<div class="timeline">
    @foreach ($tweets as $tweet)
        <a class="tweet" href="https://twitter.com/_/status/{{ $tweet->id }}" target="_blank">
            <div class="tweet-header">
                <img src="{{ $tweet->from_profile_image }}" alt="" width="50" height="50">
                <span>
                    <span class="tweet-full-name">{{ $tweet->from_full_name }}</span>
                    <span class="tweet-user-name">{{ "@{$tweet->from_user_name}" }}</span>
                </span>
                <span>·</span>
                <span>{{ $tweet->date->format('d F') }}</span>
            </div>

            <div class="tweet-text">
                <p>{{ $tweet->text }}</p>
                @if ($tweet->media_type)
                    <p><img src="{{ $tweet->media_url }}" alt=""></p>
                @endif
            </div>

            <div class="tweet-footer">
                <span>💬 {{ $tweet->reply_count }}</span>
                <span>🤍 {{ $tweet->retweet_count }}</span>
            </div>
        </a>
    @endforeach
</div>
