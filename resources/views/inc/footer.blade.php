<div class="container-fluid container-fluid-max">
    <div class="row">
    <div class="col-12 col-md-6 col-lg-4 text-center">
        @lang('Follow us on') <i class="fab fa-instagram"></i> {{ url('https://www.instagram.com/veganhacktivists', 'Instagram', ['class' => 'lnk', 'target' => '_blank']) }}
    </div>
    <div class="col-12 col-md-6 col-lg-4 text-center">
        <div>
        @lang('landing.credits', [ 'link' => url('https://veganhacktivists.org/', 'Vegan Hacktivists', ['target' => '_blank']) ])
        <i class="far fa-heart"></i>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 text-center">
        @lang('Support us on') <a href="https://veganhacktivists.org/support" target="_blank" class="lnk">veganhacktivists.org</a>
    </div>
    </div>
</div>
