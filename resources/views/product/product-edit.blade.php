@extends('layouts/main')
@section('content')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function updateTextInput(val) {
            document.getElementById('discount').value = val;
        }
    </script>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center"
            data-background="{{ asset('img/hero/category.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Editar producto</h2>
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
                            <div class="col-md-12 mb-2">
                                <img src="{{ asset('storage/' . $product->files[0]->route) }}" alt="preview image"
                                    width="200">
                            </div>

                            <!--a href="#" class="btn_3">Agregar foto</a-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $error }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                @endforeach
                            @endif

                            <form action="{{ route('product.update', $product) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PATCH')
                                @csrf
                                <div class="input-group-icon mt-10">
                                    <div class="icon"><i class="fa fa-cubes" aria-hidden="true"></i></div>
                                    <input type="text" name="name" placeholder="Nombre del producto"
                                        value="{{ $product->name }}" required class="single-input">
                                </div>

                                <div class="mt-10">
                                    <textarea class="single-textarea" name="description" placeholder="Descripción"
                                        required> {{ $product->description }} </textarea>
                                </div>

                                <div class="input-group-icon mt-10">
                                    <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                    <div class="form-select">
                                        <select name="category_id" value="{{ $product->category_id }}" required>
                                            <option value="0" disabled selected>Categoría</option>
                                            @foreach ($categories as $c)
                                                <option @if ($c->id == $product->category_id)
                                                    selected
                                                @endif value="{{ $c->id }}">{{ $c->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="input-group-icon mt-10">
                                    <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                    <input type="number" min="0.0" step="0.01" name="total" value="{{ $product->total }}"
                                        placeholder="Precio del producto" required class="single-input">
                                </div>

                                <div class="input-group-icon mt-10">
                                    <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                    <input type="number" min="0" step="1" name="quantity" placeholder="Cantidad"
                                        value="{{ $product->quantity }}" required class="single-input">
                                </div>

                                <!--div class="input-group-icon mt-10">
                                                                                            <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                                                                            <input class="single-input" type="number" min="0" max="100" id="discount"
                                                                                                name="discount" value="" placeholder="Descuento (%)">
                                                                                        </div>

                                                                                        <div-- class="mt-10">
                                                                                            <input type="range" class="single-input" min="0" max="100"
                                                                                                onchange="updateTextInput(this.value);">
                                                                                        </div-->


                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input name="status" type="checkbox" id="f-option">
                                        <label for="f-option">¿Desactivar producto?</label>
                                    </div>
                                    <button type="submit" value="submit" class="btn_3">
                                        Actualizar producto
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#image').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image-before-upload').attr('src', e.target
                        .result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>

    <!--================End Single Product Area =================-->

@endsection
