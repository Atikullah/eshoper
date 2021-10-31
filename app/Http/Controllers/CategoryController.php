<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCatRequest;
use App\Http\Requests\UpdateCatRequest;
use App\Models\Categori;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Add_categori(){
        return view('layouts.categori.Add_categori');
    }


    public function SubmitAdd_Categori(AddCatRequest $request){
        #dd($request->all());

        $add_categoris = new Categori();
        $add_categoris->name = $request->input('name');
        $add_categoris->description=$request->input('description');
        $add_categoris->publication_status=$request->input('publication_status');
        $add_categoris->save();


        return redirect()->route('side_admin.All_categori')->with('message','Data inseart is successfully..!');
    }


    public function All_categori(){

        $add_categoris = Categori::all();
        return view('layouts.categori.All_categori' ,compact('add_categoris'));

    }


    public function UnActive_cat_data($UnActive_cat){
        #$data['categoris'] = Categori::where('categori_id',$UnActive_cat)->first(); {same kaj kore}
        $data['categoris']  = Categori::find($UnActive_cat)->update(['publication_status' => 0]);

            return redirect()->route('side_admin.All_categori')->with('message','Data unactive is successfully');
    }


    public function Active_categori($Active_cat){
        $data['categoris']  = Categori::find($Active_cat)->update(['publication_status' => 1]);

        return redirect()->route('side_admin.All_categori')->with('message','Data active is successfully');
    }


    public function Update_categori($update_categori){
        #dd($update_categori);
        $update_categori= Categori::find($update_categori);
        return view('layouts.categori.update_categori',['update_categori'=>$update_categori]);

    }


    public function Update_categori_submit(UpdateCatRequest $request){
        #dd($request->all());
        #$update_categori = Categori::find('categori_id',$request->table_id);
        $update_categori = Categori::where('categori_id',$request->table_id)->first();

            if ($update_categori){
                $update_categori->name = $request->input('name');
                $update_categori->description = $request->input('description');
                $update_categori->publication_status = $request->input('publication_status');
                $update_categori->save();

                return redirect()->route('side_admin.All_categori')->with('message','Data update is successfully..!');
            }else{
                return redirect()->back();
            }
    }


    public function Delete_categori($delete_cat_info){
            #$article = Article::find($id);

            Categori::find($delete_cat_info)->delete();
            return redirect()->back()->with('message','Categori Delete is successfully');
        }

    }


