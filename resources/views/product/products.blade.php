@extends('layout.site-layout')

@section('content')
<div class="flex-center position-ref">
    @include('layout.top-nav')

    <div class="content">
        <div class="title m-b-md">
            Products Page
        </div>

        @include('modules.links')

        <section class="products">
            @if(count($products))
                <p>Product items count: {{ $productsTotalCount }}</p>
            @endif

            @foreach($products as $product)
                <article class="product">
                    <header class="product__header">
                        <h1>{{ $product->name }}</h1>

                        <div class="product__price">
                            {{ number_format($product->price, 2, ',', ' ') }} $
                        </div>
                    </header>
                    <p>{{ $product->short_desc }}</p>
                    <a href="{{ route( 'product.show', $product->slug ) }}">Read more</a>
                </article>
            @endforeach

            {{ $products->links() }}
        </section>
    </div>
</div>
@endsection