<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminUpdateInfoRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    public function info()
    {
        $user = auth()->user();
        return view('admin.profile',compact('user'));
    }
    
    public function updateInfo(AdminUpdateInfoRequest $request)
    {
        $data = $request->all();
        if($data['password'])
        {
            $data['password'] = Hash::make($data['password']);
        }
        auth()->user()->update($data);
        Session::flash('successfully', 'operation was done successfully');
        return redirect()->route('invitations');
    }
}
