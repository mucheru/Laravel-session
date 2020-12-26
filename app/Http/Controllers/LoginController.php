<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(Request $request)
    {
        $session_data=$request->session()->put('data',$request->input());
        $request->session()->get('data');
        return redirect('profile');

    }

    public function logout(Request $request)
    {
       $request->session()->forget('data');
        return redirect('login');

    }
}
