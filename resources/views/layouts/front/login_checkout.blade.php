@extends('layouts.master')
@section('contant')

       <section style="margin-top: 70px;">


           <head>
                <script>
                    addEventListener("load", function () {
                      setTimeout(hideURLbar, 0);
                       }, false);

                        function hideURLbar() {
                            window.scrollTo(0, 1);
                        }
                </script>

                   <link rel="stylesheet" href="{{asset('front/ck_out_login/css/style.css')}}" type="text/css" media="all" />

                   <link href="{{asset('front/ck_out_login/css/font-awesome.min.css')}}" rel="stylesheet">
           </head>

            <body>
                       <div class="main-bg" style="width: 850px;float: right;height:725px;">

                               <h1>Check out</h1>

                               <div class="sub-main-w3">
                                       <div class="bg-content-w3pvt" style="height: 530px;">
                                               <div class="top-content-style">
                                                       <img src="{{asset('front/ck_out_login/images/user.jpg')}}" alt="" />
                                               </div>
                                               <form action="{{route('customer_login')}}" method="post">
                                                   {{csrf_field()}}
                                                       <p class="legend">Login Here<span class="fa fa-hand-o-down"></span></p>
                                                       <div class="input">
                                                               <input type="email" placeholder="Email" name="email" required />
                                                               <span class="fa fa-envelope"></span>
                                                       </div>
                                                       <div class="input">
                                                               <input type="password" placeholder="Password" name="password" required />
                                                               <span class="fa fa-unlock"></span>
                                                       </div>
                                                       <button type="submit" class="btn submit">
                                                               <span class="fa fa-sign-in"></span>
                                                       </button>
                                               </form>
                                               <a href="#" class="btn btn-danger">Forgot Password</a>
                                               <a href="#Sign_up" data-toggle="tab" class="btn btn-success">Sign up</a>
                                       </div>
                               </div>


                       </div>
            </body>

       </section>

       <section>

           <div class="tab-content">
               <div id="Sign_up" class="tab-pane ">

                   <div class="animated infinite bounce">
                    <body>
                       <div class="check_out_signup_bg_image" style="width: 925px;float: right;height: 750px; margin-top: -724px;">

                           <div class="sub-main-w3">
                               <div class="bg-content-w3pvt" style="height: 660px;">
                                   <div class="top-content-style" style="margin-top:45px;">
                                       <img src="{{asset('front/ck_out_login/images/user.jpg')}}" alt="" />
                                   </div>
                                   <form action="{{route('customer_sign_up')}}" method="post">
                                       {{csrf_field()}}
                                       <p class="legend">Sign up  Here<span class="fa fa-hand-o-down"></span></p>
                                       <div class="input">
                                           <input type="text" placeholder="Name" name="name" required />
                                           <span class="fa fa-edit"></span>
                                       </div>
                                       <div class="input">
                                           <input type="email" placeholder="Email" name="email" required />
                                           <span class="fa fa-envelope"></span>
                                       </div>
                                       <div class="input">
                                           <input type="text" placeholder="Enter number number With country code" name="number">
                                           <span class="fa fa-volume-control-phone"></span>
                                       </div>
                                       <div class="input">
                                           <input type="password" placeholder="Password" name="password" required />
                                           <span class="fa fa-unlock"></span>
                                       </div>
                                       <div class="input">
                                           <input type="password" placeholder="Conform Password" name="Conform_password" required />
                                           <span class="fa fa-unlock"></span>
                                       </div>
                                       <button type="submit" class="btn btn-success" style="margin-right: -80px;}">
                                           <span class="fa fa-sign-in"></span>
                                           <button class="btn btn-danger" type="reset" style="margin-left: -40px;">Reset</button>
                                       </button>
                                   </form>
                               </div>
                           </div>


                       </div>
                    </body>
                   </div>
               </div>
           </div>
       </section>






@endsection