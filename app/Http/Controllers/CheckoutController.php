<?php

namespace App\Http\Controllers;

use App\Http\Requests\Customer_sinupRequest;

use App\Http\Requests\ShippingRequest;
use App\Models\Customer;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class CheckoutController extends Controller
{
    public function login_checkout(){
        return view('layouts.front.login_checkout');
    }

    # jodi guard niya kaj kori tahole eita-----------????

//    public function Customer_sign_up(Customer_sinupRequest $request){
//        #dd($request->all());
//        $Customer_sign_up = new Customer();
//        $Customer_sign_up->name = $request->input('name');
//        $Customer_sign_up->email=$request->input('email');
//        $Customer_sign_up->password = Hash::make($request->input('password'));
//        $Customer_sign_up->save();
////
//        $credentials = [
//            'email' => $request->input('email'),
//            'password' => $request->input('password'),
//        ];
//        //dd($credentials);
//
//
//        if (Auth::guard('customer')->attempt($credentials)){
//            return redirect()->route('Shipping');
//
//        }else{
//            return redirect()->route('Shipping');
//        }
//
//    }


    public function Customer_sign_up(Customer_sinupRequest $request){

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['number'] = $request->number;
        $data['password'] =Hash::make($request->password);
        #dd($data);

        $customer_id = DB::table('customers')->insertGetId($data);

        Session::put('customer_id', $customer_id);
        Session::put('name', $request->name);

        return redirect()->route('Shipping');
    }

    public function customer_login(Request $request){

        $email = $request->email;
        $password =Hash::make($request->password);

        # dd($request->all());

        $customer_log = DB::table('customers')->where('email',$email)
            ->where('password',$password)->first();

        if ($customer_log){
            Session::get('customer_id', $customer_log->customer_id);
            #Session::put('id', $result->id);
            echo 'enter shipping';

        }else{
            echo 'this page ';
        }
    }

    public function Shipping(){
        return view('layouts.front.shipping');
    }

    public function shipping_data_submit(ShippingRequest $request){
        #dd($request->all());

        $shipping = array();
        $shipping['company_name'] = $request->company_name;
        $shipping['shipping_name'] = $request->shipping_name;
        $shipping['shipping_address'] = $request->shipping_address;
        $shipping['address_optional'] = $request->address_optional;
        $shipping['shipping_city'] = $request->shipping_city;
        $shipping['shipping_email'] = $request->shipping_email;
        $shipping['shipping_number'] = $request->shipping_number;


        $shipping_id = DB::table('shippings')->insertGetId($shipping);

        Session::put('shipping_id', $shipping_id);
        Session::put('shipping_name', $request->shipping_name);

        ##dd($shipping_id);

        return redirect()->route('customer_payment');
    }

    public function customer_payment(){
        return view('layouts.front.payment');
    }


    public function payment_order(Request $request){
        $customer_payment_order = $request->payment_method;

        $payment_data = array();
        $payment_data['payment_method']=$customer_payment_order;
        $payment_data['payment_status']='panding';

        $payment_id = DB::table('payments')->insertGetId($payment_data);


        $payment_order = array();
        $payment_order['customer_id']=Session::get('customer_id');
        $payment_order['shipping_id']=Session::get('shipping_id');
        $payment_order['payment_id']=$payment_id;
        $payment_order['total_order']=Cart::total();
        $payment_order['order_status']='panding';


        $order_id = DB::table('orders')->insertGetId($payment_order);
        $content=Cart::content();


        $order_detail = array();
        foreach ($content as $order_info) {
            $order_detail['order_id'] = $order_id;
            $order_detail['product_id'] = $order_info->id;
            $order_detail['product_name'] = $order_info->name;
            $order_detail['price'] = $order_info->price;
            $order_detail['sell_qty'] = $order_info->qty;
            $order_detail['stock_qty'] = 'pending';


            $order_detail_id = DB::table('order_details')->insert($order_detail);

        }
        if($customer_payment_order =='paypol'){
            Cart::destroy();
            return view('layouts.front.rocket');

        }elseif ($customer_payment_order =='rocket'){


        }
        elseif($customer_payment_order=='bkash'){

           echo 'bkash' ;

        }else{
            echo 'dyhdtfhdf';
        }


        if($customer_payment_order =='nuxuspay'){
            echo 'nuxuspay';

        }elseif ($customer_payment_order =='visa'){
            echo 'visa';
        }else{
            echo 'nothing';
        }
   }




    public function customer_logout(){
        Session::flush();
        return redirect()->route('index');
    }
    public function order_information(){
        $order_info = DB::table('orders')
            ->leftJoin("customers","orders.customer_id","=","customers.customer_id")
            ->select('orders.*','customers.name')
            ->get();
       return view('layouts.product.product_order',compact('order_info'));
    }


    public function view_order_details(){

        $view_order_details = DB::table('orders')
            ->leftJoin("customers","orders.customer_id","=","customers.customer_id")
            ->leftJoin("order_details","orders.order_id","=","order_details.order_id")
            ->leftJoin("shippings","orders.shipping_id","=","shippings.shipping_id")
            ->select('orders.*','order_details.*','shippings.*','customers.*')
            ->first();
       # dd($view_order_details);

        return view('layouts.product.view_order_details',compact('view_order_details'));

    }

    public function delete_order_product($delete){
        #dd('$delete_product');

        Order::find($delete)->delete();
        return redirect()->back()->with('message','product  Delete is successfully');

    }


}
