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
				<div class="footer" style="background-color: #33363b;border-radius: 10px;border: solid 2px #33363b;padding: 10px;">    
<div class="font-serif" style="padding-left: 10px;font-family: Open Sans,Montserrat,Helvetica,Arial,sans-serif;">A project by the <a href="https://veganhacktivists.org/" target="_blank">Vegan Hacktivists</a>&nbsp;&nbsp;<i class="far fa-heart"></i>
</div>
</div>
            </div>
            <div class="swiper-slide">
                <div id="rightside">
                    <div id="rightside-inner" class="">
                        @include('inc.flag-list')
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
