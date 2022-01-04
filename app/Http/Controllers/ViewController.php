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

    public function index1(){
        $randomprod = view::inRandomOrder()->take(4)->get();
        return view('viewFurniture', ['pr' => $randomprod]); 
    }

    
    
}
