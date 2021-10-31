<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\AdminRegDataRequest;
use App\Models\Admin_login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function admin_login_dashboard(){
        return view('layouts.backend.admin_login');

    }

    public function admin_go_reg_from(){
        return view('layouts.backend.admin_reg_form');

    }

    public function admin_reg_submit(AdminRegDataRequest $request){

        #dd($request->all());
        $admin_reg_data = new Admin_login();
        $admin_reg_data->name = $request->input('name');
        $admin_reg_data->email=$request->input('email');
        $admin_reg_data->number=$request->input('number');
        $admin_reg_data->password = Hash::make($request->input('password'));
        $admin_reg_data->save();

        return redirect()->route('admin_login.page')->with('message','data inseart is successfully');

    }


    public function admin_login_submit(AdminLoginRequest $request){
        $creadintial = [
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ];
        #dd($credentials);
        if (Auth::attempt($creadintial)) {
            return redirect()->route('home');
        }else{
            return 'Failure';
        }

    }

}
