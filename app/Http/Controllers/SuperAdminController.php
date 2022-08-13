<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;

class SuperAdminController extends Controller
{
    public function dashboard(){
        $this->adminAuthCheck();
        return view('admin.dashboard');
               
    }

    public function logout(){
        Session::flush();
        return Redirect::to('/admins');
    }

    public function adminAuthCheck(){
        $id = Session::get('id');
        if($id){
            return;
        }else{
            return Redirect::to('/admins')->send();
        }
    }
}
