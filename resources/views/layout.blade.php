<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        @php
            $siteName = __('5 Minutes 5 Vegans');
            // Pages set $pageName; the feed is the only page search engines should list
            $isFeed = request()->routeIs('feed');
            $pageTitle = isset($pageName) ? "$pageName | $siteName" : ($isFeed ? $siteName.' | '.__('Help people on X go vegan') : $siteName);
        @endphp
        <title>{{ $pageTitle }}</title>
        @if ($isFeed)
            <script nonce="{{ Vite::cspNonce() }}">try { if (localStorage.getItem('intro-dismissed')) document.documentElement.classList.add('intro-dismissed') } catch (e) {}</script>
        @endif
        <meta name="description" content="{{ __('landing.description') }}">
        @unless ($isFeed)
            <meta name="robots" content="noindex">
        @endunless

        {{-- Built from the URL without its query string, so the alternates match the canonical --}}
        <link rel="canonical" href="{{ url()->current() }}">
        @foreach (array_keys(LaravelLocalization::getSupportedLocales()) as $localeCode)
            <link rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, url()->current(), [], true) }}">
        @endforeach
        <link rel="alternate" hreflang="x-default" href="{{ LaravelLocalization::getLocalizedURL('en', url()->current(), [], true) }}">

        <meta property="og:type" content="website">
        <meta property="og:site_name" content="{{ $siteName }}">
        <meta property="og:locale" content="{{ LaravelLocalization::getCurrentLocaleRegional() }}">
        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $locale)
            @continue($localeCode === app()->getLocale())
            <meta property="og:locale:alternate" content="{{ $locale['regional'] }}">
        @endforeach
        <meta property="og:title" content="{{ $pageTitle }}">
        <meta property="og:description" content="{{ __('landing.description') }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/og-image.png') }}">
        <meta name="twitter:card" content="summary_large_image">
        @if ($isFeed)
            @php
                $structuredData = json_encode([
                    '@context' => 'https://schema.org',
                    '@type' => 'WebSite',
                    'name' => $siteName,
                    'url' => url()->current(),
                    'inLanguage' => app()->getLocale(),
                    'description' => __('landing.description'),
                    'publisher' => ['@type' => 'Organization', 'name' => 'Vegan Hacktivists', 'url' => 'https://veganhacktivists.org/'],
                ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG);
            @endphp
            <script type="application/ld+json" nonce="{{ Vite::cspNonce() }}">{!! $structuredData !!}</script>
        @endif

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans:400,700|Rajdhani:400,500,600,700&display=swap">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @include('inc.umami')
        @yield('scripts')

        @yield('css')

    </head>

    <body class="d-flex flex-column">

        @yield('page_content')

    </body>
</html>
