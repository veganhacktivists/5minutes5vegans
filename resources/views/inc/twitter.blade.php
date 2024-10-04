<div class="timeline">
    @forelse ($tweets as $tweet)
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

            <p class="body">{{ strip_tags(html_entity_decode($tweet->text)) }}</p>

            @foreach ($tweet->media as $media)
                <div>
                    @switch ($media['type'])
                        @case('photo')
                            <img class="image" src="{{ $media['url'] }}" alt="">
                            @break
                        @case('video')
                        @case('animated_gif')
                            <video class="video" controls>
                                <source src="{{ $media['url'] }}" type="video/mp4">
                            </video>
                            @break
                    @endswitch
                </div>
            @endforeach

            <p class="timestamp">{{ $tweet->date->format('h:i A · M d, Y') }}</p>
        </a>
    @empty
        <div class="empty">No tweets in this language yet, please come back later!</div>
    @endforelse
</div>
