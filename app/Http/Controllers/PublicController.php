<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function Login(){
        return view('auth.login');
    }

    public function Index(){
        return view('index');
    }



    public function ShowCatWiseProduct($categori_id){
        #dd($cat_id);
        $CatWiseProduct = Product::leftJoin("categoris","products.categori_id","=","categoris.categori_id")
            ->leftJoin("manufactures","products.manufactures_id","=","manufactures.manufactures_id")   #[show themanufacture show thatwhy use this function ]
            ->select('products.*','categoris.name','manufactures.manufactures_name')
            ->where('categoris.categori_id',$categori_id)
            ->get();
        return view('layouts.product.CatWiseProduct', compact('CatWiseProduct'));

    }
    public function manufacture_wise_product($manufacture_id){
        #dd($cat_id);
        $manuWiseProduct = Product::leftJoin("manufactures","products.manufactures_id","=","manufactures.manufactures_id")
            ->select('products.*','manufactures.manufactures_name')
            ->where('manufactures.manufactures_id',$manufacture_id)
            ->get();
        return view('layouts.product.manu_wise_pro', compact('manuWiseProduct'));

    }
    public function Single_View_product($product_id){
        #dd($cat_id);
        $view_product = Product::leftJoin("categoris","products.categori_id","=","categoris.categori_id")
            ->leftJoin("manufactures","products.manufactures_id","=","manufactures.manufactures_id")
            ->select('products.*','categoris.name','manufactures.manufactures_name')
            ->where('products.product_id',$product_id)
            ->where('products.publication_status',1)
            ->first();
        return view('layouts.product.single_viewporduct', compact('view_product'));

    }

}
