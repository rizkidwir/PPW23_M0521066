<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){
        $ok = $request -> validate([
        'email'=> 'required|email:dns',
        'password' => 'required']);

        if(Auth::attempt($ok)){
            $request->session()->regenerate();
            if(Auth::user()->role=='admin'){
                return redirect()->intended('/helloadmin');
            }
            if(Auth::user()->role=='user'){
                return redirect()->intended('/welcome');
            }
        }

        return back()->with('loginError', 'Login Failed');
   }

   public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
