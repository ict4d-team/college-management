<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        $data = [
            'title' => "",
            'nbre_students' => Student::all()->count(),
            'nbre_teachers' => Teacher::all()->count(),
            'nbre_male_students' => count(Student::where('gender', "male")->get()),
            'nbre_female_students' => count(Student::where('gender', "female")->get()),
        ];

        return view("index", $data);
    }
}
