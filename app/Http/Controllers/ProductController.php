<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Unique;

class ProductController extends Controller
{
    public function index(){
        return view('furnitures.add');
    }

    public function updateCheck($id){
        $prod = Product::findorfail($id);
        return view('furnitures.update', ['pr' => $prod]);
    }

    public function update(Request $request, $id){
        $prod = Product::findorfail($id);
        $prod->update($request->all());
        $path = $request->file('image')->store('public');
        $prod->path = $path;
        $prod->save();
        return redirect('home');
    }

    public function delete($id){
        DB::table('furnitures')->where('id', $id)->delete();
        return redirect('home');
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
        return redirect('home');
    }
}
                                