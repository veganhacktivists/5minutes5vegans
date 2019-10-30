<div class="container-fluid container-fluid-max">
    <div class="row">
    <div class="col-12 col-md-6 col-lg-4">
        @lang('Follow us on') <i class="fab fa-instagram"></i> {{ link_to('https://www.instagram.com/veganhacktivists', 'Instagram', ['class' => 'lnk', 'target' => '_blank']) }}
    </div>
    <div class="col-12 col-md-6 col-lg-4 text-center">
        <div>
        @lang('landing.credits', [ 'link' => link_to('https://veganhacktivists.org/', 'Vegan Hacktivists', ['target' => '_blank']) ])
        <i class="far fa-heart"></i>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 text-right">
        @lang('Support us on') {{ link_to('https://www.patreon.com/veganhacktivists', 'Patreon', ['class' => 'lnk', 'target' => '_blank']) }}
    </div>
    </div>
</div>
