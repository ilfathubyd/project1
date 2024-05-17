<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{
    public function login_act(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password'))) {
            $user = Auth::user();
            $request->session()->put('nama', $user->username); 
    
            // Alihkan berdasarkan divisi (langsung dari objek $user)
            switch ($user->devisi) {
                case 'admin':
                    return redirect('/admin');
                case 'staff':
                    return redirect('/staff');
            }
        }
        return redirect('/')->withErrors(['login' => 'Username atau password salah!']);
    }
    
}

