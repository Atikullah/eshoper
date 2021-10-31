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
                        <th style="width: 120px;">Order Id</th>
                        <th style="width: 220px;">Customer name</th>
                        <th>Total Order</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $SL = 0;
                    ?>
                    @foreach($order_info as $order_list)
                        <tr>
                            <td align="center">{{++$SL}}</td>
                            <td>{{$order_list->order_id}}</td>
                            <td style="width: 160px;">{{$order_list->name}}</td>
                            <td>{{$order_list->total_order}}</td>
                            <td>{{$order_list->order_status}}</td>


                            <td align="center">

                                    <a onclick="return confirm('Are you sure..! you want to unactive this item?')" href="{{route('unactive_product',$order_list->order_id)}}" class="btn btn-danger fa fa-thumbs-down"></a>

                                    <i class="btn btn-success fa fa-thumbs-up"></i>

{{--                                update--}}

                                <a href="{{route('view_order_details',$order_list->order_id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>

{{--                                Delete--}}

                                <a onclick="return confirm('Are you sure..! you want to Delete this item?')" href="{{route('delete_order_product',$order_list->order_id)}}" class="btn btn-danger fa fa-trash"></a>
                            </td>


                        </tr>


                    @endforeach
                    </tbody>

                </table>

            </div>

        </div>




    </section>


@endsection