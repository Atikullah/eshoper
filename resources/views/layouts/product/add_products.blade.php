@extends('Admin.layouts.admin_master')

@section('content')

    <section class="content"style="background-color: darkgray;margin-top: -15px">
        <h1 align="center">Add products</h1><hr style="width:300px;border-color: blue;"><br>
        <div class="container-fluid">
            <div class="col-md-12" style="text-align: -webkit-center;">
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>

                    </div>
                @endif

                @if(Session::has('message'))
                    <div class="alert alert-success">
                        <strong>Success.....!<br></strong> {{Session::get('message')}}.
                    </div>
                @endif
                <div class="col-md-6" >
                    <form action="{{route('add_product.submit')}}" enctype="multipart/form-data" method="post" >
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" name="product_name" placeholder="Enter your product_name" class="form-control">
                            <p class="error" {{$errors->has('product_name') ? $errors->first('product_name') : ''}}></p>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="categori_id">
                                <option value=""> select categori </option>
                                @foreach($select_categoris as $add_cat_data)
                                    <option value="{{$add_cat_data->categori_id}}">{{$add_cat_data->name}}</option>
                                @endforeach
                            </select>
                            <p class="error" {{$errors->has('categori_id') ? $errors->first('categori_id') : ''}}></p>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="manufactures_id">
                                <option value=""> select manufacture </option>
                               @foreach($select_manufacture as $manufatureData)
                                <option value="{{$manufatureData->manufactures_id}}">{{$manufatureData->manufactures_name}}</option>
                                @endforeach
                            </select>
                            <p class="error" {{$errors->has('manufactures_id') ? $errors->first('manufactures_id') : ''}}></p>
                        </div>

                        <div class="form-group">
                            <textarea rows="5" name="short_description" placeholder=" Short description" class="form-control"></textarea>
                            <p class="error" {{$errors->has('short_description') ? $errors->first('short_description') : ''}}></p>
                        </div>

                        <div class="form-group">
                            <textarea rows="5" name="long_description" placeholder="Long description" class="form-control"></textarea>
                            <p class="error" {{$errors->has('long_description') ? $errors->first('long_description') : ''}}></p>
                        </div>

                        <div class="form-group">
                            <input type="text" name="price" placeholder="Enter price" class="form-control">
                            <p class="error" {{$errors->has('price') ? $errors->first('price') : ''}}></p>
                        </div>

                        <div class="form-group">
                            <input type="file" name="product_image" placeholder=" product image" class="form-control">
                            <p class="error" {{$errors->has('product_image') ? $errors->first('product_image') : ''}}></p>
                        </div>

                        <div class="form-group">
                            <input type="text" name="product_size" placeholder=" product size"  class="form-control">
                            <p class="error" {{$errors->has('product_size') ? $errors->first('product_size') : ''}}></p>
                        </div>
                        <div class="form-group">
                            <input type="text" name="product_color" placeholder=" product color"  class="form-control">
                            <p class="error" {{$errors->has('product_color') ? $errors->first('product_color') : ''}}></p>
                        </div>

                        <div class="control">
                            <label style="float: left">publication status : </label>
                            <input style="margin-left: -353px;margin-top: 8px;" type="checkbox" name="publication_status" placeholder="publication status"  value="1">
                            <p class="error" {{$errors->has('publication_status') ? $errors->first('publication_status') : ''}}></p>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                            <button class="btn btn-danger btn-lg" type="reset">Reset</button>

                        </div>

                    </form>
               </div>

            </div>

        </div>


    </section>

@endsection