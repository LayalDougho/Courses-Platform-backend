<?php

namespace App\Http\Controllers;

use App\Http\Resources\TeacherResource;
use App\Models\Teacher;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(): JsonResponse
    {
        $teachers = Teacher::all();

        return $this->successResponse(data: TeacherResource::collection($teachers));
    }

    public function show($id): JsonResponse
    {
        $teachers = Teacher::find($id)->with('courses')->get();
        if($teachers!=null){
            return $this->successResponse(data: $teachers);
        }else{
            return $this->failedResponse(message:'No teacher founded');
        }
    }
}
