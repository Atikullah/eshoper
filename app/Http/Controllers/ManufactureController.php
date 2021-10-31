<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddManufactureRequest;
use App\Http\Requests\UpdateManufactureRequest;
use App\Models\Manufacture;
use Illuminate\Http\Request;

class ManufactureController extends Controller
{
    public function Add_manufactures(){
        return view('layouts.manufacture.add_manufactures');
    }

    public function Submit_add_manufacture(AddManufactureRequest $request){
        #dd($request->all());
        $manufature_add = new Manufacture();
        if ($manufature_add){
        $manufature_add->manufactures_name = $request->input('manufactures_name');
        $manufature_add->description=$request->input('description');
        $manufature_add->publication_status=$request->input('publication_status');
        $manufature_add->save();

        return redirect()->route('side_admin.All_manufacture')->with('message',' Manufacture data inseart is successfully..!');
        }else{
            return redirect()->back();
        }


    }
    public function All_manufactures(){
        return view('layouts.manufacture.All_manufacture');
    }

    public function manufature_data_chech(){
        $manufature_add = Manufacture::all();
        return view('layouts.manufacture.All_manufacture',['manufature_add'=>$manufature_add]);
    }


    public function unactive_manufature($unactive){
        #dd($unactive);
        Manufacture::find($unactive)->update(['publication_status' => 0]);
        return redirect()->route('side_admin.All_manufacture')->with('message','Data unactive is successfully');
    }
    public function active_manufature($active){
        Manufacture::find($active)->update(['publication_status' => 1]);
        return redirect()->route('side_admin.All_manufacture')->with('message','Data active is successfully');
    }


    public function update_manufature($update){
        #dd($update);
        $update_manufacture =Manufacture::find($update);
        return view('layouts.manufacture.update_manufacture' ,compact('update_manufacture'));
    }


    public function Update_manufature_submit(UpdateManufactureRequest $request){
        #dd($request->all());
        #$manufature_submit=Manufacture::find('manufactures_id',$request->table_id);
        $manufature_submit = Manufacture::where('manufactures_id',$request->table_id)->first();
        if ($manufature_submit){
            $manufature_submit->manufactures_name = $request->input('manufactures_name');
            $manufature_submit->description=$request->input('description');
            $manufature_submit->publication_status=$request->input('publication_status');
            $manufature_submit->save();

            return redirect()->route('side_admin.All_manufacture')->with('message',' Manufacture update  is successfully..!');
        }else{
            return redirect()->back();
        }
    }

    public function Delete_manufature($delete){
        #dd($delete);
        Manufacture::find($delete)->delete();

        return redirect()->back()->with('message','Manufacture  Delete is successfully');
    }

}
