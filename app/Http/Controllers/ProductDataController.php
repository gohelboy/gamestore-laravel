<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductDataController extends Controller
{
    public function index()
    {
        return view('product-upload');
    }

    public function show(Request $request)
    {

        $main_img = uniqid() . '-' . $request->file('image')->getClientOriginalName();
        $img1 = uniqid() . '-' . $request->file('img1')->getClientOriginalName();
        $img2 = uniqid() . '-' . $request->file('img2')->getClientOriginalName();
        $img3 = uniqid() . '-' . $request->file('img3')->getClientOriginalName();
        $img4 = uniqid() . '-' . $request->file('img4')->getClientOriginalName();

        /* $path = $request->file('image')->storeAs('public/images', $main_img);
        $request->file('img1')->storeAs('public/images', $img1);
        $request->file('img2')->storeAs('public/images', $img2);
        $request->file('img3')->storeAs('public/images', $img3);
        $request->file('img4')->storeAs('public/images', $img4); */

        $game = new Product();
        $game->name = $request->name;
        $game->price = $request->price;
        $game->description = $request->description;
        $game->main_img = $request->file('image')->storeAs('public/images', $main_img);
        $game->img1 = $request->file('img1')->storeAs('public/images', $img1);
        $game->img2 = $request->file('img1')->storeAs('public/images', $img2);
        $game->img3 = $request->file('img1')->storeAs('public/images', $img3);
        $game->img4 = $request->file('img1')->storeAs('public/images', $img4);

        echo '<pre>';
        print_r("done");
    }
}
