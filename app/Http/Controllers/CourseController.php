<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return Course::all();
    }

    public function show($id)
    {

        return Course::findOrFail($id);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'what_you_will_learn' => 'required',
            'training_program' => 'required',
            'discount_duration' => 'required',
            'teacher_id' => 'required',
           
        ]);

        $course = new Course;
        $course->title = $request->title;
        $course->description = $request->description;
        $course->duration = $request->duration;
        $course->price = $request->price;
        $course->discount = $request->discount;
        $course->what_you_will_learn = $request->what_you_will_learn;
        $course->training_program = $request->training_program;
        $course->discount_duration = $request->discount_duration;
        $course->teacher_id = $request->teacher_id;
       

        $course->save();

        return course::create($request->all());
    }

 

    public function update(Request $request, $id)
    {
        
        $course = Course::find($id);
        $course->update($request->all());
        return $course;
    }

    public function destroy($id)
    {
        return Course::destroy($id);
    }
}