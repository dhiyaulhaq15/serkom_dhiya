<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthContoroller extends Controller
{
    //
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            $user = Auth::user();

            switch ($user->role_id){
                case 1: return redirect()->route('admin.dashboard');
                case 2: return redirect()->route('operator.dashboard');
                case 3: return redirect()->route('guru.dashboard');
                case 4: return redirect()->route('siswa.dashboard');
                default: return redirect('/');
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
