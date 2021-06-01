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
                            <h2>Agregar producto</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--================Add Product Area =================-->

    <section class="login_part section_padding ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Fotografías del producto</h2>
                            <a href="#" class="btn_3">Agregar foto</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <form action="{{ route('product.store') }}" method="POST">
                                @csrf
                                <div class="mt-10">
                                    <input type="text" name="name" placeholder="Nombre del producto"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre del producto'"
                                        required class="single-input">
                                </div>

                                <div class="mt-10">
                                    <textarea class="single-textarea" name="description" placeholder="Descripción"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Descripción'"
                                        required></textarea>
                                </div>


                                <div class="input-group-icon mt-10">
                                    <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                    <div class="form-select" id="default-select">
                                        <select name="idcategory" required>
                                            <option value="0" disabled selected>Categoría</option>
                                            <option value="1">Ropa</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mt-10">
                                    <input type="number" min="0.0" step="0.01" name="total"
                                        placeholder="Precio del producto" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Precio del producto'" required class="single-input">
                                </div>

                                <div class="mt-10">
                                    <input type="number" min="0" step="1" name="quantity" placeholder="Cantidad"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cantidad'" required
                                        class="single-input">
                                </div>

                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input name="status" type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">¿Desactivar producto?</label>
                                    </div>
                                    <button type="submit" value="submit" class="btn_3">
                                        Agregar producto
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================End Single Product Area =================-->

@endsection
