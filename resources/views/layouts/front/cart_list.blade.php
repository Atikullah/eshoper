@extends('layouts.master')
@section('contant')


    <div class="container-fluid table-responsive" style="float: right;width: 860px;" >
        @php
            use Gloudemans\Shoppingcart\Facades\Cart;$content=Cart::content();
            #echo "<pre>";
            #print_r($content);
            #echo "</pre>";

        @endphp

        <table class="table table-bordered table-dark  table-hover">
            <thead class="active" style="background-color:yellow;">
            <tr>
                <th style="text-align: center">Sl</th>
                <th style="width: 100px; text-align: center;">Image</th>
                <th style="text-align: center">Name</th>
                <th style="text-align: center">Price</th>
                <th style="width: 150px; text-align: center">Quantity</th>
                <th style="text-align: center">Total</th>
                <th style="text-align: center">Action</th>

            </tr>
            </thead>
            <tbody >
            <?php
            $SL = 0;
            ?>
            @foreach($content as $view_all_qty)
            <tr>
                <th scope="row">{{++$SL}}</th>

                <td >
                    <a href=""><img src="{{asset($view_all_qty->options->image)}}" width="80px" height="100" alt=""></a>
                </td>

                <td>{{$view_all_qty->name}}</td>
                <td>{{$view_all_qty->price}}</td>

                <td class="cart_quantity" >
                    <div class="cart_quantity_button">
                        <form action="{{route('update_qty')}}" method="post">
                            {{csrf_field()}}
                            <div class="cart_quantity_button">
                                <input type="text" name="qty" value="{{$view_all_qty->qty}}" autocomplete="off" size="2">
                                <input type="hidden" name="rowId" value="{{$view_all_qty->rowId}}">
                                <button type="submit" name="submit" class="btn btn-success"> update</button>
                            </div>
                        </form>
                    </div>
                </td>
                <td>{{$view_all_qty->total}}</td>
                <td><a href="{{route('delete_cart_pro',$view_all_qty->rowId)}}" class="btn btn-danger fa fa-trash">Delete</a></td>
            </tr>

            @endforeach

            </tbody>
        </table>


            <div class="col-lg-12" style="width: 925px;float: right; margin: -9px;padding-right: 8px">
                <div class="total_area">
                    <ul>
                        <li style="font-size:20px;}">All Total Product Money : <span>{{Cart::subtotal()}} Tk</span></li>
                    </ul>

                </div>
            </div>

        <div class="col-lg-12" style="margin-top: 30px;">
            <div class="total_area">
                <ul>
                    <li style="font-size: 20px;color: black;">Cart Sub Total <span>{{Cart::subtotal()}} Tk</span></li>
                    <li style="font-size: 20px;color: black;">Eco Tax <span>{{Cart::tax()}} Tk</span></li>
                    <li style="font-size: 20px;color: black;">Shipping Cost <span>Free</span></li>
                    <li style="font-size: 20px;color: black;">Total <span>{{Cart::total()}} Tk</span></li>
                </ul>

                @php $customer_id = Session::get('customer_id'); @endphp

                @if($customer_id !=NULL)

                    <a class="btn btn-default check_out" style="float: right" href="{{route('Shipping')}}">Check Out</a>

                @else

                <a class="btn btn-default check_out" style="float: right" href="{{route('login_checkout')}}">Check Out</a>
                @endif



            </div>
        </div>

    </div>


@endsection