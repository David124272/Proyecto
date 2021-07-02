@extends('layouts.main')
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
                            <h2>Mis compras</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--================Cart Area =================-->
    <section class="cart_area section_padding">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Fecha de compra</th>
                                <th scope="col">País / Estado</th>
                                <th scope="col">Domicilio</th>
                                <th scope="col">Telefóno</th>
                                <th scope="col">Productos</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (auth()->user()->purchases as $p)
                                <td>
                                    <h5>{{ $p->updated_at }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $p->country }}, {{ $p->state }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $p->street }} {{ $p->int_number }} {{ $p->ext_number }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $p->phone }}</h5>
                                </td>
                                <td>
                                    <h5> 
                                    @foreach (auth()->user()->carts->where('id', $p->cart_id)->first()->products as $product)
                                        {{ $product->name }}, 
                                    @endforeach     
                                    </h5>
                                </td>
                                <td>
                                    <h5>${{ $p->total }}</h5>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
    <!--================End Cart Area =================-->

@endsection
