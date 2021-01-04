@extends('admin::layouts.master')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-plus icon-gradient bg-happy-itmeo"></i>
                    </div>
                    <div>Thêm sản phẩm
                        <div class="page-title-subheading">
                            <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message', null);
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                </div>    </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Sản phẩm</h5>
                <form class="form-horizontal" action="{{route('admin.save_product')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="product_sku">Mã sản phẩm</label>
                            <input type="text" class="form-control" id="product_sku" name="product_sku" placeholder="Mã sản phẩm ..." required="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="brand_id">Thương hiệu</label>
                            <select id="brand_id" name="brand_id" class="form-control">
                                @foreach($brand_product as $key => $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Slug input-->
                        <div class="col-md-4 mb-3">
                            <label for="slug">Đường dẫn</label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Đường dẫn ..." required="">
                        </div>
                    </div>
                    <div class="form-row">
                        <!-- Name input-->
                        <div class="col-md-4 mb-3">
                            <label for="name">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Tên sản phẩm ..." required="">
                        </div>
                        <!-- Input image -->
                        <div class="col-md-4 mb-3">
                            <label for="image">Hình ảnh</label>
                            <input type="text" class="form-control" id="image" name="image" placeholder="Link hình ảnh sản phẩm ..." required="">
                        </div>

                        <!-- Price input-->
                        <div class="col-md-4 mb-3">
                            <label for="price">Giá</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Giá khuyến mãi ..." required="">
                        </div>
                    </div>
                    <div class="form-row">
                        <!-- Cost Price input-->
                        <div class="col-md-4 mb-3">
                            <label for="cost_price">Giá gốc </label>
                            <input type="text" class="form-control" id="cost_price" name="cost_price" placeholder="Cost Price..." required="">
                        </div>
                        <!-- Short description input-->
                        <div class="col-md-4 mb-3">
                            <label for="short_description">Short description</label>
                            <input type="text" class="form-control" id="short_description" name="short_description" placeholder="Short description..." required="">
                        </div>
                    </div>
                    <div class="form-row">
                        <!-- Long description Textarea -->
                        <div class="col-md-4 mb-3">
                            <label for="long_description">Long description</label>
                            <textarea class="form-control" id="long_description" name="long_description"></textarea>

                        </div>
                        <!-- Input vote -->
                        <div class="col-md-4 mb-3">
                            <label for="image">Vote</label>
                            <input type="text" class="form-control" id="vote" name="vote" placeholder="vote..." required="">
                        </div>

                        <!-- Status input-->
                        <div class="col-md-4 mb-3">
                            <label for="price">Status</label>
                            <input type="text" class="form-control" id="status" name="status" placeholder="Status..." required="">
                        </div>
                    </div>


                    <button class="btn btn-primary" type="submit">Save product</button>
                </form>

                <script>
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (function() {
                                'use strict';
                                window.addEventListener('load', function() {
                                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                    var forms = document.getElementsByClassName('needs-validation');
                                    // Loop over them and prevent submission
                                    var validation = Array.prototype.filter.call(forms, function(form) {
                                        form.addEventListener('submit', function(event) {
                                            if (form.checkValidity() === false) {
                                                event.preventDefault();
                                                event.stopPropagation();
                                            }
                                            form.classList.add('was-validated');
                                        }, false);
                                    });
                                }, false);
                            })();
                        </script>
            </div>
        </div>
        <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            var forms = document.getElementsByClassName('needs-validation');
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                </script>
    </div>
@endsection
