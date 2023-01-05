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
        $user = Auth::user();
        $cart_total = 0;
        foreach ($user->carts as $item) {
            if ($item->active == 1) {
                $cart_total += (int)$item->total;
            }
        };
        return view('cart', compact('user', 'cart_total'));
    }

    function store(Request $request)
    {
        if (!Auth::check()) {
            return view('login');
        } else {
            $user = User::find(Auth::user()->id);
            $game = Product::find($request->gameid);

            $cart = new Cart;

            $cart->user_id = $user->id;
            $cart->product_id = $game->id;
            $cart->quantity = $request->quantity;
            $cart->total = $game->price * $request->quantity;
            $user->carts()->save($cart);

            $u = Auth::user();
            $cart_total = 0;
            foreach ($u->carts as $item) {
                $cart_total += (int)$item->total;
            };

            return view('cart', compact('user', 'cart_total'));
        }
    }

    function destroy(Request $request)
    {
        Cart::destroy($request->cart_id);
        return redirect()->route('cart');
    }
}
