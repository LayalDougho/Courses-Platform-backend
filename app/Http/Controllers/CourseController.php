<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseGridResource;
use App\Http\Resources\CourseResource;
use App\Models\Category;
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
        if ($request->category_id == null){
            $courses = Course::paginate();
        }else{
            $courses = Course::where('category_id' , $request->category_id)->paginate();
        }

        return $this->successResponse(data: CourseGridResource::collection($courses), message: 'success');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id): \Illuminate\Http\JsonResponse
    {
        $course = Course::where('id' , $id)->with(['programmes' , 'teachers' , 'projects'])->first();


        return $this->successResponse(data: CourseResource::make($course), message: 'success');
    }

}
