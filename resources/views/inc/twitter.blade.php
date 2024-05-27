<div class="timeline">
    @foreach ($tweets as $tweet)
        <a class="card" href="https://x.com/{{ $tweet->from_user_name }}/status/{{ $tweet->id }}" target="_blank">
            <div class="header">
                <div class="avatar">
                    <img class="profile-pic"
                         alt=""
                         src="{{ $tweet->from_profile_image }}"
                         onerror="this.onerror = null; this.src='https://abs.twimg.com/sticky/default_profile_images/default_profile_200x200.png'">

                    <div class="user-info">
                        <span class="fullname">{{ $tweet->from_full_name }}</span>
                        <span class="username">{{ "@{$tweet->from_user_name}" }}</span>
                    </div>
                </div>

                <img src="{{ asset('images/twitter/logo.svg') }}" alt="Twitter" width="24" height="24">
            </div>

            <p class="body">{{ $tweet->text }}</p>

            @foreach ($tweet->media as $media)
                <div>
                    <img class="image" src="{{ $media['url'] }}" alt="">
                </div>
            @endforeach

            <p class="timestamp">{{ $tweet->date->format('h:i A · M d, Y') }}</p>

            <div class="divider"></div>

            <div class="stats">
                <div class="stat">
                    <img src="{{ asset('images/twitter/like-icon.svg') }}" alt="❤️" width="24" height="24">
                    <span class="stat-count">{{ $tweet->like_count }}</span>
                </div>

                <div class="stat">
                    <img src="{{ asset('images/twitter/reply-icon.svg') }}" alt="💬" width="24" height="24">
                    <span class="stat-count">{{ $tweet->reply_count }}</span>
                </div>
            </div>
        </a>
    @endforeach
</div>
