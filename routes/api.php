<?php

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
///Home Page 
Route::get('/generaldiscount',[HomeController::class, 'generaldiscount']);
Route::get('/allprograms',[HomeController::class,'allprograms']);
Route::get('/program/{id}',[HomeController::class,'program']);
Route::get('/allteachers',[TeacherController::class,'index']);
Route::get('/teacher/{id}',[TeacherController::class,'teacher']);
Route::get('allcourses',[CourseController::class, 'index']);
//Course Page
Route::get('/course/{id}',[CourseController::class, 'show']);
Route::get('/course_content/{id}',[CourseController::class, 'content']);
Route::get('/allprojects',[CourseController::class, 'allprojects']);
Route::get('/course_training/{id}',[CourseController::class, 'training']);
//Posts Page 
Route::get('/allposts',[PostsController::class,'index']);
Route::get('/post/{id}',[PostsController::class,'show']);