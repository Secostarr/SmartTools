<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view ('admin.login_admin');    
    }

    public function auth(Request $request)
    {
        $user = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($user)) {
            return redirect()->route('admin.admin_dashboard');
        } else {
            return back()->with('error', 'username atau password yang anda masukkan salah!!!');
        }
    }

    public function dashboard()
    {
        return view('admin.admin_dashboard');    
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Logout Berhasil');    
    }
}
