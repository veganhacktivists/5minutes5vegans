<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@lang('5 Minutes 5 Vegans')</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
        crossorigin="anonymous">
  @yield('css')
</head>
<body class="landing">
  <header class="fixed-top page-header">
    <div class="container-fluid">
      <nav class="nav justify-content-between mt-3">
        <div id="landing-logo" class="nav-link logo">
          @include('inc.logo')
        </div>
          @include('inc.flag-list')
        <div class="nav-link text-white">
          {{ link_to_route('login', __('Login'), null, array('class' => 'btn btn-sm btn-cta swirvy-box-left')) }}
          {{ link_to_route('register', __('Register'), null, array('class' => 'btn btn-sm btn-cta swirvy-box-right')) }}
        </div>
        <div id="landing-logo-mobile" class="nav-item logo">
          @include('inc.logo')
        </div>
      </nav>
    </div>
  </header>
  <main id="main" class="cover">
    <!-- Banner Section -->
    <section id="home" class="d-flex align-items-center position-relative cover hero">
      <div class="container z-fix mt-5">
        <div class="row">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <h1 class="heading font-serif mb-5 mt-5">@lang('landing.hero')</h1>
            <div class="mt-3">
              {{ link_to_route('feed', __('landing.get-started'), null, [
                'class' => 'btn btn-cta swirvy-box bg-danger mr-2 font-weight-bold',
                'role' => 'button'
              ]) }}
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
              <h1 class="number-block">01</h1>
              <div class="step-block">
                <h3 class="subheading text-uppercase">@lang('landing.how')</h3>
                <p>@lang('landing.how-explanation')</p>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
              <h1 class="number-block">02</h1>
              <div class="step-block">
                <h3 class="subheading text-uppercase">@lang('landing.what')</h3>
                <p>@lang('landing.what-explanation')</p>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
              <h1 class="number-block">03</h1>
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
