<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Session;
session_start();
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin_login');
    }

    public function login(Request $request){
        $email = $request->email;
        $password = md5($request->password);
        $result = Admin::where('email', $email)->where('password', $password)->first();
        if($result){
            Session::put('id', $result->id);
            Session::put('name', $result->name);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message', 'Email or Password Invalid');
            return Redirect::to('/admins');
        }
    }
}