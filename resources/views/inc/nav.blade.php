<div class="navbar text-light border-bottom border-success row">
    <div class="col">
        <div class="dropdown">
            <button type="button" class="text-white btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" id="localeChooser">
                <span class="mr-2">Pick Your Audience</span>
                <img src="https://www.countryflags.io/GB/flat/32.png" class="flag" />
            </button>

           <div class="dropdown-menu" aria-labelledby="localeChooser">
               <a class="dropdown-item"
                   rel="alternate"
                   hreflang="de"
                   href="#"
                >
                    <img src="https://www.countryflags.io/DE/flat/32.png"/>
                    <div class="d-inline p-2">Deutsch</div>
                </a>
                <a class="dropdown-item"
                    rel="alternate"
                    hreflang="en"
                    href="#"
                 >
                     <img src="https://www.countryflags.io/GB/flat/32.png"/>
                     <div class="d-inline p-2">English</div>
                 </a>
                <a class="dropdown-item"
                    rel="alternate"
                    hreflang="es"
                    href="#"
                 >
                     <img src="https://www.countryflags.io/ES/flat/32.png"/>
                     <div class="d-inline p-2">Español</div>
                 </a>
                <a class="dropdown-item"
                    rel="alternate"
                    hreflang="fr"
                    href="#"
                 >
                     <img src="https://www.countryflags.io/FR/flat/32.png"/>
                     <div class="d-inline p-2">Français</div>
                 </a>
                <a class="dropdown-item"
                    rel="alternate"
                    hreflang="nl"
                    href="#"
                 >
                     <img src="https://www.countryflags.io/NL/flat/32.png"/>
                     <div class="d-inline p-2">Nederlands</div>
                 </a>
            </div>
        </div>
    </div>
    <div class="col-auto">
        <a class="text-white btn rounded-pill font-bold btn-sm bg-pink" href="https://www.patreon.com/veganhacktivists" target="_blank">
            <i class="mr-1 d-md-none d-xl-inline-block fas fa-hand-holding-heart"></i>Donate
        </a>
    </div>
    <div class="col-auto">
        <span class="">{{ link_to_route( 'register', 'Register' ) }} or {{ link_to_route( 'login', 'Login' ) }}</span>
    </div>
</div>
