<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\view;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
        $randomprod = view::inRandomOrder()->take(4)->get();
        return view('home', ['pr' => $randomprod]); 
    }

    public function index2($role){
       
        if(Auth::user()->role == $role ){
            return view('admin');
        }else{
            return view('user');
        }
    }

    
}
