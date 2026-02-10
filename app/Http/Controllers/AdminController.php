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
            return redirect()->route('admin.dashboard');
        } else {
            return back()->with('error', 'username atau password yang anda masukkan salah!!!');
        }
    }

    public function dashboard() {
        $settings = SiteSetting::pluck('value', 'key'); // Ambil semua setting
        $users = User::all();
        return view('admin.dashboard', compact('settings', 'users'));
    }

    public function updateSettings(Request $request) {
        foreach ($request->settings as $key => $value) {
            SiteSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
        return back()->with('success', 'Tampilan depan berhasil diperbarui!');
    }

    public function deleteUser($id) {
        User::findOrFail($id)->delete();
        return back()->with('success', 'User berhasil dihapus.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Logout Berhasil');    
    }
}
