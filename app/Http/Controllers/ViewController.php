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

    //View Page
    public function index1(){
        $randomprod = view::paginate(4);
        return view('furnitures.index', ['pr' => $randomprod]); 
    }

    public function pagin(){
        $pagin = view::paginate(4);
        return view('furnitures.index', ['pr' => $pagin]);
    }
}
