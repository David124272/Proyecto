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
                            <h2>Archivos</h2>
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
                                <th scope="col">Imagen</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Ruta</th>
                                <th scope="col">Mime</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($files as $f)
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="{{ asset('storage/' . $f->route) }}" alt="">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>{{ $f->name }}</h5>
                                    </td>
                                    <td>
                                        <h5>{{ $f->route }}</h5>
                                    </td>
                                    <td>
                                        <h5>{{ $f->mime }}</h5>
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
