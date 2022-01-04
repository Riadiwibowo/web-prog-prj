<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\view;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index($id)
    {
        $product = Product::where('id', $id)->first(); 
        return view('viewDetail', ['product' => $product]);
        
    }
}
