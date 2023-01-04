<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    function index()
    {
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
            echo $c->body; // Print the body of the comment
            $post_title = $c->product->main_img; // Retrieve the title of the post
            print_r($post_title);
        }

        Order

        /* $order = new Order();

        $order->user_id = $user;
        $order->cart_id = "";
        $order->total = $request->total;
        $order->firstname = $request->first_name;
        $order->lastname = $request->last_name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->city = $request->city;
        $order->state = $request->state;
        $order->address = $request->address;
        $order->payment = $request->payment;
        $order->save(); */
    }
}
