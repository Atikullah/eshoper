<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">



    <
    <!--[if lt IE 9]>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>


    <![endif]-->
    <link rel="shortcut icon" href="{{asset('images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
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
                        <a href="{{route('index')}}"><img src="{{asset('images/home/logo.png')}}" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                DOLLAR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canadian Dollar</a></li>
                                <li><a href="#">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                            <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>



                            @php   $customer_id = Session::get('customer_id');


                            #$sipping_id = Session::get('shipping_id');
                            #dd($shipping_id);


                            @endphp

                            @if($customer_id != NULL)
                                <li><a href="{{route('customer_payment')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>

                            @elseif($customer_id != NULL && $shipping_id = NULL)
                                    <li><a href="{{route('')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>

                            @else
                                <li><a href="{{route('login_checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            @endif


                            <li><a href="{{route('check_cart_List')}}"><i class="fa fa-shopping-cart"></i> Cart list</a></li>



                            @if($customer_id != NULL)
                                <li>
                                    <a href="{{route('customer_logout')}}"><i class="fas fa-sign-in-alt"></i>sign out</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{route('login_checkout')}}"><i class="fas fa-sign-in-alt"></i>sign in</a>
                                </li>
                            @endif



                            {{--    [jodi id dore kaj kori]--}}

     {{--     @php $id = !Auth::guard('customer')->guest() ? Auth::guard('customer')->user()->id : '' @endphp --}}


{{--       ekane jodi customer login kora obostai take tahole sign out show korbe na takle sin in show korbe--}}

{{--                            @if(Auth::guard('customer')->guest())--}}

{{--                                <li>--}}
{{--                                    <a href="#"><i class="fas fa-sign-in-alt"></i>sign in</a>--}}

{{--                                </li>--}}

{{--                            @else--}}
{{--                                <li>--}}
{{--                                    <a href="#"><i class="fas fa-sign-in-alt"></i>sign out</a>--}}

{{--                                </li>--}}
{{--                            @endif--}}

                            <li>
                                <a href="{{route('admin_login.page')}}"><i class="fas fa-sign-in-alt"></i>Login</a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->



    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">

                @php
                 $AllHomeSlider = \App\Models\Slider::where('publication_status',1)->get();
                @endphp

                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach($AllHomeSlider as $ActiveAllHomeSlider)
                                <li data-target="#slider-carousel"  data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                            @endforeach

                        </ol>

                        <div class="carousel-inner" role="listbox" style="height: 410px;width: 1140px;">
                            @foreach( $AllHomeSlider as $ActiveAllHomeSlider )

                                <div class="item {{ $loop->first ? ' active' : '' }}" >
                                    <div style="height: 410px;width:450;float: right; ">
                                        <img src="{{asset($ActiveAllHomeSlider->slider_image)}}"  style="height: 410px;width:450;float: right; ">
                                        <img style="margin:212px;margin-right: -285px;"src="{{asset('images/home/pricing.png')}}"  class="pricing" alt="" />
                                    </div>

                                    <div class="active" style="width:400px; height:410px;font-style: italic;float:left;">
                                        <h1 style="color:purple;font-family:initial;font-size: 70px;"><span>E</span>-SHOPPER</h1>
                                        <h2 style="color: black;">Free E-Commerce Template</h2>
                                        <p style="font-family: initial;font-size:19px;}">{{$ActiveAllHomeSlider->slider_description}}</p>

                                    </div>
                                </div>
                            @endforeach
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

    @include('layouts.side')
    @yield('contant')
    </div>
    </div>

    </section>

@include('layouts.hoder')

{{--<section id="slider"><!--slider-->--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-12">--}}
{{--                <div id="slider-carousel" class="carousel slide" data-ride="carousel">--}}
{{--                    <ol class="carousel-indicators">--}}
{{--                        @php--}}
{{--                            $AllHomeSlider = \App\Models\Slider::where('publication_status',1)->get();--}}
{{--                        @endphp--}}

{{--                        @foreach($AllHomeSlider as $ActiveAllHomeSlider)--}}
{{--                        <li data-target="#slider-carousel"  data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>--}}
{{--                        @endforeach--}}
{{--                    </ol>--}}

{{--                    <div class="carousel-inner">--}}
{{--                        <div class="item active">--}}
{{--                            @foreach($AllHomeSlider as $ActiveAllHomeSlider)--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <h1><span>E</span>-SHOPPER</h1>--}}
{{--                                <h2>Free E-Commerce Template</h2>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>--}}
{{--                                <button type="button" class="btn btn-default get">Get it now</button>--}}
{{--                            </div>--}}



{{--                                <div class="carousel-inner" role="listbox">--}}
{{--                                        <div class="item {{ $loop->first ? ' active' : '' }}" >--}}
{{--                                            <img src="{{asset($ActiveAllHomeSlider->slider_image)}}"  style="width: 50%; height: 100px;">--}}
{{--                                        </div>--}}

{{--                                </div>--}}

{{--                                <!-- Controls -->--}}
{{--                            <div class="col-sm-6 {{ $loop->first ? ' active' : '' }}" >--}}
{{--                                <img src="{{asset($ActiveAllHomeSlider->slider_image)}}" class="girl img-responsive" alt="Responsive image" />--}}
{{--                                <img src="{{asset('images/home/pricing.png')}}"  class="pricing" alt="" />--}}
{{--                            </div>--}}

{{--                            @endforeach--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">--}}
{{--                        <i class="fa fa-angle-left">dfgdf</i>--}}
{{--                    </a>--}}
{{--                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">--}}
{{--                        <i class="fa fa-angle-right">dfgdf</i>--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section><!--/slider-->--}}


