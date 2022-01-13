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

<<<<<<< HEAD
    public function furnituresuser(){
        $randomprod = view::inRandomOrder()->take(4)->get();
        return view('furnitures.index', ['pr' => $randomprod]); 
    }

    public function viewdetail($id)
    {
        $prod = Product::where('id', $id)->first(); 
        return view('furnitures.detail', ['pr' => $prod]);
    }

=======
    //View Page
    public function index1(){
        $randomprod = view::paginate(4);
        return view('furnitures.index', ['pr' => $randomprod]); 
    }

>>>>>>> dd56aec3bab2d9ea165b6e45270ab9a7fbd6b40a
    public function pagin(){
        $pagin = view::paginate(4);
        return view('furnitures.index', ['pr' => $pagin]);
    }
<<<<<<< HEAD

 
=======
>>>>>>> dd56aec3bab2d9ea165b6e45270ab9a7fbd6b40a
}
