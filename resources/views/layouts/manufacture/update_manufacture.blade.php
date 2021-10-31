@extends('Admin.layouts.admin_master')

@section('content')

    <link href="{{asset('backend/Add_categoris/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('backend/Add_categoris/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('//backend/Add_categoris/fonts.googleapis.com/css?family=Roboto:300,400,500,700')}}" rel="stylesheet">
    <link href="{{asset('//backend/Add_categoris/fonts.googleapis.com/css?family=Montserrat:400,700')}}" rel="stylesheet">

    <body>
    <!--background-->

    <div class="feedback-w3layouts" style="background-color: black;height:650px;width: 100%;">

        <div class="feedback-w3layouts" style="background-color: teal;">
            <h1 style="margin-top: 20px;color: lime;font-size: -webkit-xxx-large;"> Update Manufacture </h1>
            <form action="{{route('update_manufacture.submit')}}" method="post">
                {{csrf_field()}}

                <div class="form-group">
                    <label>Enter manufacture name</label>
                    <input type="text" name="manufactures_name" placeholder="Enter your name" class="form-control" style="color: white;font-style: italic;font-size:large;" value="{{$update_manufacture->manufactures_name}}" required>
                    <p class="error" {{$errors->has('manufactures_name') ? $errors->first('manufactures_name') : ''}}></p>
                    <input type="hidden" name="table_id" value="{{$update_manufacture->manufactures_id}}">
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" style="color: white;font-style: italic;font-size:large;" >{{$update_manufacture->short_description}}</input>
                    <p class="error" {{$errors->has('description') ? $errors->first('description') : ''}}></p>
                </div>

                <div class="control">
                    <label>publication status : </label>
                    <input style="float: left;margin:3px;margin-left:6px;" type="checkbox" name="publication_status" placeholder="publication status" value="{{$update_manufacture->publication_status}}"required>
                    <p class="error" {{$errors->has('publication_status') ? $errors->first('publication_status') : ''}}></p>
                </div>

                <div class="form-group"><br><br>
                    <button class="btn btn-primary btn-lg" type="submit">Update manufacture</button>
                    <button class="btn btn-danger btn-lg" type="reset">Reset</button>

                </div>

            </form>

        </div>


    </div>


@endsection