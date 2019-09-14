<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>5 Minutes 5 Vegans</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        @yield('css')

    </head>

    <body class="landing">
    <header class="fixed-top page-header">
    <div class="container-fluid container-fluid-max">
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('images/landing/5m5v logo.png') }}"  alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-lg-between" id="navbarNav">
        <ul class="navbar-nav">
          @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li class="nav-item">
                 <a class="nav-link flag-container" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    <img src="https://www.countryflags.io/{{ getCountry( $properties ) }}/flat/32.png"/ class="flag rounded-circle {{ LaravelLocalization::getCurrentLocale() == $localeCode ? 'img-thumbnail' : '' }}">
                </a>
               </li> 
          @endforeach
        </ul>
        <div class="text-white">
          <a href="" class="mr-2 btn btn-link">
            <div class="d-none d-xl-inline">Login</div>
          </a>
          <a href="" class="btn btn-primary">
            <div class="d-none d-xl-inline">Open free account</div>
          </a>
        </div>
      </div>
    </nav>
  </div>
</header>
    <main>
  <!-- Banner Section -->
  <section id="home" class="d-flex align-items-center position-relative vh-100 cover hero" style="background-image:url({{ asset('images/landing/banner-top.jpg') }});">
  <div class="container-fluid container-fluid-max">
    <div class="row">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <h1 class="text-white">Take a challenge to help as many people become <span>vegan</span> as possible in merely 5 minutes!</h1>
        <div class="mt-3">
          <a class="btn btn-primary bg-red text-white mr-2" href="#howdoesitwork" role="button">Get started below</a>
        </div> 
      </div>
    </div>
  </div>
</section>
  <!-- How does it work Section -->
  <section id="howdoesitwork" class="d-flex align-items-center position-relative vh-100 cover hero" style="background-image:url({{ asset('images/landing/background-cows.jpg') }});">
  <div class="container-fluid container-fluid-max">
    <div class="row text-center py-5">
      <div class="col-12 pb-4">
        <h2 class="text-red align-left">How does it work?</h2>
      </div>
      <div class="col-12 col-sm-6 col-lg-4">Let us explain</div>
      <div class="col-12 col-sm-6 col-lg-4">What do I need?</div>
      <div class="col-12 col-sm-6 col-lg-4">Why should I login?</div>
      <div class="col-12 action-band">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-6 col-lg-4">Okay &ndash; I'm ready!</div>
            <div class="col-12 col-sm-6 col-lg-4">Pick language</div>
            <div class="col-12 col-sm-6 col-lg-4">Take up the challenge</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid container-fluix-max">
    <div class="col-12 pt-3">
        <a class="btn bg-red text-white" target="_blank" href="" role="button">...</a>
      </div>
  </div>
</section>
  <!-- Else Section -->
  <section id="process" class="process">
  <div class="container-fluid container-fluid-max">
    <div class="row text-center py-5">
      <div class="col-6 pb-4">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="text-red">What else can I do?</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="number-block">1</div>
              <h3>Be the voice of the animals</h3>
              <p>Whether you have a lot of time or litte, whether you're new or experienced, there's an organization that's looking for help to spread compassionate vegan message.</p>
              <p><small>View Vegan Activism Website</small></p>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
            <div class="number-block">2</div>
              <h3>Check our other projects</h3>
              <p>We are a group of passionate vegan activists that volunteer our time and skills towards vegan, completely free projects worth supporting.</p>
              <p><small>View vegan Hacktivists Website</small></p>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="number-block">3</div>
                <h3>Donate <i class="fas fa-hand-holding-heart"></i></h3>
                <p>We are a group of passionate vegan activists that volunteer our time and skills towards vegan, completely free projects worth supporting.</p>
                <p><small>View our Patreon Profile</small></p>
              </div>
            </div>
        </div>
      </div>
      <div class="col-6">
        <div class="container container-newsletter">
            <div class="row">
              <div class="col-12">
              <h2 class="text-green">Newsletter</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="number-block"><i class="fas fas-mail"></i></div>
                <h3>Subscribe to our news</h3>
                <p>Taking utmost care of keeping your email address secure, we'll deliver news, updates and more vegan activism related info in no more than two emails a month.</p>
            </div>
          </div>
            <div class="row">
              <div class="col-12">
                <form>
                  <div class="form-row">
                    <div class="form-group-md">
                        <input class="form-control-md" type="text" id="newsletter_name" name="newsletter_name" />
                        <label for="newsletter_name">Your name</label>
                        <div class="line"></div>
                      </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group-md">
                      <input class="form-control-md" type="email" id="newsletter_email" name="newsletter_email" />
                      <label for="newsletter_email">Your email</label>
                      <div class="line"></div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</main>
<footer class="py-5 page-footer">
  <div class="container-fluid container-fluid-max">
    <div class="row">
      <div class="col-12 col-md-6 footer-child copyright">you are their voice logo</div>
      <div class="col-12 col-md-6 footer-child">
        <div>
          <small>Website hosted and designed by vegan hacktivists with love <i class="fas fas-heart"></i></small>
        </div>
      </div>
    </div>
  </div>
</footer>
    </body>
</html>

