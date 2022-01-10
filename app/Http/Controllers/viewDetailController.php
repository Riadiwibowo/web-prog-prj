<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Redirect;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;

class viewDetailController extends Controller
{
    

    public function index($id)
    {
        $prod = Product::where('id', $id)->first(); 
        return view('furnitures.detail', ['pr' => $prod]);
    }

    public function previous()
    {
        redirect()->back();
    }

}
