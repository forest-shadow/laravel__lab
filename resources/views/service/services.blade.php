@extends('layout.site-layout')

@section('content')
<div class="flex-center position-ref">
    @include('layout.top-nav')

    <div class="content">
        <div class="title m-b-md">
            Services Page
        </div>

        @include('modules.links')

        <section class="services">
            @if(count($services))
                <p>Current Services count: {{ $servicesTotalCount }}</p>
            @endif

            @foreach($services as $service)
                <article class="service">
                    <h1>{{$service->name}}</h1>
                    <p>{{$service->short_desc}}</p>
                    <a href="{{ route( 'service.show', $service->slug ) }}">Read more</a>
                </article>
            @endforeach

            {{ $services->links() }}
        </section>
    </div>
</div>
@endsection