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
            {{ link_to_route('register', __('Open free account'), null, array('class' => 'btn btn-cta')) }}
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
              {{ link_to_route('feed', __('landing.get-started'), null, [ 'class' => 'btn btn-cta bg-danger mr-2 p-3 font-weight-bold', 'role' => 'button' ]) }}
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
