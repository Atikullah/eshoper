<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use App\Models\Manufacture;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Add_product(){

        $select_categoris = Categori::where('publication_status',1)->get();
        $select_manufacture = Manufacture::where('publication_status',1)->get();

        return view('layouts.product.add_products',compact('select_categoris','select_manufacture'));
    }

    public function All_product_check(){

            $all_product = Product::leftJoin("categoris","products.categori_id","=","categoris.categori_id")
                ->leftJoin("manufactures","products.manufactures_id","=","manufactures.manufactures_id")
                ->select('products.*','categoris.name','manufactures.manufactures_name')
                ->get();
            
            //model use korle
        #$all_product = Product::with()->get();   //(optional)
       # $all_product = Product::with('category','manufacture')->get();
        #dd($all_product);
        return view('layouts.product.all_products', compact('all_product'));
    }

    public function Add_product_submit(Request $request){
        #dd($request->all());
        $add_product = new Product();
        $add_product->product_name = $request->input('product_name');
        $add_product->categori_id=$request->input('categori_id');
        $add_product->manufactures_id=$request->input('manufactures_id');
        $add_product->short_description=$request->input('short_description');
        $add_product->long_description=$request->input('long_description');
        $add_product->price=$request->input('price');

        $add_product->product_image='dfdf';

        $add_product->product_size=$request->input('product_size');
        $add_product->product_color=$request->input('product_color');
        $add_product->publication_status=$request->input('publication_status');
        $add_product->save();

        $last_product_image= $add_product->product_id;
            #dd($lest_product_image);
        $product_image_info = $request->file('product_image' );
        $product_image_name = $last_product_image.$product_image_info->getClientOriginalName();
        #dd($product_image_name);
        #echo $product_image_name;#time().'.'.$product_image_info->getClientOriginalExtension();
        $destinationPath = public_path('product_image/add_product/');
        $product_image_info->move($destinationPath,$product_image_name);
        $product_pic = Product::find($last_product_image);
        $product_pic->product_image = 'product_image/add_product/'.$product_image_name;
        $product_pic->save();


        return redirect()->route('side_admin.all_Products_click')->with('message','product inseart is successfully..!');

    }



    public function unactive_product($unactive){
        #dd($unactive);
        Product::find($unactive)->update(['publication_status' => 0]);
        return redirect()->route('side_admin.all_Products_click')->with('message','Data unactive is successfully');
    }
    public function active_product($active){
        Product::find($active)->update(['publication_status' => 1]);
        return redirect()->route('side_admin.all_Products_click')->with('message','Data active is successfully');
    }

//    public function active_product($active){
//        $product = Product::find($active)->first();
//        if ($product){
//            $product->publication_status = 1;
//            $product->save();
//
//            return redirect()->route('side_admin.all_Products_click')->with('message','Data active is successfully');
//        }else{
//            return redirect()->route('side_admin.all_Products_click')->with('message','Data Not Activated');
//        }
//    }
//
//    public function unactive_product($unactive){
//        $product = Product::find($unactive)->first();
//        if ($product){
//            $product->update(['publication_status' => 0]);
//
//            return redirect()->route('side_admin.all_Products_click')->with('message','Data De-active is successfully');
//        }else{
//            return redirect()->route('side_admin.all_Products_click')->with('message','Data Not Activated');
//        }
//    }

    public function Update_product($update){
        #dd($update);
        $select_manufacture = Manufacture::where('publication_status',1)->get();
        $select_categoris = Categori::where('publication_status',1)->get();
        $update_product =Product::find($update);
        return view('layouts.product.update_product' ,compact('update_product','select_categoris','select_manufacture'));
    }
    public function Update_productsubmit(Request $request){
        #dd($request->all());
        $product_pic=Product::where('product_id',$request->product_table_id)->first();


        if( $product_image_info = $request->file('product_image' )){
            if (file_exists($product_pic->product_image)){
                unlink($product_pic->product_image);
            }

            $product_image_info = $request->file('product_image' );
            $product_image_name = $product_pic.$product_image_info->getClientOriginalName();
            $destinationPath = public_path('product_image/add_product/');
            $product_image_info->move($destinationPath,$product_image_name);

        }else{
             $product_pic->product_image;
        }
        $product_data=Product::find($request->product_table_id);

        $product_data->product_name = $request->input('product_name');
        $product_data->categori_id=$request->input('categori_id');
        $product_data->manufactures_id=$request->input('manufactures_id');
        $product_data->short_description=$request->input('short_description');
        $product_data->long_description=$request->input('long_description');
        $product_data->price=$request->input('price');

        $product_data->product_image=$product_pic;

        $product_data->product_size=$request->input('product_size');
        $product_data->product_color=$request->input('product_color');
        $product_data->publication_status=$request->input('publication_status');
        $product_data->save();

        return redirect()->route('side_admin.all_Products_click')->with('message','product inseart is successfully..!');



    }

    public function Delete_product($delete_product){
        #dd('$delete_product');
        Product::find($delete_product)->delete();
        return redirect()->back()->with('message','product  Delete is successfully');

    }

}
