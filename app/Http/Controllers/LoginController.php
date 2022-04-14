<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    // masih error
    public function autentikasi(Request $request)
    {
        $credentials = $request->validate([
            'nik' => 'required|numeric',
            'name' => 'required'
        ]);

        // $user = User::find(1);
        // if(Auth::login($user)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/home');
        // }

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
    
        return back()->with('loginError', 'Login Gagal!');
    }

}
