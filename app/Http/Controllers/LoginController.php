<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller
{
    function index(Request $request)
    {
        $user=User::where(['email'=>$request->uname])->first();
        if(!$user || !Hash::check($request->password,$user->password))
        {
            return "username or password not matched";

        }else{
            $session_data=$request->session()->put('data',$request->input());
            $request->session()->get('data');
            return view('profile');
            if(!session()->has('data')){
                return redirect('login');
    
            }
        } 
        
        
       
    }

    public function logout(Request $request)
    {
       $request->session()->forget('data');
        return redirect('login');
    }
}
