<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('course/{course}' , [CourseController::class , 'show']);
Route::apiResource('course' , CourseController::class);
Route::apiResource('category' , CategoryController::class);
Route::apiResource('post' , PostsController::class);
Route::apiResource('teacher' , TeacherController::class);
Route::get('best-discount' , [\App\Http\Controllers\DiscountController::class , 'show']);
