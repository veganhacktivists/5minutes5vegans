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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse justify-content-lg-between" id="navbarNav">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('images/landing/5m5v logo.png') }}"  alt="logo">
        </a>
        <ul class="navbar-nav">
          @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li class="nav-item">
              <a class="nav-link flag-container" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                <img src="{{ asset('images/landing/'.getCountry( $properties )) }}.png"/ class="rounded-circle flag">
                @if(LaravelLocalization::getCurrentLocale() == $localeCode)
                  <img class="flag-selected" src="{{ asset('images/landing/active language.png') }}" />
                @endif
              </a>
            </li> 
          @endforeach
        </ul>
        <div class="text-white">
          <a href="" class="mr-2 btn btn-link">
            <div class="d-none d-xl-inline">Login</div>
          </a>
          <a href="" class="btn btn-cta btn-primary">
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
  <div class="container z-fix">
    <div class="row">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <h1 class="heading font-serif mb-5 mt-5">Take a challenge to help as many people become <span>vegan</span> as possible in merely 5 minutes!</h1>
        <div class="mt-3">
          <a class="btn btn-primary btn-cta bg-red text-white mr-2" href="#howdoesitwork" role="button">Get started below</a>
        </div> 
      </div>
      <div class="col-12 col-md-4 col-lg-6 col-xl-5 d-none d-md-block">
        <img src="{{ asset('images/landing/banner-food.png')  }}" alt="food">
      </div>
    </div>
  </div>
</section>
  <!-- How does it work Section -->
  <section id="howdoesitwork" class="d-flex align-items-center position-relative vh-100 cover hero" style="background-image:url({{ asset('images/landing/background-cows.jpg') }});">
  <div class="container-fluid">
    <div class="container">
      <div class="row py-5">
        <div class="col-12 pb-4">
          <h2 class="heading font-serif text-left mb-5">How does it work?</h2>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="number-block">01</div>
            <div class="step-block">
              <h3 class="subheading text-uppercase">Let us explain</h3>
              <p>Our vegan robots are constantly scanning social media and picking posts and comments of people interested in veganism.</p>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="number-block">02</div>
            <div class="step-block">
              <h3 class="subheading text-uppercase">What do I need?</h3>
              <p>You should have Twitter® profile. We've prepared helpful, easy to copy resources about ethical, health and environmental aspects of veganism so you don't need to remember details.</p>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="number-block">03</div>
            <div class="step-block">
              <h3 class="subheading text-uppercase">Why should I login?</h3>
              <p>When you register a free account, you will be able to edit and add quick to copy answers to the most common questions people curious about veganism have.</p>
            </div>
        </div>
      </div>
    </div>
    <div class="col-12 action-band">
      <div class="container">
          <div class="row">
              <div class="col-12 col-sm-6 col-lg-4 step-block font-serif">Okay &ndash; I'm ready!</div>
              <div class="col-12 col-sm-6 col-lg-4 step-block">
                Pick language: {{ getCurrentCountryName() }}
                <div class="lang-selector-container">
                  <img class="lang-selector-img" src="{{ asset('images/landing/'.getCurrentCountry()) }}.png" /> <i class="fas fa-chevron-down"></i>
                </div>
                <div class="lang-selector-dropdown">
                  @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    @if(LaravelLocalization::getCurrentLocale() != $localeCode)
                      <div>
                        <a hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                          {{ $properties['name'] }} <img src="{{ asset('images/landing/'.getCountry( $properties )) }}.png"/ class="rounded-circle flag">
                        </a>
                      </div>
                    @endif
                  @endforeach
                </div>
              </div>
              <div class="col-12 col-sm-6 col-lg-4 step-block">Take up the challenge</div>
            </div>
      </div>
    </div>
  </div>
</section>
  <!-- Else Section -->
  <section id="process" class="process">
  <div class="container">
    <div class="row py-5">
      <div class="col-lg-6 col-sm-12 pb-4">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="heading font-serif mb-5">What else can I do?</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="number-block">01</div>
              <div class="step-block">
                <h3 class="subheading text-uppercase">Be the voice of the animals</h3>
                <p>Whether you have a lot of time or litte, whether you're new or experienced, there's an organization that's looking for help to spread compassionate vegan message.</p>
                <p class="font-weight-bold">
                  <a href="#" class="lnk">View Vegan Activism Website</a>
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
            <div class="number-block">02</div>
            <div class="step-block">
              <h3 class="subheading text-uppercase">Check our other projects</h3>
              <p>We are a group of passionate vegan activists that volunteer our time and skills towards vegan, completely free projects worth supporting.</p>
              <p class="font-weight-bold">
                <a href="#" class="lnk">View vegan Hacktivists Website</a>
              </p>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="number-block">03</div>
              <div class="step-block">
                <h3 class="subheading text-uppercase">Donate <i class="fas fa-hand-holding-heart"></i></h3>
                <p>We are a group of passionate vegan activists that volunteer our time and skills towards vegan, completely free projects worth supporting.</p>
                <p class="font-weight-bold">
                  <a href="#" class="lnk"> View our Patreon Profile</a>
                </p>
              </div>
              </div>
            </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12">
        <div class="container container-newsletter ml-md-7">
            <div class="row">
              <div class="col-12">
              <h2 class="heading font-serif">Newsletter</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div style="margin-left: -4rem;" class="number-block"><i class="far fa-envelope"></i></div>
                <div>
                  <h3 class="text-uppercase subheading">Subscribe to our news</h3>
                  <p>Taking utmost care of keeping your email address secure, we'll deliver news, updates and more vegan activism related info in no more than two emails a month.</p>
                </div>
            </div>
          </div>
            <div class="row">
              <div class="col-12">
                <form>
                  <div class="form-row">
                    <div class="form-group-md">
                        <input class="form-control-md" type="text" id="newsletter_name" name="newsletter_name" />
                        <label class="text-white text-uppercase" for="newsletter_name">Your name</label>
                        <div class="line"></div>
                      </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group-md">
                      <input class="form-control-md" type="email" id="newsletter_email" name="newsletter_email" />
                      <label class="text-white text-uppercase" for="newsletter_email">Your email</label>
                      <div class="line"></div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-cta btn-primary float-right">Subscribe</button>
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
      <div class="col-12 col-md-6 col-lg-4 footer-child">
        <img src="" alt="you are their voice logo" class="float-left" />
      </div>
      <div class="col-12 col-md-6 col-lg-4 footer-child text-center">
        <div>
          <small class=" font-serif">Website hosted and designed by vegan hacktivists with love <i class="far fa-heart"></i></small>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 footer-child">
        <img src="" alt="hacktivists logo" class="float-right" />
      </div>
    </div>
  </div>
</footer>
    </body>
</html>

