{{-- Which platform's posts the feed shows, one at a time. platformToggle.js keeps it in step with the hide-x or hide-bluesky class on <html>. --}}
<div class="platform-toggle" role="group" aria-labelledby="platform-toggle-label">
    <span class="platform-toggle-label" id="platform-toggle-label">@lang('Show posts from')</span>
    <button type="button" data-platform="x" aria-pressed="true">
        <img class="platform-logo x-logo" src="{{ asset('images/twitter/logo.svg') }}" alt="" width="14" height="14">X
    </button>
    <button type="button" data-platform="bluesky" aria-pressed="false">
        <img class="platform-logo" src="{{ asset('images/bluesky/logo.svg') }}" alt="" width="14" height="14">Bluesky
    </button>
</div>
<p class="platform-empty" data-platform="x" hidden>@lang('No recent X posts in this language.')</p>
<p class="platform-empty" data-platform="bluesky" hidden>@lang('No recent Bluesky posts in this language.')</p>
