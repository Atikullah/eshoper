<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Registration Form</title>

    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Space Register Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->

    <!-- css files -->
    <link href="{{asset('front/admin_reg_form/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- css files -->

    <!-- Online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <!-- //Online-fonts -->

</head>
<body>

<!-- Main Content -->
<div class="main">
    <div class="main-w3l">
        <h1 class="logo-w3">Admin Register Form</h1>
        <div class="w3layouts-main">
            <h2><span>Register now</span></h2>
            <form action="{{route('admin_reg_form')}}" method="post">
                {{csrf_field()}}
                <div class="form-left-to-w3l">
                    <input type="text" name="name" placeholder="Admin Name" >
                    <p class="error" {{$errors->has('name') ? $errors->first('name') : ''}}></p>
                </div>
                <div class="form-left-to-w3l">
                    <input type="email" name="email" placeholder="Email" >
                    <p class="error" {{$errors->has('email') ? $errors->first('email') : ''}}></p>
                </div>
                <div class="form-left-to-w3l">
                    <input type="text" name="number" placeholder="Number" >
                    <p class="error" {{$errors->has('number') ? $errors->first('number') : ''}}></p>
                </div>
                <div class="form-left-to-w3l">
                    <input type="password" name="password" placeholder="Password" >
                    <p class="error" {{$errors->has('password') ? $errors->first('password') : ''}}></p>
                </div>
                <div class="form-left-to-w3l">
                    <input type="password" name="confirm_password" placeholder="Confirm_password" >
                    <p class="error" {{$errors->has('confirm_password') ? $errors->first('confirm_password') : ''}}></p>
                </div>
                <div class="form-group">
                    <button style="font-size: 20px;" type="submit">Submit</button>
                    <button style="font-size: 20px;" type="reset">Reset</button>

                </div>
            </form>
        </div>
        <!-- //main -->

        <!-- password-script -->

        <!-- //password-script -->

        <!--footer-->
        <div class="footer-w3l">
            <p>&copy; 2018 Space Register Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div>
        <!--//footer-->

    </div>
</div>
<!-- //Main Content -->

</body>
</html>
