@extends('layout.site-layout')

@section('content')
<div class="flex-center position-ref full-height">
    @include('layout.top-nav')

    <div class="content">
        <div class="title m-b-md">
            {{ $service->name }}
        </div>

        @include('modules.links')

        <article class="service">
            <h2>{{ $service->name }}</h2>
            {{ $service->desc }}
            <a href="{{ URL::previous() }}">Back</a>
        </article>
    </div>
</div>
@endsection