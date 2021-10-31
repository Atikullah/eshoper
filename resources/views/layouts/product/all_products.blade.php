@extends('Admin.layouts.admin_master')

@section('content')
    <section class="container">

        @if(Session::has('message'))
            <div class="alert alert-success col-md-3 " >
                {{Session::get('message')}}.
            </div>
        @endif
        <div align="right" class="table-hover">
            <a href="{{route('side_admin.Add_Products_click')}}"><h1 class="btn btn-primary table-hover">Add Products</h1></a>
            <hr>
        </div>

        <div class="container-fluid">
            <div class="col-md-12 table-responsive">
                <table class="table  table-bordered table-dark table-hover">
                    <thead>
                    <tr align="center" class="bg-success">
                        <th>SL</th>
                        <th style="width: 120px;">product Name</th>
                        <th style="width: 220px;">Description</th>
                        <th>image</th>
                        <th> price</th>
                        <th style="width: 120px;">Categori name</th>
                        <th style="width: 120px;">Manufacture name</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $SL = 0;
                    ?>
                    @foreach($all_product as $all_product_data)
                        <tr>
                            <td align="center">{{++$SL}}</td>
                            <td>{{ $all_product_data->product_name }}</td>
                            <td style="width: 160px;">{{$all_product_data->short_description}}</td>
                            <td>
                                <img class="img-size-50" src="{{asset($all_product_data->product_image)}}" width="100" height="100"></td>
                            <td>{{$all_product_data->price}}</td>
                            <td>{{$all_product_data->name}}</td>
                            <td>{{$all_product_data->manufactures_name}}</td>

                                         {{--model use korle --}}

                            {{--<td>{{$all_product_data->category->name}}</td>--}}
                            {{--<td>{{$all_product_data->manufacture->manufactures_name}}</td>--}}



                                        {{--active or unactive--}}


                                {{--@php dd($all_product_data->publication_status); @endphp--}}
                            <td align="center">
                                @if($all_product_data->publication_status ==1)
                                    <span class="btn btn-success">Actived</span>
                                @else
                                    <a onclick="return confirm('Are you sure..! you want to Active this item?')" class="btn btn-danger" href="{{route('active_product', $all_product_data->product_id)}}"> Un active</a>
                                @endif
                            </td>

                            <td align="center">
                                @if($all_product_data->publication_status ==1)
                                    <a onclick="return confirm('Are you sure..! you want to unactive this item?')" href="{{route('unactive_product',$all_product_data->product_id)}}" class="btn btn-danger fa fa-thumbs-down"></a>
                                @else
                                    <i class="btn btn-success fa fa-thumbs-up"></i>
                                @endif
                                                     {{--update--}}

                                <a href="{{route('update_product',$all_product_data->product_id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>

                                {{--Delete--}}

                                <a onclick="return confirm('Are you sure..! you want to Delete this item?')" href="{{route('delete_product',$all_product_data->product_id)}}" class="btn btn-danger fa fa-trash"></a>
                            </td>


                        </tr>


                    @endforeach
                    </tbody>

                </table>

            </div>

        </div>




    </section>


@endsection