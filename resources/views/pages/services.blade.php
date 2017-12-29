@extends('layout.site-layout')

<div class="flex-center position-ref full-height">
    @include('layout.top-nav')

    <div class="content">
        <div class="title m-b-md">
            Services Page
        </div>

        @include('modules.links')

        <section class="services">
            @if(count($services))
                <p>Current Services count: {{count($services)}}</p>
            @endif

            @foreach($services as $service)
                <article class="service">
                    <h1>{{$service->name}}</h1>
                    <p>{{$service->short_desc}}</p>
                </article>
            @endforeach
        </section>
    </div>
</div>
