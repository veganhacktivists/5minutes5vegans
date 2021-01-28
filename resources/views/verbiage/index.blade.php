<div class="row">
    @each( 'verbiage.verbiage', $verbiages, 'verbiage' )
</div>

<div class="p-2 row">
    <textarea class="col w-100 verbiage-message p-3" rows="4"></textarea>
    <div class="col-auto d-flex flex-column">
        <button class="btn btn-primary" style="margin-bottom: 15px;margin-top: 15px;">@lang('New')</button>
        <button class="btn btn-success invisible" style="margin-bottom: 15px;">@lang('Save')</button>
        <button class="btn btn-danger invisible">@lang('Delete')</button>
    </div>
</div>
