@extends('layout.site-layout')

@section('content')
    <div class="flex-center position-ref full-height">
        @include('layout.top-nav')

        <div class="content">
            <div class="title m-b-md">
                Custom 404 Page
            </div>

            @include('modules.links')
        </div>
    </div>
@endsection
