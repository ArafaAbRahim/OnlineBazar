<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        return view('frontend.pages.checkout');
    }

    public function login_check(){
        return view('frontend.pages.login');
    }
}
