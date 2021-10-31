<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Admin Login</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Latest Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tag Keywords -->

    <!-- css files -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="{{('front/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->

    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
          rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
<div class="main-bg">
    <!-- title -->
    <h1 class="animated infinite flip" style="color: yellow;font-family: initial;font-style: italic;">Admin Login Form</h1>
    <hr style="width: 266px;" class="animated infinite rubberBand">

    <div class="col-md-12">
            @if(Session::has('message'))
                <div class="animated lightSpeedIn " style="margin-left: 28px;font-size: 30px;font-style: italic;font-family: fantasy;color: lime;margin-top: -70px;">
                    <strong>Success.....!<br></strong> {{Session::get('message')}}.
                </div>
            @endif

    </div>
    <div class="sub-main-w3">
        <div class="bg-content-w3pvt">
            <div class="top-content-style">
                <img src="{{asset('front/images/user.jpg')}}" alt="" />
            </div>

            <form action="{{route('admin_login')}}" method="post">
                <p class="legend" style="color:#500a6f;font-family: fantasy;font-style: italic;">Login Here<span class="fa fa-hand-o-down"></span></p>
                <div class="input">
                    <input type="email" placeholder="Email" name="email" />
                    <span class="fa fa-envelope"></span>
                </div>
                <div class="input">
                    <input type="password" placeholder="Password" name="password" />
                    <span class="fa fa-unlock"></span>
                </div>
                <button type="submit" class="btn submit">
                    <span class="fa fa-sign-in"></span>
                </button>
            </form>
            <div>
                <a href="#" class="btn btn-warning" style="padding: 35px;margin-left: -35px;">Forgot Password...?</a>
                <a href="{{route('admin_login.reg_from')}}" class="btn btn-warning" style="padding:35px;margin-left: -35px;">Sin up
            </div>
        </div>
        <!-- //content -->
        <!-- copyright -->

        <!-- //copyright -->
    </div>
</body>

</html>