@extends('layouts.master')
@section('contant')



    <html>

    <link href="{{asset('product_image/view_single_prosuct/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('product_image/view_single_prosuct/js/jquery.min.js')}}"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="{{asset('product_image/view_single_prosuct/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->

    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <link rel="stylesheet" href="{{asset('product_image/view_single_prosuct/css/etalage.css')}}">
    <script src="{{asset('product_image/view_single_prosuct/js/jquery.etalage.min.js')}}"></script>
    <script>
        jQuery(document).ready(function($){

            $('#etalage').etalage({
                thumb_image_width: 300,
                thumb_image_height: 400,
                source_image_width: 900,
                source_image_height: 1200,
                show_hint: true,
                click_callback: function(image_anchor, instance_id){
                    alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                }
            });

        });
    </script>
    <!-- the jScrollPane script -->
    <script type="text/javascript" src="{{asset('product_image/view_single_prosuct/js/jquery.jscrollpane.min.js')}}"></script>
    <script type="text/javascript" id="sourcecode">
        $(function()
        {
            $('.scroll-pane').jScrollPane();
        });
    </script>
    </head>
    <body>

    <!--content-->
    <div class="content">
        <div class="container">
            <div class="single">
                <div class="col-md-9">

                    <div class="single_grid">

                        <div class="grid images_3_of_2">
                            <ul id="etalage">
                                <li>
                                    <a href="optionallink.html">
                                        <img class="etalage_thumb_image img-responsive" src="{{asset($view_product->product_image)}}" alt="" >
                                        <img class="etalage_source_image img-responsive" src="{{asset($view_product->product_image)}}" alt="" >
                                    </a>
                                </li>
                                <li>
                                    <img class="etalage_thumb_image img-responsive" src="{{asset('product_image/view_single_prosuct/images/sin2.jpg')}}" alt="" >
                                    <img class="etalage_source_image img-responsive" src="{{asset('product_image/view_single_prosuct/images/sin-2.jpg')}}" alt="" >
                                </li>
                                <li>
                                    <img class="etalage_thumb_image img-responsive" src="{{asset('product_image/view_single_prosuct/images/sin3.jpg')}}" alt=""  >
                                    <img class="etalage_source_image img-responsive" src="{{asset('product_image/view_single_prosuct/images/sin-3.jpg')}}" alt="" >
                                </li>
                                <li>
                                    <img class="etalage_thumb_image img-responsive" src="{{asset('product_image/view_single_prosuct/images/sin4.jpg')}}"  alt="" >
                                    <img class="etalage_source_image img-responsive" src="{{asset('product_image/view_single_prosuct/images/sin-4.jpg')}}" alt="" >
                                </li>
                            </ul>

                        </div>
                        <!---->
                        @if(Session::has('message'))
                            <div class="alert alert-success col-md-3 " >
                                {{Session::get('message')}}.
                            </div>
                        @endif


                        <div class="col-sm-6">
                            <div class="product-information" style="width:625px;"><!--/product-information-->
                                <img src="{{asset('product_image/product-details/new.jpg')}}" class="newarrival" alt="" />
                                <h1>#. {{$view_product->short_description}}</h1><br>
                                <h2>#. product ID: 1503-{{$view_product->product_id}}</h2>

                                <span>
									<span>Price:{{$view_product->price}}</span>
                                         <form action="{{route('add_to_cart')}}" method="post" style="width: 440px;">
                                             {{csrf_field()}}
                                            <label>Quantity:</label>
                                            <input type="number" name="qty" value="1"/>
                                            <input type="hidden" name="weight" value=" "/>

                                            <input type="hidden" name="product_id" value="{{$view_product->product_id}}" />

                                            <button type="submit" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Add to cart
                                            </button>
                                        </form>
								</span>
                                <h2><b>-> Availability:</b> In Stock</h2>
                                <h2><b>-> Condition:</b> New</h2>
                                <h2><b>-> Product size:</b> {{$view_product->product_size}}</h2>
                                <h2><b>-> Product color:{{$view_product->product_color}}</h2>
                                <h2><b>-> Categoris:</b> {{$view_product->name}}</h2>
                                <h2><b>-> Brand:</b> {{$view_product->manufactures_name}}</h2>

                                <a href=""><img src="{{asset('product_image/product-details/share.png')}}" class="share img-responsive"  alt="" /></a><br>

                                <img src="{{asset('product_image/product-details/rating.png')}}" alt="" />
                            </div><!--/product-information-->
                        </div>
                    </div><!--/product-details-->


                    <div class="span1_of_1_des" style="margin-top: -60px;">
                            <div class="desc1">

                                <div class="share-desc" >
                                    <div class="share">
                                        <h4>Share Product :</h4>
                                        <ul class="share_nav">
                                            <li><a href="#"><img src="{{asset('product_image/view_single_prosuct/images/facebook.png')}}" title="facebook"></a></li>
                                            <li><a href="#"><img src="{{asset('product_image/view_single_prosuct/images/twitter.png')}}" title="Twiiter"></a></li>
                                            <li><a href="#"><img src="{{asset('product_image/view_single_prosuct/images/rss.png')}}" title="Rss"></a></li>
                                            <li><a href="#"><img src="{{asset('product_image/view_single_prosuct/images/gpluse.png')}}" title="Google+"></a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                    </div>

                </div>

            </div>

         </div>

        <div class="category-tab shop-details-tab"style="width:789px;float:right;
             margin-top:-180px;"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li><a href="#details" data-toggle="tab">Details</a></li>
                    <li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
                    <li><a href="#tag" data-toggle="tab">Tag</a></li>
                    <li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
                </ul>
            </div>

                <div class="tab-content">
                    <div class="tab-pane fade" id="details" >
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img class="etalage_thumb_image img-responsive" src="{{asset($view_product->product_image)}}" alt="" >
                                        <h1>#. {{$view_product->long_description}}</h1><br>
                                        <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="tab-pane fade" id="companyprofile" >
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/home/gallery1.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>




                    <div class="tab-pane fade" id="tag" >
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/home/gallery1.jpg" alt="" />
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="tab-pane fade active in" id="reviews" >
                        <div class="col-sm-12">
                            <ul>
                                <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                                <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <p><b>Write Your Review</b></p>

                            <form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
                                <textarea name="" ></textarea>
                                <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
                                <button type="button" class="btn btn-default pull-right">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>



                </div>
         </div>



    <!---->

    </body>
    </html>

@endsection