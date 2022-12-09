<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDataController extends Controller
{
    public function index()
    {
        return view('product-upload');
    }

    public function show(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
    }
}
