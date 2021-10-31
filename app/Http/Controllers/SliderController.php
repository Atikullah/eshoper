<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function HomeSlider(){
        return view('layouts.Sliders.homepage');
    }

    public function home_allsliderall(){
        return view('layouts.Sliders.allhomeslider');
    }


    public function HomeSlidersubmit(SliderRequest $request){
        #dd($request->all());
        $homeSlider = new Slider();
        if ($homeSlider) {
            $homeSlider->slider_image = 'image';
            $homeSlider->slider_description = $request->input('slider_description');
            $homeSlider->publication_status = $request->input('publication_status') == 'on' ? 1 : 0;
            $homeSlider->save();

            $sliderid = $homeSlider->id;
            $HmoneSliderImage = $request->file('slider_image');
            $home_Slider_image_name = $sliderid . $HmoneSliderImage->getClientOriginalName();
            #dd($product_image_name);
            #echo $product_image_name;#time().'.'.$product_image_info->getClientOriginalExtension();
            $destinationPath = public_path('product_image/add_product/');
            $HmoneSliderImage->move($destinationPath, $home_Slider_image_name);
            $slider_pic = Slider::find($sliderid);
            $slider_pic->slider_image = 'product_image/add_product/' . $home_Slider_image_name;
            $slider_pic->save();


            return redirect()->route('home_allslider')->with('message', 'slider inseart is successfully..!');
        }else{
            return redirect()->back()->with('message', 'slider does not inseart is successfully..!');
        }

    }

    public function reteive_homeslide(){
        $reteive_homeslide = Slider::all();
        return view('layouts.Sliders.allhomeslider',['reteive_homeslide'=>$reteive_homeslide]);
    }

    public function unactive_homeslide($unactive){
        #dd($unactive);
        Slider::find($unactive)->update(['publication_status' => 0]);
        return redirect()->route('home_allslider')->with('message','slider unactive is successfully');
    }
    public function active_homeslide($active){
        Slider::find($active)->update(['publication_status' => 1]);
        return redirect()->route('home_allslider')->with('message','slider active is successfully');
    }

    public function Delete_homeslider($delete){
        #dd('$delete_product');
        Slider::find($delete)->delete();
        return redirect()->back()->with('message','slider  Delete is successfully');

    }





}


