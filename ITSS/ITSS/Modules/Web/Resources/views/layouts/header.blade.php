<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href=""><i class="fa fa-envelope"></i> team04@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="">Canada</a></li>
                                <li><a href="">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                DOLLAR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="">Canadian Dollar</a></li>
                                <li><a href="">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
                            <?php
                            if(session()->has('data-signin')){
                            $user = \App\Entities\User::where('email', session('data-signin')['email'])->first();
                            $user_id = $user->id;
                            $shipping_id = Session::get('shipping_id');
                            if($shipping_id==NULL){
                            ?>
                            <li><a href="{{route('web.checkout')}}"><i class="fa fa-crosshairs"></i>Checkout</a> </li>
                            <?php
                                }
                                else{
                                    ?>
                                    <li><a href="{{route('web.payment')}}"><i class="fa fa-crosshairs"></i>Checkout</a> </li>
                            <?php
                                    }
                                }
                            else{
                                ?>
                                <li><a href="{{route('web.login')}}"><i class="fa fa-crosshairs"></i>Checkout</a> </li>
                            <?php
                                }
                            ?>

                            <li><a href="{{route('web.cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <?php if(session()->has('data-signin')){ ?>

                            <li class="dropdown"><a>Account<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu" style="background-color: grey">
                                    <div class="col-sm-9">
                                        <li><a class="" style="background-color: grey" href="/profile">
                                                <?php
                                                $user = \App\Entities\User::where('email', session('data-signin')['email'])->first();
                                                echo $user->name;
                                                ?></a></li>
                                        <li><a class="" style="background-color: grey" href="">Settings</a></li>
                                        <li><a class="" style="background-color: grey" href="{{route('web.logout')}}">Logout</a></li>
                                    </div>
                                </ul>
                            </li>

                            <?php } else { ?>
                            <li><a href="{{route('web.login')}}"><i class="fa fa-lock"></i> Login</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{route('web.home')}}" class="active">Home</a></li>
                            <!--<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="shop.html">Products</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Blog List</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="contact-us.html">Contact</a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-sm-5">
                    <form action="{{url('/search')}}" method="POST">
                        {{csrf_field()}}
                        <div class="search_box pull-right">
                            <input type="text" name="keywords_submit" placeholder="Search"/>
                            <input type="submit" style="margin-top: 0px; color: white; " name="search_item" class="btn btn-primary btn-sm" value="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->
