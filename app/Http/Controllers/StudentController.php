<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        return view('index')->with('students', Student::latest()->get());
    }

    public function create(Request $request){
        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->age = $request->age;
        $student->save();

        return redirect()->route('index')->with('success', $student->name. ' added!');
    }

    public function update(Request $request){
        $student = Student::find($request->id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->age = $request->age;
        $student->save();

        return redirect()->route('index')->with('success', 'Students updated!');
    }

    public function edit($id){
        $student = Student::find($id);

        return view('edit')->with('student', $student);
    }

    public function delete($id){
        $todo = Student::find($id);
        $todo->delete();

        return redirect()->route('index')->with('delete', 'Student deleted!');
    }
}
