<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {$users = User::find( Auth::user()->id);
        // $users = User::where( Auth::user()->id)->first(); 
        return view('profile.detail', ['user' => $users]);
    }


    //masih harus diubah niel 
    public function updateCheck(){
       
        
        if(Auth::user()){
            $users = User::find( Auth::user()->id);
            
            // $users = User::findorfail($id);
            if(Auth::user()){
                
                return view('profile.update', ['user' => $users]);
            }else{
                
                return redirect('home')->back();
            }
            
        }else{
            return redirect()->back();
        }
        
    }

    //masih harus diubah niel
    public function update(Request $request){
        // $users = User::where('name', Auth::user()->name)->first();
        // $users = User::findorfail($id);
        $user = User::find($request->get(Auth::user()->id) );
        dd($request);
        if(Auth::user()){
            dd('suk');
            // $validate = $request->validate([
            //     'name' => ['required', 'string', 'max:255'],
            //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            //     'password' => ['required', 'string', 'min:5','max:20', 'confirmed'],
            // ]);
            $user->name = $request['name'];
            dd(Auth::user());
            $user->email = $request['email'];
            $user->password = $request['password'];
            $user->save();
            
            return redirect('home');
        }else{
        
            return redirect()->back();
        }
        
        
    }
}
