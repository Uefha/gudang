<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        if (Auth::attempt($request->only(["username", "password"]))) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withInput()->with("pesan", "username atau password salah");
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
