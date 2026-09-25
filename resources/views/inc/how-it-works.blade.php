<div class="modal fade" id="how-it-works" tabindex="-1" aria-labelledby="how-it-works-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content how-modal">
            <div class="modal-header">
                <h2 class="modal-title" id="how-it-works-title">@lang('loginregister.how')</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="{{ __('Close') }}"></button>
            </div>
            <div class="modal-body">
                <p class="how-lead">@lang('landing.hero')</p>
                <ol class="how-steps">
                    <li>@lang('loginregister.how-find')</li>
                    <li>@lang('loginregister.how-reply')</li>
                    <li>@lang('loginregister.how-register')</li>
                </ol>
            </div>
            <div class="modal-footer">
                @if ($onFeed ?? false)
                    <button type="button" class="btn btn-primary swirvy-box" data-bs-dismiss="modal">@lang('loginregister.start')</button>
                @else
                    <a href="{{ route('feed') }}" class="btn btn-primary swirvy-box">@lang('loginregister.start')</a>
                @endif
            </div>
        </div>
    </div>
</div>
