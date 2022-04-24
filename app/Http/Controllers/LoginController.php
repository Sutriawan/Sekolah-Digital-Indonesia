<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login.index', [
            'titel'=>'login'
        ]);
    }
    public function authenticate(Request $request){
    $credentials = $request->validate([
        'email'=>'required|email:dns',
        'password'=>'required'
    ]);
    if(Auth::attempt($credentials)){
        $request->session()->regenerate();
        return redirect()->intended('admin/dashboard')->with('loginSucces','Login Anda Berhasil!');
    }
    return back()->with('loginError','Login Anda Gagal!');
}
public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('admin/login');
}
}
