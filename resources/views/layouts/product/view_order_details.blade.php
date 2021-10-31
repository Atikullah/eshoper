@extends('Admin.layouts.admin_master')

@section('content')


    <div class="container-fluid">
        <div class="col-md-12 table-responsive" >
            <table class="table  table-bordered table-dark table-hover">
                <h1  style="color: brown;text-align:center;font-family: fantasy">Customer Details</h1><br>
                <thead>

                <tr align="center" class="bg-success">
                    <th>SL</th>
                    <th style="width:110px;">customer Id</th>
                    <th style="width:215px;">Name </th>
                    <th style="width: 400px;">Email</th>
                    <th>Number</th>

                </tr>

                </thead>
                <tbody>
                <?php
                $SL = 0;
                ?>


                    <tr>
{{--                        @foreach($view_order_details as $customert_data)--}}
{{--                            @endforeach--}}
                        <td align="center">{{++$SL}}</td>
                        <td style="font-size: 15px">{{$view_order_details->customer_id}}</td>
                        <td style="font-size: 15px">{{$view_order_details->name}}</td>
                        <td style="font-size: 15px" >{{$view_order_details->email}}</td>
                        <td style="font-size: 15px">{{$view_order_details->number}}</td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>


    <div class="container-fluid">
        <div class="col-md-12 table-responsive">
            <table class="table  table-bordered table-dark table-hover">
                <h1  style="color: brown;text-align:center;font-family: fantasy">Shipping Details</h1><br>
                <thead>
                <tr align="center" class="bg-success">
                    <th>SL</th>
                    <th>Shipping Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Address (po)</th>
                    <th>Email</th>
                    <th>Number</th>

                </tr>
                </thead>
                <tbody>
                <?php
                $SL = 0;
                ?>

                <tr>
                    <td align="center">{{++$SL}}</td>
                    <td>{{$view_order_details->shipping_id}}</td>
                    <td >{{$view_order_details->shipping_name}}</td>
                    <td >{{$view_order_details->shipping_address}}</td>
                    <td >{{$view_order_details->address_optional}}</td>
                    <td >{{$view_order_details->shipping_email}}</td>
                    <td >{{$view_order_details->shipping_number}}</td>

                </tr>

                </tbody>

            </table>

        </div>

    </div>




    <div class="container-fluid">
        <div class="col-md-12 table-responsive">
            <table class="table  table-bordered table-dark table-hover">
                <h1  style="color: brown;text-align:center;font-family: fantasy">Order Details</h1><br>
                <thead>
                <tr align="center" class="bg-success">
                    <th>SL</th>
                    <th >Order detail Id</th>
                    <th >Order Id</th>
                    <th>product Id</th>
                    <th>product name</th>
                    <th>price</th>
                    <th>Stock quantity</th>
                    <th>Sell quantity</th>
                    <th>Sub Total</th>

                </tr>
                </thead>
                <tbody>
                <?php
                $SL = 0;
                ?>

                @foreach($view_order_details as $order_details)
                <tr>


                    <td >{{++$SL}}</td>
{{--                    <td >{{$order_details->order_detail_id}}</td>--}}
                    <td >{{$order_details->order_id}}</td>
                    <td >{{$order_details->product_id}}</td>
                    <td >{{$order_details->product_name}}</td>
                    <td >{{$order_details->price}}</td>
                    <td >{{$order_details->stock_qty}}</td>
                    <td >{{$order_details->sell_qty}}</td>
                    <td >{{$order_details->price*$order_details->sell_qty}}</td>

                </tr>
                @endforeach

                </tbody>

            </table>

        </div>

    </div>






@endsection