@extends('layout')

@section('page_content')

<div id="feed" class="row no-gutters">

    <div id="leftside" class="col-md-6">

        @include('inc.sidebar')

    </div>

    <div id="rightside" class="col-md-6">
        
        <div id="rightside-inner" class="">

	          <ul class="flag-list">
	          @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
	            <li class="">
	              <a class="flag-container" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
	                <img src="{{ asset('images/landing/'.strtolower(getCountry( $properties ))) }}.png"/ class="rounded-circle flag">
	                @if(LaravelLocalization::getCurrentLocale() == $localeCode)
	                  <img class="flag-selected" src="{{ asset('images/landing/active language.png') }}" />
	                @endif
	              </a>
	            </li> 
	          @endforeach
	        	</ul>
        	@include('inc.twitter')
    	</div>

    </div>

</div>
@endsection
