<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $data = [
            'title' => "All Teachers - ",
            'teachers' => Teacher::all()
        ];

        return view("teachers.index", $data);
    }

    public function details($teacher_id){
        $teacher = Teacher::find($teacher_id);
        if(is_null($teacher)){
            return redirect()->route('teachers.index');
        }

        $data = [
            'title' => "Teacher's Details - ",
            'teacher' => $teacher
        ];

        return view("teachers.details", $data);
    }

    public function add(){
        $data = [
            'title' => "Add a new teacher - ",
            'classes' => Classe::all(),
        ];

        return view('teachers.add', $data);
    }

    public function create(Request $request){
        $this->validate($request, [
            'firstname' => "required",
            'lastname' => "required",
            'gender' => "required",
            'date_of_birth' => "required|date",
            'id_number' => "required",
            'email' => "required|email",
            'phone' => "required",
            'address' => "required",
            'subject' => "required",
            'classe' => "required|exists:classes,id",
        ]);

        Teacher::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'id_number' => $request->id_number,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'subject' => $request->subject,
            'classe_id' => $request->classe,
        ]);

        return redirect()->route('teachers.index'); // Mais on doit rediriger vers les détails du teacher
    }

    public function delete($teacher_id){
        $teacher = Teacher::find($teacher_id);

        @$teacher->delete();

        return redirect()->route('teachers.index');
    }
}
