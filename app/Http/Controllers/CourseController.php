<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::with(['teachers' , 'programmes' , 'projects'])->get();

        return $this->successResponse(data: CourseResource::collection($courses));
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return $this->successResponse(data: CourseResource::make($course));
    }
}
