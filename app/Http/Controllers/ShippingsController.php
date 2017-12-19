<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipping;
use Illuminate\Support\Facades\Auth;


class ShippingsController extends Controller
{
    public function store(Request $request)
    {
        Shipping::create($request->all());
        return redirect('/shipping/show');
    }

    public function show()
    {
 		$ship = shipping::where('userID', Auth::user()->id)->get();

 		return view('shipping',['ship'=>$ship]);
    }
}
