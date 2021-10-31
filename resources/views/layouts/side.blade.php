<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3" style="margin-left: -50px;">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    {{--<div>--}}
                        <!--category-productsr-->
                        <div class="brands-name">
                           <?php
                              $cat_publication_status = \App\Models\Categori::where('publication_status',1)->get();
                            ?>
                            @foreach ($cat_publication_status as $show_active_cat)

                                    <div class="panel panel-default ">
                                        <div class="panel-heading" style="background-color: mistyrose">
                                            <h4 class="panel-title" align="center">
                                                <a href="{{route('categoriWiseProducr',$show_active_cat->categori_id)}}">{{$show_active_cat->name}}</a>
                                            </h4>
                                        </div>
                                    </div>
                               @endforeach


                    </div><!--/category-products-->
                    {{--</div>--}}
                    <div class="brands_products"><!--brands_products-->
                        <h2>Brands</h2>
                        <div class="brands-name">
                            <?php
                                $manufracture_status = \App\Models\Manufacture::where('publication_status',1)->get();
                            ?>
                            @foreach($manufracture_status as $show_active_manufacture)
                                    <div class="panel panel-default">
                                        <div class="panel-heading"style="background-color: mistyrose">
                                            <h4 class="panel-title" align="center"><a href="{{route('manufacture_wise_product',$show_active_manufacture->manufactures_id)}}">{{$show_active_manufacture->manufactures_name}}</a>
                                        </div>
                                    </div>

                            @endforeach
                        </div>
                    </div><!--/brands_products-->

                    <div class="price-range"><!--price-range-->
                        <h2>Price Range</h2>
                        <div class="well text-center">
                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                            <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div><!--/price-range-->

{{--                    <div class="shipping text-center"><!--shipping-->--}}
{{--                        <img src="{{asset('images/home/shipping.jpg')}}" alt="" />--}}
{{--                    </div><!--/shipping-->--}}

                </div>
            </div>