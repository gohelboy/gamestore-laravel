<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    function index()
    {
        $user = Auth::user();

        return view('myorder');
    }

    function checkout()
    {
        return view('checkout');
    }

    function MakeOrder(Request $request)
    {

        $user = Auth::user();
        $cart = $user->carts;

        foreach ($cart as $c) {
            $order = new Order();
            $order->user_id = $user->id;
            $order->cart_id = $c->id;
            $order->total = $request->total;
            $order->firstname = $request->first_name;
            $order->lastname = $request->last_name;
            $order->email = $request->email;
            $order->phone = $request->phone;
            $order->state = $request->state;
            $order->city = $request->city;
            $order->address = $request->address;
            $order->payment = $request->payment;

            $order->save();

            $c->active = 0;
            $c->save();
        }

        return redirect()->route('my-order');
    }
}
