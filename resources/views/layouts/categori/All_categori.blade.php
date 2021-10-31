@extends('Admin.layouts.admin_master')

@section('content')
    <section class="container">

        @if(Session::has('message'))
            <div class="alert alert-success col-md-4 " >
            {{Session::get('message')}}.
            </div>
        @endif
        <div align="right" class="table-hover">
            <a href="{{route('side_admin.Add_categori')}}"><h1 class="btn btn-primary table-hover">Add Categori</h1></a>
            <hr>
        </div>

        <div class="container-fluid">
            <div class="col-md-12 table-responsive">
                <table class="table  table-bordered table-dark table-hover">
                    <thead>
                        <tr align="center" class="bg-success">
                            <th>SL</th>
                            <th>Categori Name</th>
                            <th style="width: 430px;">Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                    <?php
                    $SL = 0;
                    ?>

                        @foreach($add_categoris as $add_cat_data)
                            <tr>
                                <td>{{++$SL}}</td>
                                <td>{{$add_cat_data->name}}</td>
                                <td>{{$add_cat_data->description}}</td>
                                <td align="center">

                                    @if($add_cat_data->publication_status ==1)
                                         <span class="btn btn-success">Active</span>
                                    @else
                                        <a onclick="return confirm('Are you sure..! you want to Active this item?')" class="btn btn-danger" href="{{route('active_cat', $add_cat_data->categori_id)}}"> Un active</a>

                                    @endif
                                </td>

                                <td align="center">

                                    {{--#active...Unactive--}}

                                        @if($add_cat_data->publication_status ==1)
                                            <a onclick="return confirm('Are you sure..! you want to unative this item?')" href="{{route('all_cat.unactive_cat',$add_cat_data->categori_id)}}" class="btn btn-danger fa fa-thumbs-down"></i></a>
                                        @else
                                            <i class="btn btn-success fa fa-thumbs-up"></i>
                                        @endif

                                    {{--# update--}}

                                        <a href="{{route('all_Cat.update_categori',$add_cat_data->categori_id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>

                                    {{--#delete--}}

                                        <a onclick="return confirm('Are you sure..?? ' +
                                         '/n you want to delete this item?')" href="{{route('all_cat.delete_cat',$add_cat_data->categori_id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>


                                </td>
                            </tr>
                        @endforeach
                    </tbody>


                </table>
            </div>

        </div>
    </section>



@endsection