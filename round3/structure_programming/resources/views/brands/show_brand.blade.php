@extends('layouts.master')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach($brand_product as $key => $brand)
                                        <li><a href="{{route('web.brand_home', array('brand_slug'=>$brand->brand_name))}}"> <span class="pull-right"></span>{{$brand->brand_name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div><!--/brands_products-->



                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{asset('frontend/images/shipping.jpg')}}" alt="" />
                        </div><!--/shipping-->

                    </div>
                </div>
                <div class="features_items"><!--features_items-->

                        @foreach($brand_name as $key => $name)

                        <h2 class="title text-center">{{$name->brand_name}}</h2>

                        @endforeach
                        @foreach($product_by_brand as $key => $product)

                        <div class="col-sm-4">
                            <div class="product-image-wrapper">

                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <td><img width="60" class="" src="{{$product->image}}" alt=""></td>
                                            <h2>{{number_format($product->price).' '.'VNĐ'}}</h2>
                                            <p><del>{{number_format($product->cost_price).' '.'VNĐ'}}</del></p>
                                            <p>{{$product->name}}</p>
                                            <p>Number of products: {{$product->quantity}}</p>
                                            <a onclick="AddCart({{$product->id}})" href="javascript:" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                </div>



                            </div>

                        </div>
                        </a>
                        @endforeach
                    </div><!--features_items-->
        <!--/recommended_items-->
            </div>
        </div>
    </section>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
        function AddCart(id){
            console.log(id);
            let link = '{{route('web.add_cart', ':id')}}'
            link = link.replace(':id', id)
            $.ajax({
                url: link,
                type: 'GET',
            }).done(function(response){
                alertify.success('Add to cart successful!');
            });
        }
    </script>
@endsection
