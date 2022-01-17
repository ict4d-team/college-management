<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $data = [
            'title' => "All Students - ",
            'students' => Student::paginate(20)
        ];

        return view("students.index", $data);
    }

    public function details($student_id){
        $student = Student::find($student_id);
        if(is_null($student)){
            return redirect()->route('students.index');
        }

        $data = [
            'title' => "Student's Details - ",
            'student' => $student
        ];

        return view("students.details", $data);
    }

    public function add(){
        $data = [
            'title' => "Add a new student - ",
            'classes' => Classe::all(),
        ];

        return view('students.add', $data);
    }

    public function create(Request $request){
        $this->validate($request, [
            'firstname' => "required",
            'lastname' => "required",
            'date_of_birth' => "required|date",
            'address' => "required",
            'classe' => "required|exists:classes,id",
        ]);

        Student::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'classe_id' => $request->classe,
        ]);

        return redirect()->route('students.index'); // Mais on doit rediriger vers les détails du student
    }

    public function delete($student_id){
        $student = Student::find($student_id);

        @$student->delete();

        return redirect()->route('students.index');
    }
}
