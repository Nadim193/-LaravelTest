<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function productCreate(){
        return view('product');
    }
    public function productCreateSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            "id"=>"required",
            'quantity'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
        ],
    );

        $name = $request->name;
        $id = $request->id;
        $quantity = $request->quantity;

        return View("productlist")
        ->with('name', $name)
        ->with('id', $id)
        ->with('quantity', $quantity);

    }
}
