<div class="row px-3">
    @each( 'verbiage.verbiage', $verbiages, 'verbiage' )
</div>
<div class="p-2 row">
    <textarea class="col w-100 verbiage-message p-3" rows="4"></textarea>
    <div class="col-auto d-flex flex-column justify-content-between">
        <button class="btn btn-primary">New</button>
        <button class="btn btn-success invisible">Save</button>
        <button class="btn btn-danger invisible">Delete</button>
    </div>
</div>
