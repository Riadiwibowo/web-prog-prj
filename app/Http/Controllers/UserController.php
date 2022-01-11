<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class UserController extends Controller
{
    use AuthenticatesUsers;
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
        public function update(Request $request){

            $user = User::find(Auth::user()->id);
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required'],
            ]);
            $user->name = $request->name;
            $user->email  = $request->email;
            if(!Hash::check($request->password, auth()->user()->password)){
                return back()->with('messages','sadsa');
            }else{
                
                $user->save();
                return redirect('home');
            }
  
        }
}
