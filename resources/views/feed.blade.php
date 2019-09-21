@extends('layout')

@section('page_content')
<div class="container-fluid">

    <div class="row no-gutters">

        <div class="col-sm-6 p-3">

            @include('inc.sidebar')

        </div>

        <div class="col">

            <div class="d-flex flex-column">

                <div class="p-3">
                    @include('inc.navbar')
                </div>

                <div class="flex-grow">
                    @include('inc.twitter')
                </div>

            </div>

        </div>

    </div>

</div>
@endsection