<div class="row">
    @each( 'verbiage.verbiage', $verbiages, 'verbiage' )
</div>
<div class="p-2 row">
    <textarea class="col w-100 verbiage-message p-3" rows="4" style="font-size: 18px;"></textarea>
    <div class="col-auto d-flex flex-column justify-content-between">
        <button class="btn btn-primary">@lang('New')</button>
        <button class="btn btn-success invisible">@lang('Save')</button>
        <button class="btn btn-danger invisible">@lang('Delete')</button>
    </div>
</div>
