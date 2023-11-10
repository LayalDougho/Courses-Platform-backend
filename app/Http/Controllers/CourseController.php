<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use App\Models\Course;
use App\Models\Project;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::with(['teachers' , 'programmes' , 'projects'])->get();
        return $this->successResponse(message:'success',data: CourseResource::collection($courses));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $courses = Course::with(['teachers' , 'programmes' , 'projects'])->find($id);
        if($courses!=null){
        return $this->successResponse(message:'success',data: CourseResource::collection($courses));
        }else{
            return $this->failedResponse(message:'No course founded');
        }
    }
    
    public function content($id)
    {
        $courses = Course::with(['teachers' , 'programmes' , 'projects'])->find($id);
        if($courses!=null){
        return $this->successResponse(message:'success',data: CourseResource::collection($courses)->course_content);
        }else{
            return $this->failedResponse(message:'No course founded');
        }
    }
    public function allprojects()
    {
        $projects = Project::all();
        if($projects->count()>0){
        return $this->successResponse(message:'success',data: $projects);
        }else{
            return $this->failedResponse(message:'No project founded');
        }
    }
    
    public function training($id)
    {
        $courses = Course::with(['teachers' , 'programmes' , 'projects'])->find($id);
        if($courses!=null){
        return $this->successResponse(message:'success',data: CourseResource::collection($courses)->training_program);
        }else{
            return $this->failedResponse(message:'No course founded');
        }
    }
}
