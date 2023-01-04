<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    function index()
    {
        return view('cart');
    }

    function store(Request $request)
    {
        $currunt_user = Auth::user();
        $user = User::find($currunt_user->id);
        $game = Product::find($request->gameid);


        $cart = new Cart;

        $cart->user_id = $currunt_user->id;
        $cart->product_id = $game->id;
        $cart->quantity = $request->quantity;
        $cart->total = $game->price * $request->quantity;
        $user->carts()->save($cart);
    }
}
