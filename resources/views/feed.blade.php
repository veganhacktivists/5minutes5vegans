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
            <div class="swiper-slide">
                <div id="leftside">
                    @include('inc.sidebar')
                </div>
            </div>
            <div class="swiper-slide">
                <div id="rightside">
                    <div id="rightside-inner" class="">
                        <ul class="flag-list">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li class="">
                            <a class="flag-container" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                <img src="{{ asset('images/landing/'.strtolower(getCountry( $properties ))) }}.png"/ class="rounded-circle flag">
                                @if(LaravelLocalization::getCurrentLocale() == $localeCode)
                                <img class="flag-selected-hor" src="{{ asset('images/landing/active language.png') }}" />
                                @endif
                            </a>
                            </li>
                        @endforeach
                            </ul>
                        @include('inc.twitter')
                    </div>
                </div>
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>
@endsection
