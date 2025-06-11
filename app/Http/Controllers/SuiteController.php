<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Suite;
use Illuminate\Support\Facades\Auth;



class SuiteController extends Controller
{
    public function showlist(){
        //return view('room');
        //$rooms = Rooms::all();
        $Suites =  Suite::orderBy('no_kamar','asc')
                        ->get();
        return view('admin.dashboard',['Suites'=>$Suites]);
    }

    public function add(Request $request){
        //dd($request->except('_token'));
        //Messages::create($request->except('_token'));
        //return redirect('/addsuites');
        //dd($request->all());

        $validated = $request->validate([
            'no_kamar' => ['required', 'string'],
            'type' => ['required', 'string'],
            'nama_tamu' => ['required', 'string'],
            'id_number' => ['required', 'string'],
            'id_card' => ['nullable','max:1024'],
        ]);

         // send error message
         if (!$validated) {
            return redirect()->back()->with('error', 'Validation failed!');
        }

        $validated = Suite::create($request->except('_token'));
        if($request->hasfile('id_card')) {
            //Rename File
            //$fileName = time().'_'.$request->file('id_card')->getClientOriginalName();
            $request->file('id_card')->move('fotoktp/', $request -> file('id_card')-> getClientOriginalName());
            $validated->id_card = $request -> file('id_card')-> getClientOriginalName();
            $validated -> save();
            //$filePath = 'id_card/'.$fileName;
            //$validated['id_Card'] = $filePath;
        }
       // Suite::create($request->except('_token'));
        return redirect()->back()->with('success', 'Guest Added!');
    }

    public function showguest($id){
        $data = Suite::find($id);
        return view('admin.guestview', compact('data'));
    }

    public function updateguest(Request $request, $id){
        $data = Suite::find($id);
        if($request->hasfile('id_card')){
            $destination ='fotoktp'.$data->id_card;
            if(Suite::exists($destination)){
                Suite::destroy($destination);
            }
            $file = $request->file('id_card');
            $name = $file-> getClientOriginalName();
            $file ->move('fotoktp/', $name);
            $data->id_card = $name;
        }
        $data->update();
        return redirect('/helloadmin');
        //return redirect()->back()->with('success', 'Guest Updated!');
    }

    public function deleteguest($id){
        $data = Suite::find($id);
        $data->delete();
        //return redirect('/helloadmin');
        return redirect()->back()->with('success', 'Guest Deleted!');
    }
}
