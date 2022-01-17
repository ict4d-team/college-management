<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        dd("All Teachers' View not yet given...");
    }

    public function add(){
        $data = [
            'title' => "Add a Teacher - ",
        ];

        return view('teachers.add', $data);
    }
}
