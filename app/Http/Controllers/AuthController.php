<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login');;
    }

    public function login(LoginRequest $request)
    {
        if(Auth::attempt(['email' => $request->email,'password' => $request->password]))
        {
            return redirect()->route('invitations');
        }else{
            Session::flash('error-message', 'Invalid Credentials.');
            return redirect()->back();
        }
    }
}
