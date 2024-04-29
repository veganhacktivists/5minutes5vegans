<div id="Twitter" class="iframecontent">
    <a
        href="https://twitter.com/5m5v_{{ App::getLocale() }}"
        class="twitter-timeline"
        data-lang="{{ App::getLocale() }}"
        data-theme="light"
        data-link-color="#19CF86">
    </a>
    <div class="twitter-timeline" id="timeline-loading">
        <strong>@lang('twitter.loading')</strong>
        <div class="mt-3">
            <p>
                <strong>@lang('twitter.note_label')</strong>
                @lang('twitter.note_body')
            </p>
        </div>
        <div class="mt-3">
            @lang('twitter.try_again', [
                'twitter_link' => "https://twitter.com/5m5v_{{ App::getLocale() }}"
            ])
        </div>
    </div>
    <script
        async
        src="https://platform.twitter.com/widgets.js"
        charset="utf-8"
        onload="document.getElementById('timeline-loading').remove()">
    </script>
</div>
