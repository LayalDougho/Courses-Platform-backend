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
        $teachers = Teacher::with('courses')->get();

        return $this->successResponse(data: TeacherResource::collection($teachers));
    }

    public function show(Teacher $teacher): JsonResponse
    {
        return $this->successResponse(data: TeacherResource::make($teacher));
    }
}
