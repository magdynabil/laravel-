<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public  function login_get()
    {
        return view('login_admin');
    }
    public  function login_post()
    {
        $remember=request()->has('remember')?true:false;
        if(auth()->guard('web_admin')->attempt(['email'=>request('email'),'password'=>request('password')],$remember))
        {
            return redirect('admin_path');
        }
        else
        {
            return back();
        }
    }
    //
}
