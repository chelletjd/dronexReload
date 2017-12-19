<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipping;

class ShippingsController extends Controller
{
    public function store(Request $request)
    {
        Shipping::create($request->all());
    }

    public function show($id)
    {
 		Auth::user()->id;
    }
}
