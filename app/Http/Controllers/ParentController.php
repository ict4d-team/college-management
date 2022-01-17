<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function index(){
        dd("All Parents' View not yet given...");
    }

    public function add(){
        $data = [
            'title' => "Add a Parent - "
        ];

        return view('parents.add', $data);
    }
}
