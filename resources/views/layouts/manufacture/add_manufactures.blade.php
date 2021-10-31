@extends('Admin.layouts.admin_master')

@section('content')

    <link href="{{asset('backend/Add_categoris/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('backend/Add_categoris/css/style.css')}}" rel='stylesheet' type='text/css'/>
    <link href="{{asset('//backend/Add_categoris/fonts.googleapis.com/css?family=Roboto:300,400,500,700')}}" rel="stylesheet">
    <link href="{{asset('//backend/Add_categoris/fonts.googleapis.com/css?family=Montserrat:400,700')}}" rel="stylesheet">

    <body>
    <!--background-->

    <div class="feedback-w3layouts" style="background-color: black;height:650px;width: 100%;">

        <div class="feedback-w3layouts" style="background-color: lightseagreen;">
            <h1 style="margin-top: 20px;color: fuchsia;"> Add Manufacture  </h1>
            <form action="{{route('add_manufacture.submit')}}" method="post">

                {{csrf_field()}}

                <div class="form-group">
                    <label>Enter manufacture name</label>
                    <input type="text" name="manufactures_name" placeholder="Enter your name" class="form-control" style="color: white;font-style: italic;font-size:large;">
                    <p class="error" {{$errors->has('name') ? $errors->first('name') : ''}}></p>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea type="text" rows="5" placeholder="Description" name="description" style="color: white;font-style: italic;font-size:large;"></textarea>
                    <p class="error" {{$errors->has('description') ? $errors->first('description') : ''}}></p>
                </div>

                <div class="control">
                    <label>publication status : </label>
                    <input style="float: left;margin:3px;margin-left:6px;" type="checkbox" name="publication_status" placeholder="publication status"  value="1">
                    <p class="error" {{$errors->has('publication_status') ? $errors->first('publication_status') : ''}}></p>
                </div>

                <div class="form-group"><br><br>
                    <button class="btn btn-primary btn-lg" type="submit">Add Manufacture</button>
                    <button class="btn btn-danger btn-lg" type="reset">Reset</button>

                </div>

            </form>

        </div>


    </div>

@endsection