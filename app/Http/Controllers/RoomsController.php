<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rooms;

class RoomsController extends Controller
{
    public function show(){
        //return view('room');
        //$rooms = Rooms::all();
        $rooms = Rooms::latest()
                        ->orderBy('type','desc')
                        ->get();
        return view('user.room',['rooms'=>$rooms]);
    }
}
