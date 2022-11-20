<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function index(){
        return view('student.index', [
            'students' => Student::latest()->filter(request(['search']))->get()
        ]);
    }
    public function show(Student $student){
        return view('student.show', [
            'students' => $student
        ]);
    }

    public function create(){
        return view('student.create');
    }
    public function store(Request $request){
       $formFields = $request->validate([
        'name' => ['required', 'min:3'],
        'email' => ['required','email', Rule::unique('students', 'email')],
        'phone'=> 'required',
        'address' => ['required', 'min:6'] 
       ]);

        Student::create($formFields);
               
       return redirect('/')->with('message', 'Student Added Succesfully');

    }
    public function edit(Student $student){
        return view('student.edit', ['student' => $student]);
    }
    public function update(Request $request, Student $student){
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required','email', Rule::unique('students', 'email')],
            'phone'=> 'required',
            'address' => ['required', 'min:6'] 
        ]);

        $student->update($formFields);
        return back()->with('message', 'Updated Succesfully');
    }
}
