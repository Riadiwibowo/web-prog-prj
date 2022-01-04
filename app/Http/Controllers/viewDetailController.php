<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class viewDetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $product = Product::where('id', $id)->first(); 
        return view('viewDetail', ['product' => $product]);
        
    }
}
