<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return Teacher::all();
        
        
    }

    public function show($id)
    {
        return Teacher::findOrFail($id);
       
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'image' => 'required',
            'specialization' => 'required',
           
        ]);

        $teacher = new Teacher;
        $teacher->first_name = $request->first_name;
        $teacher->last_name = $request->last_name;
        $teacher->email = $request->email;
        $teacher->image = $request->image;
        $teacher->specialization = $request->specialization;

        $teacher->save();

        return teacher::create($request->all());

    }



    public function update(Request $request, $id)
    {
        $teacher = Teacher::find($id);
        $teacher->update($request->all());
        return $teacher;


    }

    public function destroy($id)
    {
        return Teacher::destroy($id);
       
    }
}