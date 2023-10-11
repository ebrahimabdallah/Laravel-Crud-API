<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
    $student=Student::all();
    return $student;
    }
    public function store(CreateRequest $request)
    {
        $student=Student::create($request->all());
         return response()->json($student, 201);
    }

    public function delete($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return response()->json('Delete successful', 200);
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
         return response()->json($student,201);
    }
    public function update(Request $request,$id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return response()->json($student, 200);
    }
    public function Search($name)
    {
         
         return  Student::where('name', 'like', '%' .$name. '%')->get();
 
      
    }
    
    

}
