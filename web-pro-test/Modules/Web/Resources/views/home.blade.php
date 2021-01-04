@extends('web::layouts.master')
@section('content')
    <div class="container">
        <div class="empty-space col-xs-b15 col-sm-b30"></div>
        <div class="breadcrumbs">
            <a href="#">Trang chủ</a>
        </div>
        <div class="empty-space col-xs-b15 col-sm-b50 col-md-b100"></div>
        <div class="row">
            {{--  Banner --}}
            <div class="col-md-9 col-md-push-3">
                <div class="swiper-container rounded">
                    <div class="swiper-button-prev style-1 hidden"></div>
                    <div class="swiper-button-next style-1 hidden"></div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="banner-shortcode style-1">
                                <div class="background" style="background-image: {{asset('img/thumbnail-14.jpg')}};"></div>
                                <div class="description valign-middle">
                                    <div class="valign-middle-content">
                                        <div class="simple-article size-3 light fulltransparent">DON'T MISS!</div>
                                        <div class="banner-title color">UP TO 70%</div>
                                        <div class="h4 light">best android tv box</div>
                                        <div class="empty-space col-xs-b25"></div>
                                        <a class="button size-1 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="img/icon-4.png" alt=""></span>
                                                    <span class="text">learn more</span>
                                                </span>
                                        </a>
                                    </div>
                                    <div class="empty-space col-xs-b60 col-sm-b0"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="banner-shortcode style-1">
                                <div class="background" style="background-image: url(img/thumbnail-10.jpg);"></div>
                                <div class="description valign-middle">
                                    <div class="valign-middle-content">
                                        <div class="simple-article size-3 light fulltransparent">DON'T MISS!</div>
                                        <div class="banner-title color">UP TO 70%</div>
                                        <div class="h4 light">best android tv box</div>
                                        <div class="empty-space col-xs-b25"></div>
                                        <a class="button size-1 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="img/icon-4.png" alt=""></span>
                                                    <span class="text">learn more</span>
                                                </span>
                                        </a>
                                    </div>
                                    <div class="empty-space col-xs-b60 col-sm-b0"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="empty-space col-xs-b35 col-md-b70"></div>

               
                <div class="align-inline spacing-1 filtration-cell-width-1">
                    <select class="SlectBox small">
                        <option disabled="disabled" selected="selected">Sắp xếp sản phẩm</option>
                        <option value="volvo">Mới nhất</option>
                        <option value="saab">Giá tăng dần</option>
                        <option value="mercedes">Giá giảm dần</option>
                    </select>
                </div>
                <div class="align-inline spacing-1 hidden-xs pull-right">
                    <a class="pagination toggle-products-view active"><img src="img/icon-14.png" alt="" /><img src="img/icon-15.png" alt="" /></a>
                    <a class="pagination toggle-products-view"><img src="img/icon-16.png" alt="" /><img src="img/icon-17.png" alt="" /></a>
                </div>

                <div class="empty-space col-xs-b25 col-sm-b60"></div>


                {{--  List products--}}
                <div class="products-content">
                    <div class="products-wrapper">
                        <div class="row nopadding">
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">Mã sản phẩm: LTX443</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Laptop Dell Gaming</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-40.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="{{route('web.product-detail')}}">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                            <span class="text">Xem sản phẩm</span>
                                                        </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                            <span class="text">Thêm vào giỏ</span>
                                                        </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
{{--                                        <div class="color-selection">--}}
{{--                                            <div class="entry active" style="color: #a7f050;"></div>--}}
{{--                                            <div class="entry" style="color: #50e3f0;"></div>--}}
{{--                                            <div class="entry" style="color: #eee;"></div>--}}
{{--                                        </div>--}}
                                        <div class="simple-article size-4"><span class="color">$630.00</span>&nbsp;&nbsp;&nbsp;<span class="line-through">$350.00</span></div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Laptop LG Gram 17Z90N-V.AH75A5 (i7 1065G7/8GB RAM/512GB SSD/17inch IPS/FP/Win</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-41.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-42.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-43.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-44.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-45.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-46.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-47.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="img/product-48.jpg" alt="">
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="empty-space col-xs-b35 col-sm-b0"></div>
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <a class="button size-1 style-5" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                    <span class="text">Lùi</span>
                                </span>
                        </a>
                    </div>
                    <div class="col-sm-6 text-center">
                        <div class="pagination-wrapper">
                            <a class="pagination active">1</a>
                            <a class="pagination">2</a>
                            <a class="pagination">3</a>
                            <a class="pagination">4</a>
                            <span class="pagination">...</span>
                            <a class="pagination">23</a>
                        </div>
                    </div>
                    <div class="col-sm-3 hidden-xs text-right">
                        <a class="button size-1 style-5" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                    <span class="text">Tiến</span>
                                </span>
                        </a>
                    </div>
                </div>

                <div class="empty-space col-xs-b35 col-md-b70"></div>
                <div class="empty-space col-md-b70"></div>
            </div>
            @include('web::layouts.sidebar')
        </div>
    </div>
@endsection
