<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserRegistration extends Controller
{
    //
    public function index(Request $request)
    {
        $users=new User;
        $users->firstname=$request->input('firstname');
        $users->middlename=$request->input('middlename');
        $users->lastname=$request->input('lastname');
        $users->email=$request->input('email');
        $users->password=Hash::make($request->input('password'));
        $users->save();
        return redirect('/login');

    }
}
