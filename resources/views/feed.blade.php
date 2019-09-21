@extends('layout')

@section('page_content')

<div id="feed" class="row no-gutters">

    <div id="leftside" class="col-sm-6">

        @include('inc.sidebar')

    </div>

    <div id="rightside" class="col-sm-6">
        
        <div id="rightside-inner" class="">
        	@include('inc.twitter')
    	</div>

    </div>

</div>
@endsection