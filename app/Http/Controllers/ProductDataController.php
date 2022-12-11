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

        $main_img_name = uniqid() . '-' . $request->file('image')->getClientOriginalName();
        $img1_name = uniqid() . '-' . $request->file('img1')->getClientOriginalName();
        $img2_name = uniqid() . '-' . $request->file('img2')->getClientOriginalName();
        $img3_name = uniqid() . '-' . $request->file('img3')->getClientOriginalName();
        $img4_name = uniqid() . '-' . $request->file('img4')->getClientOriginalName();

        $game = new Product();
        $game->name = $request->name;
        $game->main_img = $request->file('image')->storeAs('public/images', $main_img_name);
        $game->img1 = $request->file('img1')->storeAs('public/images', $img1_name);
        $game->img2 = $request->file('img2')->storeAs('public/images', $img2_name);
        $game->img3 = $request->file('img3')->storeAs('public/images', $img3_name);
        $game->img4 = $request->file('img4')->storeAs('public/images', $img4_name);
        $game->price = $request->price;
        $game->description = $request->description;

        $game->save();

        echo '<pre>';
        print_r("done");
    }
}
