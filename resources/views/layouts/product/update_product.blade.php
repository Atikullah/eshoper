@extends('Admin.layouts.admin_master')

@section('content')

    <section class="content"style="background-color: darkgray;margin-top: -15px">
        <h1 align="center">update products</h1><hr style="width:300px;border-color: blue;"><br>
        <div class="container-fluid">
            <div class="col-md-12" style="text-align: -webkit-center;">

                <div class="col-md-6">
                    <form action="{{route('product.submit')}}" method="post" enctype="multi part/form-data" name="product">
                        {{csrf_field()}}

                        <div class="form-group">
                            <input type="text" name="product_name" placeholder="Enter your product_name" class="form-control" value="{{$update_product->product_name}}" style="color: black">
                            <p class="error" {{$errors->has('product_name') ? $errors->first('product_name') : ''}}></p>
                            <input type="hidden" name="product_table_id" value="{{$update_product->product_id}}">


                        </div>

                        <div class="form-group">
                            <select class="form-control" name="categori_id" >
                                <option> select categori </option>
                                @foreach($select_categoris as $add_cat_data)
                                    <option value="{{$add_cat_data->categori_id}}">{{$add_cat_data->name}}</option>
                                @endforeach
                            </select>
                            <p class="error" {{$errors->has('categori_id') ? $errors->first('categori_id') : ''}}></p>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="manufactures_id">
                                <option> select manufacture </option>
                                @foreach($select_manufacture as $manufatureData)
                                 <option value="{{$manufatureData->manufactures_id}}">{{$manufatureData->manufactures_name}}</option>
                                @endforeach
                            </select>
                            <p class="error" {{$errors->has('manufactures_id') ? $errors->first('manufactures_id') : ''}}></p>
                        </div>



                        <div class="form-group">
                            <textarea rows="5" name="short_description" placeholder="Short description" class="form-control" style="color: black">{{$update_product->short_description}}</textarea>
                            <p class="error" {{$errors->has('short_description') ? $errors->first('short_description') : ''}}></p>
                        </div>


                        <div class="form-group">
                            <textarea rows="5" name="long_description" placeholder="Long description" class="form-control" style="color: black">{{$update_product->long_description}}</textarea>
                            <p class="error" {{$errors->has('long_description') ? $errors->first('long_description') : ''}}></p>
                        </div>

                        <div class="form-group">
                            <input type="text" name="price" placeholder="Enter price" class="form-control" value="{{$update_product->price}}" style="color: black">
                            <p class="error" {{$errors->has('price') ? $errors->first('price') : ''}}></p>
                        </div>

                        <div class="form-group">
                            <input type="file" name="product_image" placeholder=" product image" class="form-control" value="{{$update_product->product_image}}" style="color: black">
                            <p class="error" {{$errors->has('product_image') ? $errors->first('product_image') : ''}}></p>
                        </div>

                        <div class="form-group">
                            <input type="text" name="product_size" placeholder=" product size"  class="form-control" value="{{$update_product->product_size}}" style="color: black">
                            <p class="error" {{$errors->has('product_size') ? $errors->first('product_size') : ''}}></p>
                        </div>
                        <div class="form-group">
                            <input type="text" name="product_color" placeholder=" product color"  class="form-control" value="{{$update_product->product_color}}" style="color: black">
                            <p class="error" {{$errors->has('product_color') ? $errors->first('product_color') : ''}}></p>
                        </div>

                        <div class="control">
                            <label style="float: left">publication status : </label>
                            <input style="margin-left: -353px;margin-top: 8px;"
                                   type="checkbox" name="publication_status" placeholder="publication status"  value="{{$update_product->publication_status}}">

                            <p class="error" {{$errors->has('publication_status') ? $errors->first('publication_status') : ''}}></p>

                        </div>


                        <div class="form-group">
                            <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                            <button class="btn btn-danger btn-lg" type="reset">Reset</button>

                        </div>

                    </form>
                    <script type="text/javascript">
                        document.forms['product'].elements['categori_id'].value='{{$update_product->categori_id}}';

                        document.forms['product'].elements['manufactures_id'].value='{{$update_product->manufactures_id}}';

                        document.forms['product'].elements['publication_status'].value='{{$update_product->publication_status}}';


                    </script>
                </div>

            </div>

        </div>


    </section>

@endsection