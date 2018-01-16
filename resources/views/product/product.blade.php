@extends('layout.site-layout')

@section('content')
<div class="flex-center position-ref full-height">
    @include('layout.top-nav')

    <div class="content">
        <div class="title m-b-md">
            {{ $product->name }}
        </div>

        @include('modules.links')

        <article class="product">
            <header class="product__header">
                <h1>{{ $product->name }}</h1>

                <div class="product__price">
                    {{ number_format($product->price, 2, ',', ' ') }} $
                </div>
            </header>

            <div class="product__product-desc">
                <p>{{ $product->desc }}</p>
            </div>
            <a href="{{ URL::previous() }}">Back</a>
        </article>
    </div>
</div>
@endsection