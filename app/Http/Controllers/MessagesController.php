<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;

class MessagesController extends Controller
{
    public function add(Request $request){
        //dd($request->except('_token'));
        Messages::create($request->except('_token'));
        return redirect('/contact');
    }
}
