<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }


    public function autenticar(Request $request)
    {

        $credenciais= $request->only(['email', 'password']);
        if (!Auth::attempt($credenciais)) {
            return redirect()->back()->with('error', 'Usuário e senha não coincidem ou não existem')->withInput();
        }else {
            return redirect()->route('dashboard');
        }

        return redirect()->intended(route('login'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
