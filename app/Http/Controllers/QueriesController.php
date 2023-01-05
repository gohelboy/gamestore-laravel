<?php

namespace App\Http\Controllers;

use App\Models\Queries;
use Illuminate\Http\Request;

class QueriesController extends Controller
{

    public function create()
    {
        return view('contact-us');
    }

    public function store(Request $request)
    {
        $q = new Queries();
        $q->name = $request->name;
        $q->email = $request->email;
        $q->phone = $request->phone;
        $q->messege = $request->msg;
        $q->save();

        return view('contact-us');
    }
}
