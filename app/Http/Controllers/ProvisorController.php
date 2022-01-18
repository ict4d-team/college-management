<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Provisor;
use Illuminate\Http\Request;

class ProvisorController extends Controller
{
    public function details(){
        $provisor = Provisor::first();

        $data = [
            'title' => "Provisor's Details - ",
            'provisor' => $provisor
        ];

        return view("provisor.details", $data);
    }

    public function add(){
        $data = [
            'title' => "Add the provisor - ",
        ];

        return view('provisor.add', $data);
    }

    public function create(Request $request){
        $this->validate($request, [
            'firstname' => "required",
            'lastname' => "required",
            'gender' => "required",
            'date_of_birth' => "required|date",
            'email' => "required|email",
            'phone' => "required",
            'address' => "required",
        ]);

//        Provisor::getProvisorInstance([
//            'firstname' => $request->firstname,
//            'lastname' => $request->lastname,
//            'gender' => $request->gender,
//            'date_of_birth' => $request->date_of_birth,
//            'email' => $request->email,
//            'phone' => $request->phone,
//            'address' => $request->address,
//        ]);

        Provisor::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->route('provisor.index');
    }

    public function delete(){
        $provisor = Provisor::first();

        if(!is_null($provisor)){
            $provisor->delete();
        }

        return redirect()->route('provisor.index');
    }
}
