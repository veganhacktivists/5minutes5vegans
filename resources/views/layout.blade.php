<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@lang('5 Minutes 5 Vegans')</title>
        <meta name="description" content="{{ strip_tags(__('landing.hero')) }}">

        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('5 Minutes 5 Vegans') }}">
        <meta property="og:description" content="{{ strip_tags(__('landing.hero')) }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/og-image.png') }}">
        <meta name="twitter:card" content="summary_large_image">

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @yield('scripts')

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        @yield('css')

    </head>

    <body class="d-flex flex-column">

        @yield('page_content')

        @include('inc.cookie-consent')
    </body>
</html>

