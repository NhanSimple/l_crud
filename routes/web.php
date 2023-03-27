<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/students/index',[App\Http\Controllers\StudentController::class,'index']);
route::get('/students/create',[App\Http\Controllers\StudentController::class,'create']);
route::post('/students/store',[App\Http\Controllers\StudentController::class,'store']);
route::get('/students/update/{student}',[App\Http\Controllers\StudentController::class,'edit']);
route::post('/students/update/{student}',[App\Http\Controllers\StudentController::class,'update']);
route::get('/students/show/{student}',[App\Http\Controllers\StudentController::class,'show']);
route::get('/students/destroy/{student}',[App\Http\Controllers\StudentController::class,'delete']);
route::post('/students/destroy/{student}',[App\Http\Controllers\StudentController::class,'destroy']);