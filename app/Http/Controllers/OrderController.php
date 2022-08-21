<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function manage_order(){

        $orders = Order::all();

        return view('admin.order.manage_order', compact('orders'));
    }

    public function view_order($id){

        $orders = Order::where('orders.id', $id)->first();
        $order_details = OrderDetail::where('order_id', $id)->get();

        return view('admin.order.view_order', compact('orders', 'order_details'));
    }

    public function change_status(Order $order)
    {
        if($order->status == 'pending'){
            $order->update(['status'=> 'complate']);
        }else{
            $order->update(['status'=> 'pending']);
        }

        return redirect()->back()->with('message', 'Status updated successfully!');
    }
}
