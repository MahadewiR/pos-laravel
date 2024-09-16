<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function actionLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $credential = $request->only('email', 'password');
        if (Auth::attempt($credential)) {
            return redirect()->intended('dashboard');
        }

        return redirect()->back()->withErrors('Login Gagal. Mohon periksa kembali email dan password anda!');
    }
}
