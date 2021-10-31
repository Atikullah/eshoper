@extends('Admin.layouts.admin_master')

@section('content')
    <!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
    <!DOCTYPE HTML>
    <html lang="zxx">

    <head>
        <title>Add Slider</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords" content="Modish Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />

        <link rel="stylesheet" href="{{asset('front/slider/css/style.css')}}" type="text/css" media="all" />
        <!-- Style-CSS -->
        <link href="{{asset('front/slider/css/font-awesome.min.css')}}" rel="stylesheet">

        <link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        <!-- //web-fonts -->
    </head>

    <body >
        <!-- content -->
        <div class="sub-main-w3" >
            <p class="legend">Add Slider<span class="fa fa-hand-o-down"></span></p>

            < <form action="{{route('slider.submit')}}" enctype="multipart/form-data" method="post" >
                {{csrf_field()}}

                <div class="input">
                    <input type="file" name="slider_image" placeholder="Enter your slider image" >
                    <p class="error" {{$errors->has('slider_image') ? $errors->first('slider_image') : ''}}></p>
                </div>


                <div class="input">
                    <input type="text" name="slider_description" placeholder=" Slider description" >
                    <p class="error" {{$errors->has('slider_description') ? $errors->first('slider_description') : ''}}></p>
                </div>

                <div class="control">
                    <label style="float: left">publication status : </label>
                    <input style="margin-left:7px;margin-top: 6px;" type="checkbox" name="publication_status" placeholder="publication status">
                    <p class="error" {{$errors->has('publication_status') ? $errors->first('publication_status') : ''}}></p>
                </div>

                <button style="margin-left: 220px" type="submit" class="submit">
                    <span class="fa fa-sign-in"></span>
                </button>
                <button style="margin-left: 135px;margin-top: -45px;" type="reset" class="submit">
                    <span class="fa fa-refresh"></span>
                </button>
            </form>
        </div>

    </body>


    </html>


@endsection