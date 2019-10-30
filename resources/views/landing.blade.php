<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@lang('5 Minutes 5 Vegans')</title>

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
            {{ link_to_route('login', __('Login'), null, array('class' => 'mr-2 btn btn-link')) }}
            {{ link_to_route('register', __('Open free account'), null, array('class' => 'btn btn-cta btn-primary')) }}
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
            <h1 class="heading font-serif mb-5 mt-5">@lang('landing.hero')</h1>
            <div class="mt-3">
              <a class="btn btn-primary btn-cta bg-red text-white mr-2 p-3 font-weight-bold" href="#howdoesitwork" role="button">@lang('landing.get-started')</a>
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
                <h3 class="subheading text-uppercase">@lang('landing.how')</h3>
                <p>@lang('landing.how-explanation')</p>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="number-block">02</div>
              <div class="step-block">
                <h3 class="subheading text-uppercase">@lang('landing.what')</h3>
                <p>@lang('landing.what-explanation')</p>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="number-block">03</div>
              <div class="step-block">
                <h3 class="subheading text-uppercase">@lang('landing.why')</h3>
                <p>@lang('landing.why-explanation')</p>
              </div>
            </div>
          </div>
        <div class="col-12 action-band text-white">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-4 step-block">@lang('landing.pick')</div>
              <div class="col-12 col-lg-4 step-block language-selector-block">
                {{ LaravelLocalization::getCurrentLocaleNative() }}
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
                        <span class="mr-3">{{ $properties['native'] }}</span> <img
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
                <p>@lang('landing.go')</p>
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
                  <h2 class="heading font-serif mb-5">@lang('landing.else')</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="number-block">01</div>
                  <div class="step-block">
                    <h3 class="subheading text-uppercase">@lang('landing.voice')</h3>
                    <p>@lang('landing.voice-text')</p>
                    <p class="font-weight-bold">
                      {{ link_to('https://youaretheirvoice.com/', __('landing.activism-link-title'), ['class' => 'lnk', 'target' => '_blank']) }}
                    </p>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <div class="number-block">02</div>
                  <div class="step-block">
                    <h3 class="subheading text-uppercase">@lang('landing.projects')</h3>
                    <p>@lang('landing.projects-text')</p>
                    <p class="font-weight-bold">
                      {{ link_to('https://veganhacktivists.org', __('landing.projects-link-title'), ['class' => 'lnk', 'target' => '_blank']) }}
                    </p>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <div class="number-block">03</div>
                  <div class="step-block">
                    <h3 class="subheading text-uppercase">@lang('landing.donate') <i class="fas fa-hand-holding-heart"></i></h3>
                    <p>@lang('landing.donate-text')</p>
                    <p class="font-weight-bold">
                      {{ link_to('https://www.patreon.com/veganhacktivists', __('landing.donate-link-title'), ['class' => 'lnk', 'target' => '_blank']) }}
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
                  <h2 class="heading font-serif">@lang('Newsletter')</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div style="margin-left: -5.5rem;" class="number-block"><i style="font-size: 150%;" class="far fa-envelope"></i></div>
                  <div>
                    <h3 class="text-uppercase subheading">Vegan Hacktivists</h3>
                    <a href="https://veganhacktivists.org/" target="_blank"><img src="https://i.imgur.com/xSHDo4E.png" style="width: 150px;padding-top: 10px;padding-bottom: 15px;"></a>
                    <p>@lang('landing.subscribe-text')</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <form action="https://youaretheirvoice.us20.list-manage.com/subscribe/post?u=0baba35be8f6397f7ac1066f1&id=5fd11d4221" method="post" target="_blank">
                    <div class="form-row">
                      <div class="form-group-md">
                        <input class="form-control-md" type="email" id="newsletter_email" name="EMAIL" />
                        <label class="text-uppercase" for="newsletter_email">@lang('Your Email')</label>
                        <div class="line"></div>
                      </div>
                    </div>
                    <!-- anti-bot measure, should be left empty for the form to validate -->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0baba35be8f6397f7ac1066f1_5fd11d4221" tabindex="-1" value=""></div>
                    <button type="submit" name="subscribe" class="btn btn-cta btn-primary float-right">@lang('landing.subscribe')</button>
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
  @include('inc.footer')
  </footer>
  <script src="{{ asset('js/app.js') }}"></script>
  @yield('scripts')
</body>
</html>
