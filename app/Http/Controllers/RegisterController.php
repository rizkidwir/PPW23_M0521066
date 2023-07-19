<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register',[
        ]);
    }

    public function store(Request $request){
        $ok = $request -> validate([
            'name'=>'required',
            'email'=> 'required|email:dns|unique:users',
            'password' => 'required|min:5']);

        User::create($ok);
        $request->session()->flash('success','Registration Successfull');
        return redirect('login');
    }
}
