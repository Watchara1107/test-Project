<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | IT Shop</title>
    <link href="{{asset('font_end/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font_end/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('font_end/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('font_end/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('font_end/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('font_end/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('font_end/css/responsive.css')}}" rel="stylesheet">
</head>
<!--/head-->

<body>
    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="social-icons pull-right">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{url('/')}}"><img src="{{asset('font_end/images/home/logo.png')}}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                            @if (Auth::check())
                                <li><a href="{{route('home')}}"><i class="fa fa-user"></i> Account</a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a></li>

                                @else
                                <li><a href="{{route('login')}}"><i class="fa fa-lock"></i> Login</a></li>
                                <li><a href="{{route('register')}}"><i class="fa fa-lock"></i> Register</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
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

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->

    <section id="slider">
        <!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>IT</span>-SHOP</h1>
                                    <h2>แพลตฟอร์มช็อปปิ้งออนไลน์</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('font_end/images/home/girl1.jpg')}}" class="girl img-responsive" alt="" />
                                    <img src="{{asset('font_end/images/home/pricing.png')}}" class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>IT</span>-SHOP</h1>
                                    <h2>บริการ ทุกระดับประทับใจ</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('font_end/images/home/girl2.jpg')}}" class="girl img-responsive" alt="" />
                                    <img src="{{asset('font_end/images/home/pricing.png')}}" class="pricing" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>IT</span>-SHOP</h1>
                                    <h2>รับประกันสินค้านาน 3 ปี</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('font_end/images/home/girl3.jpg')}}" class="girl img-responsive" alt="" />
                                    <img src="{{asset('font_end/images/home/pricing.png')}}" class="pricing" alt="" />
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->
                            @foreach ($category as $categories)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{url('/product/category/'.$categories->category_id)}}">{{$categories->name}}</a></h4>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!--/category-products-->

                        <div class="price-range">
                            <!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br />
                                <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div>
                        <!--/price-range-->
                    </div>
                </div>

                <div class="col-sm-9 padding-right">

                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center">Features Items</h2>
                        @foreach ($product as $products)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{asset('admin/images/'.$products->image)}}" alt="" style="width:100px">
                                        <h2>฿{{number_format($products->price)}}</h2>
                                        <p>{{$products->name}}</p>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-info-circle"></i>Product Detail</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <!--features_items-->
                    <div class="text-right">
                        {{$product->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Information Technology | Pongsawadi Technological College</p>
                </div>
            </div>
        </div>
    </footer>
    <!--/Footer-->

    <script src="{{asset('font_end/js/jquery.js')}}"></script>
    <script src="{{asset('font_end/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('font_end/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('font_end/js/price-range.js')}}"></script>
    <script src="{{asset('font_end/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('font_end/js/main.js')}}"></script>
</body>

</html>
