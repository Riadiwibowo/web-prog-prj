<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class viewDetailController extends Controller
{
    

    public function index($id)
    {
        $prod = Product::where('id', $id)->first(); 
        return view('furnitures.detail', ['pr' => $prod]);
    }
}
