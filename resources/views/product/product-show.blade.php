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
                            <h2>Detalles de producto</h2>
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
                <div class="col-lg-12">
                    <div class="product_img_slide owl-carousel">
                        <div class="single_product_img">
                            <img src="assets/img/product/single_product.png" alt="#" class="img-fluid">
                        </div>
                        <div class="single_product_img">
                            <img src="assets/img/product/single_product.png" alt="#" class="img-fluid">
                        </div>
                        <div class="single_product_img">
                            <img src="assets/img/product/single_product.png" alt="#" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="single_product_text text-center">
                        <h3> {{ $product->name }} </h3>
                        <p>
                            {{ $product->description }}
                        </p>

                        <p class="price" data-price="{{ $product->total }}">Precio por pieza: ${{ $product->total }}
                        </p>

                        <div class="card_area">

                            <div class="product_count_area">
                                <p>Cantidad</p>
                                <div class="product_count d-inline-block">
                                    <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                                    <input class="product_count_item input-number" name="quantity" type="number" value="1"
                                        min="0">
                                    <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                                </div>

                                <p class="total"> <span id="total"> ${{ $product->total }} </span> </p>
                            </div>
                            <div class="add_to_cart">
                                <a href="#" class="btn_3">Agregar a carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
