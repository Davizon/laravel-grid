<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function comprar(Request $request){
        $order = new Order();
        $order->product_id = $request->get('product_id');
        $order->user_id = Auth::user()->id;
        $order->product_name = $request->get('product_name');
        $order->save();

        return redirect('/shop');

    }
}
