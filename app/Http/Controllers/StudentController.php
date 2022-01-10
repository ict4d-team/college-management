<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        dd("All Students' View not yet given...");
    }

    public function add(){
        $data = [
            'title' => ""
        ];

        return view('students.add', $data);
    }
}
