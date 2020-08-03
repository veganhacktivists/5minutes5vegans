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
				<div class="footer" style="background-color: #183732;border: solid 2px #183732;padding: 10px;">    
				
				
<div class="font-serif" style="color:rgb(255 91 103) !important;padding-left: 10px;font-family: Open Sans,Montserrat,Helvetica,Arial,sans-serif;">Project by the <a href="https://veganhacktivists.org/" target="_blank" style="color: rgb(236, 54, 31);">Vegan Hacktivists</a>&nbsp;<i class="far fa-heart"></i>
<a href="https://www.instagram.com/veganhacktivists" target="_blank"><i class="fab fa-instagram" style="float:right;font-size:30px;color:white;"></i></a>
</div>
				
				
				</div>
                <div id="leftside">
                    @include('inc.sidebar')
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
