<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'))->with('id');
    }

    public function trashStudent()
    {
        $students = Student::onlyTrashed()->get();
        return view('students.trash', compact('students'))->with('id');
    }

    public function restore($id)
    {
        $student = Student::onlyTrashed()->where('id', $id);
        $student->restore();
        return redirect()->route('students.index')->with('success', 'Student data restored successfully.');
    }

    public function restoreall()
    {
        $student = Student::onlyTrashed();
        $student->restore();
        return redirect()->route('students.index')->with('success', 'All students record restored successfully.');
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
           'name' => 'required',
           'address' => 'required',
        ]);
        $student = new Student();
        $student->name = $request->name;
        $student->address = $request->address;
        $student->save();
        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    public function show(Student $student)
    {
        //
    }

    public function edit(Student $student)
    {
        //
    }

    public function update(Request $request, Student $student)
    {
        //
    }

    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }

    public function permanentDelete($id)
    {
        $student = Student::onlyTrashed()->where('id', $id);
        $student->forceDelete();
        return redirect()->route('students.index')->with('success', 'Student data deleted permanently.');
    }

    public function destroy(Student $student)
    {
        //
    }
}
