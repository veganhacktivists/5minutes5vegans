@extends('layout')

@section('page_content')
    <div id="feed">
        <div id="feed-nav-1">
            @include('inc.feed-nav')
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide scrollable">
                    <div id="leftside">
                        @include('inc.sidebar')
                    </div>

                    <div class="footer">
                        <div class="font-serif" style="color:#fff !important;padding-left: 10px;">
                            @lang('Project by') <a href="https://veganhacktivists.org/" target="_blank" class="vh-link"><img src="{{ asset('images/VHLogo_Small_150.png') }}" alt="" width="28" height="28" class="vh-logo"><span class="vh-vegan">Vegan</span> Hacktivists</a>
                            <a href="https://veganhacktivists.org/privacy-policy" target="_blank" class="privacy-link">@lang('Privacy policy')</a>
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

            <div class="swiper-pagination"></div>
        </div>

        {{-- Phones show the open reply box here. Not in .swiper-pagination: Swiper rewrites it. --}}
        <div id="reply-dock"></div>
    </div>

    @include('inc.how-it-works', ['onFeed' => true])
@endsection
