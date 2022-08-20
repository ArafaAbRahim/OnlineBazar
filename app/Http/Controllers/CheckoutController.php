<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Shipping;
use Cart;
use Darryldecode\Cart\Cart as CartCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class CheckoutController extends Controller
{
    public function index(){
        $customer_id = Customer::where('id', Session::get('id'))->first();
        return view('frontend.pages.checkout', compact('customer_id'));
    }

    public function login_check(){
        return view('frontend.pages.login');
    }

    public function shipping_info(Request $request){

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['mobile'] = $request->mobile;
        $data['address'] = $request->address;
        $data['city'] = $request->city;
        $data['country'] = $request->country;
        $data['zip_code'] = $request->zip_code;
        $s_id = Shipping::insertGetId($data);
        Session::put('sid', $s_id);

        return Redirect::to('/payment');
    }

    public function payment(){

        $cartCollection = Cart::getContent();
        $cart_array = $cartCollection->toArray();
        return view('frontend.pages.payment', compact('cart_array'));
    }

    public function order_place(Request $request){

        $payment_method = $request->payment;

        $pdata = array();
        $pdata['payment_method'] = $payment_method;
        $pdata['status'] = 'pending';
        $payment_id = Payment::insertGetId($pdata);

        $odata = array();
        $odata['customer_id'] = Session::get('id');
        $odata['ship_id'] = Session::get('sid');
        $odata['payment_id'] = $payment_id;
        $odata['total'] = Cart::getTotal();
        $odata['status'] = 'pending';
        $order_id = Order::insertGetId($odata);

        $cartCollection = Cart::getContent();
        $od_data = array();
        foreach($cartCollection as $content){
            $od_data['order_id'] = $order_id;
            $od_data['product_id'] = $content->id;
            $od_data['product_name'] = $content->name;
            $od_data['product_price'] = $content->price;
            $od_data['product_sales_quantity'] = $content->quantity;
            DB::table('order_details')->insert($od_data);

        }

        if($payment_method == 'cash'){
            Cart::clear();
            return view('frontend.pages.success_message');
        }
        elseif($payment_method == 'bkash'){
            Cart::clear();
            return view('frontend.pages.success_message');
        }
        elseif($payment_method == 'nogod'){
            Cart::clear();
            return view('frontend.pages.success_message');
        }
        elseif($payment_method == 'rocket'){
            Cart::clear();
            return view('frontend.pages.success_message');
        }

    }
}
