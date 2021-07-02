@extends('layouts/main')
@section('content')
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center"
            data-background="{{ asset('img/hero/category.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>{{ $product->name }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--================Single Product Area =================-->
    <div class="product_image_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="product_img_slide owl-carousel">
                        @foreach ($product->files as $image)
                            <div class="single_product_img">
                                <img src="{{ asset('storage/' . $image->route) }}" class="img-fluid">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="single_product_text text-center">
                        <p> {{ $product->description }} </p>
                        <h3 class="price" data-price="{{ $product->total }}">${{ $product->total }}
                        </h3>

                        <div class="card_area">
                            <form action="{{ route('product.cart') }}" method="POST">
                                @csrf
                                <div class="product_count_area">
                                    <p>Cantidad</p>
                                    <div class="product_count d-inline-block">
                                        <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                                        <input class="product_count_item input-number" name="quantity" type="number"
                                            value="1" min="1" max="{{ $product->quantity }}">
                                        <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                                    </div>
                                    <p class="total"> <span id="total"> ${{ $product->total }} </span> </p>
                                </div>
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <div class="add_to_cart">
                                    @auth
                                        <button type="submit" value="submit" class="genric-btn info e-large">
                                            Agregar a carrito
                                        </button>
                                        @if (auth()->user()->admin)
                                            <a href="{{ route('product.edit', $product) }}"
                                                class="genric-btn primary e-large">Editar</a>
                                        @endif
                                    @else
                                        <a href="{{ route('login') }}" class="genric-btn info e-large">Agregar a carrito</a>
                                    @endauth
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
