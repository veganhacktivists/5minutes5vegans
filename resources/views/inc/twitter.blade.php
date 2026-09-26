<div class="timeline">
    @if ($tweets->isNotEmpty())
        {{-- For first-time visitors and search engines. Got it hides it for good: the head adds .intro-dismissed before the page draws. --}}
        <div class="feed-intro">
            <p>@lang('landing.intro')</p>
            <div class="feed-intro-actions">
                <button type="button" class="feed-intro-how" data-bs-toggle="modal" data-bs-target="#how-it-works">@lang('loginregister.how')</button>
                <button type="button" class="feed-intro-dismiss">@lang('Got it')</button>
            </div>
        </div>
    @endif
    @forelse ($tweets as $tweet)
        <a class="card" data-post="{{ $tweet->id }}" href="https://x.com/{{ $tweet->from_user_name }}/status/{{ $tweet->id }}" target="_blank">
            <div class="header">
                <div class="avatar">
                    <img class="profile-pic"
                         alt=""
                         loading="lazy"
                         src="{{ $tweet->from_profile_image }}">

                    <div class="user-info">
                        <span class="fullname">{{ $tweet->from_full_name }}</span>
                        <span class="username">{{ "@{$tweet->from_user_name}" }}</span>
                    </div>
                </div>

                <img src="{{ asset('images/twitter/logo.svg') }}" alt="X" width="20" height="20">
            </div>

            <p class="body">{{ strip_tags(html_entity_decode($tweet->text)) }}</p>

            @foreach ($tweet->media as $media)
                <div>
                    @switch ($media['type'])
                        @case('photo')
                            <img class="image" src="{{ $media['url'] }}" alt="" loading="lazy">
                            @break
                        @case('video')
                        @case('animated_gif')
                            <video class="video" controls preload="metadata">
                                <source src="{{ $media['url'] }}" type="video/mp4">
                            </video>
                            @break
                    @endswitch
                </div>
            @endforeach

            <p class="timestamp">
                <time datetime="{{ $tweet->date->toIso8601String() }}">{{ $tweet->date->format('h:i A · M d, Y') }}</time>
                <span class="opened-label"><i class="fas fa-check"></i> @lang('Opened')</span>
                <span class="reply-on-x">@lang('Reply on X') <i class="fas fa-arrow-up-right-from-square"></i></span>
            </p>
        </a>
    @empty
        <div class="empty">
            <p>@lang('No recent posts in this language. Check back later.')</p>
            @unless (App::isLocale('en'))
                <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}" class="btn btn-primary swirvy-box">@lang('See English posts')</a>
            @endunless
        </div>
    @endforelse
</div>
