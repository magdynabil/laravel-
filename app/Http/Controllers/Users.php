<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
public  function manual_login_get()
{
    return view('manual_login');
}
public  function manual_login_post()
{
    $remember=request()->has('remember')?true:false;
    if(auth()->attempt(['email'=>request('email'),'password'=>request('password')],$remember))
    {
       return redirect('home');
    }
    else
    {
        return back();
    }
}
    //
}
