<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Psy\Sudo;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=Student::all();
         return view ('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $students= Student::create($request->all());
        return route('index');
    
    }

    /**
     * Display the specified resource.
     */
    public function show($id,Request $request)
    {
        $students=Student::findOrFail($id);
        return $students; 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $students = Student::findOrFail($id);
        return view('student.edit', compact('students'));
 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $students=Student::findOrFail($id);
        $students->update($request->all());
        return redirect()->route('student.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $students=Student::findOrFail($id);
       $students->delete();
       return redirect()->route('student.index');

    }
 
}
