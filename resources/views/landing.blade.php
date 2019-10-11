<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>5 Minutes 5 Vegans</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  @yield('css')

</head>

<body class="landing">
  <header class="fixed-top page-header">
    <div class="container-fluid container-fluid-max">
      <nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-lg-between" id="navbarNav">
          <a class="navbar-brand mt-3" href="{{ route('feed') }}">
            <img class="logo" src="{{ asset('images/logo.svg') }}" alt="logo">
          </a>
          <ul class="navbar-nav">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li class="nav-item">
              <a class="nav-link flag-container" hreflang="{{ $localeCode }}"
                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                <img src="{{ mb_strtolower(asset('images/landing/'.getCountry( $properties )), 'UTF-8') }}.png"/ class="rounded-circle flag">
                @if(LaravelLocalization::getCurrentLocale() == $localeCode)
                  <img class="flag-selected" src="{{ asset('images/landing/active language.png') }}" />
                @endif
              </a>
            </li>
            @endforeach
          </ul>
          <div class="text-white">
            {{ link_to_route('login', 'Login', null, array('class' => 'mr-2 btn btn-link')) }}
            {{ link_to_route('register', 'Open free account', null, array('class' => 'btn btn-cta btn-primary')) }}
          </div>
        </div>
      </nav>
    </div>
  </header>
  <main id="main" class="cover">
    <!-- Banner Section -->
    <section id="home" class="d-flex align-items-center position-relative cover hero">
      <div class="container z-fix">
        <div class="row">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <h1 class="heading font-serif mb-5 mt-5">Take the challenge to help as many people become <span>vegan</span>
              as possible in merely 5 minutes!</h1>
            <div class="mt-3">
              <a class="btn btn-primary btn-cta bg-red text-white mr-2 p-3 font-weight-bold" href="#howdoesitwork" role="button">Get started
                below</a>
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-6 col-xl-5 d-none d-md-block w-100">
            <img class="w-100" src="{{ asset('images/landing/banner-food.png')  }}" alt="food">
          </div>
        </div>
      </div>
    </section>
    <!-- How does it work Section -->
    <section id="howdoesitwork" class="d-flex align-items-center position-relative cover hero pt-0">
      <div class="container-fluid">
        <div class="container">
          <div class="row py-5" style="padding-top: 5rem !important;">
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="number-block">01</div>
              <div class="step-block">
                <h3 class="subheading text-uppercase">How does it work?</h3>
                <p>Our vegan robots are constantly scanning Twitter<sup>®</sup> and re-tweeting comments of people interested in going vegan! Use this website to find and support those people where possible in just 5 minutes.</p>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="number-block">02</div>
              <div class="step-block">
                <h3 class="subheading text-uppercase">What do I need?</h3>
                <p>You should have your own Twitter<sup>®</sup> profile. We've prepared helpful text and links for common tweets that our bots find so you can just copy, paste, and move on to the next person that needs help!</p>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="number-block">03</div>
              <div class="step-block">
                <h3 class="subheading text-uppercase">Why should I register?</h3>
                <p>It's 100% free and you get the ability to create your own custom quick-to-copy responses in addition to using the ones we provide. This allows you to add a more personal touch to your tweets!</p>
              </div>
            </div>
          </div>
        <div class="col-12 action-band text-white">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-4 step-block">Pick a language and click play!</div>
              <div class="col-12 col-lg-4 step-block language-selector-block">
                {{ getCurrentCountryName() }}
                <div class="lang-selector-container">
                  <img class="lang-selector-img" src="{{ mb_strtolower(asset('images/landing/'.getCurrentCountry()), 'UTF-8') }}.png" /> <i
                    class="fas fa-chevron-down"></i>
                </div>
                <div tabindex="-1" class="lang-selector-dropdown">
                  <div class="d-flex flex-column align-content-start">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    @if(LaravelLocalization::getCurrentLocale() != $localeCode)
                    <div>
                      <a hreflang="{{ $localeCode }}"
                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}#howdoesitwork">
                        <span class="mr-3">{{ $properties['name'] }}</span> <img
                          src="{{ mb_strtolower(asset('images/landing/'.getCountry( $properties )), 'UTF-8') }}.png"/
                          class="rounded-circle flag">
                      </a>
                    </div>
                    @endif
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-4 step-block">
                <p>Let's go!</p>
                <a href="{{ route('feed') }}">
                  <img class="challenge-button img-fluid float-right"
                    src="{{ asset('https://i.imgur.com/yl7N5VJ.png') }}" alt="Launch 5 Minutes 5 Vegans!" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- Else Section -->
    <section id="process" class="process cover">
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
                    <h3 class="subheading text-uppercase">Be a voice for the animals!</h3>
                    <p>Whether you have a lot of time or litte, whether you're new or experienced, there's an
                      organization that's looking for help from someone like you to spread compassionate vegan message.</p>
                    <p class="font-weight-bold">
                      {{ link_to('https://veganactivism.org', 'View Vegan Activism Organizations', ['class' => 'lnk', 'target' => '_blank']) }}
                    </p>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <div class="number-block">02</div>
                  <div class="step-block">
                    <h3 class="subheading text-uppercase">Check out other projects!</h3>
                    <p>We are a group of passionate vegan activists that volunteer our time and skills towards vegan projects and organizations worth supporting,
                      completely free and with no ads.</p>
                    <p class="font-weight-bold">
                      {{ link_to('https://veganhacktivists.org', 'View Vegan Hacktivists Website', ['class' => 'lnk', 'target' => '_blank']) }}
                    </p>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <div class="number-block">03</div>
                  <div class="step-block">
                    <h3 class="subheading text-uppercase">Please support this website!</h3>
                    <p>This project was built to be completely free and ad-less. Please support us and our activism on Patreon - we could really use help!</p>
                    <p class="font-weight-bold">
                      {{ link_to('https://www.patreon.com/veganhacktivists', 'Make a donation via Patreon', ['class' => 'lnk', 'target' => '_blank']) }}
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
                  <div style="margin-left: -5.5rem;" class="number-block"><i style="font-size: 150%;" class="far fa-envelope"></i></div>
                  <div>
                    <h3 class="text-uppercase subheading">Vegan Hacktivists</h3>
					<a href="https://veganhacktivists.org/" target="_blank"><img src="https://i.imgur.com/xSHDo4E.png" style="width: 150px;padding-top: 10px;padding-bottom: 15px;"></a>
					<br>
                    <p>We'll deliver news, updates and more vegan activism related info in no more than two emails a month! We take your privacy very seriously and never share your email.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <form action="https://youaretheirvoice.us20.list-manage.com/subscribe/post?u=0baba35be8f6397f7ac1066f1&id=5fd11d4221" method="post" target="_blank">
                    <div class="form-row">
                      <div class="form-group-md">
                        <input class="form-control-md" type="email" id="newsletter_email" name="EMAIL" />
                        <label class="text-uppercase" for="newsletter_email">Your email</label>
                        <div class="line"></div>
                      </div>
                    </div>
                    <!-- anti-bot measure, should be left empty for the form to validate -->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0baba35be8f6397f7ac1066f1_5fd11d4221" tabindex="-1" value=""></div>
                    <button type="submit" name="subscribe" class="btn btn-cta btn-primary float-right">Subscribe to Newsletter!</button>
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
  <footer class="py-3 page-footer text-white">
    <div class="container-fluid container-fluid-max">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            Follow us on {{ link_to('https://www.instagram.com/veganhacktivists', 'Instagram', ['target' => '_blank']) }}
        </div>
        <div class="col-12 col-md-6 col-lg-4 text-center">
          <div>
            Website hosted and designed by {{ link_to('https://veganhacktivists.org/', 'Vegan Hacktivists', ['target' => '_blank']) }} with love
              <i class="far fa-heart"></i>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 text-right">
            Support us on {{ link_to('https://www.patreon.com/veganhacktivists', 'Patreon', ['target' => '_blank']) }}
        </div>
      </div>
    </div>
  </footer>
  <script src="{{ asset('js/app.js') }}"></script>
  @yield('scripts')
</body>
</html>
