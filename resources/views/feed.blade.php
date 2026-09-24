@extends('layout')

@section('page_content')
    <div id="feed">
        <div id="feed-nav-1">
            @include('inc.feed-nav')
        </div>
        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide scrollable">
                    <div id="leftside">
                        @include('inc.sidebar')
                    </div>

                    <div class="footer" style="background-color: #183732;border: solid 2px #183732;padding: 10px;">
                        <div class="font-serif" style="color:#fff !important;padding-left: 10px;">
                            @lang('Project by') <a href="https://veganhacktivists.org/" target="_blank" class="vh-link"><img src="{{ asset('images/VHLogo_Small_150.png') }}" alt="" width="28" height="28" class="vh-logo"><span class="vh-vegan">Vegan</span> Hacktivists</a>
                            <a href="#" class="cookie-link" data-cookie-settings>@lang('Cookies')</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div id="rightside">
                        <div id="rightside-inner" class="">
                            @include('inc.flag-list')
                            @include('inc.twitter', ['tweets' => $tweets])
                        </div>
                    </div>
                </div>
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
@endsection
