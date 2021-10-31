<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartqtyRequest;
use App\Models\Product;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function check_cart_list(){
        return view('layouts.front.cart_list');
    }

    public function qty_add_to_cart(CartqtyRequest $request){

        $weight=$request->weight;
        $add_quantity=$request->qty;
        $product_id=$request->product_id;
       $qty_add_to_cart_info = Product::where('product_id',$product_id)->first();
       #dd($qty_add_to_cart_info);

        $data['qty']=$add_quantity;
        $data['weight']=$weight;
        $data['id']=$qty_add_to_cart_info->product_id;
        $data['name']=$qty_add_to_cart_info->product_name;
        $data['price']=$qty_add_to_cart_info->price;

        $data['options']['image']=$qty_add_to_cart_info->product_image;
        Cart::add($data);
        return redirect()->route('check_cart_List');
    }

    public function update_qty(Request $request){
        $update_qty=$request->qty;
        $rowId=$request->rowId;
        Cart::update($rowId,$update_qty);
        return redirect()->route('check_cart_List');
    }
    public function delete_cart_pro($rowId){
        Cart::update($rowId,0);
        return redirect()->route('check_cart_List');
    }


}
