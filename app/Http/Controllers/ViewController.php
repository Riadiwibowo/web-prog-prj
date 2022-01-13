<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\view;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        $randomprod = view::inRandomOrder()->take(4)->get();
        return view('welcome', ['pr' => $randomprod]);  
    }

    public function furnituresuser(){
        $randomprod = view::inRandomOrder()->take(4)->get();
        return view('furnitures.index', ['pr' => $randomprod]); 
    }

    public function viewdetail($id)
    {
        $prod = Product::where('id', $id)->first(); 
        return view('furnitures.detail', ['pr' => $prod]);
    }

    public function pagin(){
        $pagin = view::paginate(4);
        return view('furnitures.index', ['pr' => $pagin]);
    }

 
}
