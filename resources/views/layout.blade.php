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

    <body>

        <div class="container-fluid">

            <div class="row no-gutters">

                <div class="col-5 p-3">

                    @include('inc.sidebar')

                </div>

                <div class="col">

                    <div class="d-flex flex-column">

                        <div class="p-3">
                            @include('inc.navbar')
                        </div>

                        <div class="flex-grow">
                            @yield('main')
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </body>
</html>

