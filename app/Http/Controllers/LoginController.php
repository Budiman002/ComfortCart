<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function aunth(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'ends_with:@gmail.com'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'loginfailed');
    }
}
