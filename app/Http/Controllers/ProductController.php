<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Unique;

class ProductController extends Controller
{
    public function index(){
        $prod = Product::get();
        return view('show', ['pr' => $prod]); 
    }

    public function upload(Request$request){
        $prod = New Product;

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:15',
            'price' => 'required',
            'type' => 'required',
            'color' => 'required',
        ]);
        $error = '';
        if ($validator->fails()){
            $error = 'All data must be filled in';
        }
        if($error){
            return redirect()->back()->with('error',$error);
        }

        $prod->name = $request->name;
        $prod->price = $request->price;
        $prod->type = $request->type;
        $prod->color = $request->color;

        $path = $request->file('image')->store('public');
        $prod->path = $path;

        $prod->save();
        return redirect()->back()->with('sukses','product data has been uploaded');
    }
}
