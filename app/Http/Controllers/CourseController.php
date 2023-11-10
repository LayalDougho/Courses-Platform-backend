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
    public function index(Request $request): \Illuminate\Http\JsonResponse
    {
        if ($request->category_id == null)
        {
            $courses = Course::inRandom()->pagiante();
        }else {
            $courses = Course::where('category_id' , $request->category_id)->paginate();
        }

        return $this->successResponse(data: CourseResource::collection($courses), message: 'success');
    }
    /**
     * Display the specified resource.
     */
    public function show(Course $course): \Illuminate\Http\JsonResponse
    {
        return $this->successResponse(data: CourseResource::collection($course->load(['programmes' , 'projects' , 'teachers'])), message: 'success');
    }

}
