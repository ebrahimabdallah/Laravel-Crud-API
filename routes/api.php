<?php

use App\Http\Controllers\Api\V1\StudentController;
use App\Http\Controllers\AuthController;
 
 
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

Route::group(['middleware'=>['auth:sanctum']],function() {

     Route::get('student/search/{name}',[StudentController::class,'Search']);
     Route::get('student/delete/{id}',[StudentController::class,'delete']);
     Route::get('student/show/{id}',[StudentController::class,'show']);
     Route::get('student/update/{id}',[StudentController::class,'update']);
     Route::post('logout', [AuthController::class, 'logout']);
     Route::post('student/store',[StudentController::class,'store']);

});
Route::get('student',[StudentController::class,'index']); 
 Route::post('register',[AuthController::class,'register']);
 Route::post('login',[AuthController::class,'login']);


 

 