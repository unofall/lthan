<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FashionController;
use App\Http\Controllers\TopicController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/',[BlogController::class,'index']);
Route::get('/travel',[BlogController::class,'show']);
Route::get('/create',[BlogController::class,'create']);
Route::post('/add',[BlogController::class,'add']);
Route::get('/update/{id}',[BlogController::class,'edit']);
Route::post('/update/{id}',[BlogController::class,'update']);
Route::get('/delete/{id}',[BlogController::class,'delete']);
Route::get('/detail/{id}',[BlogController::class,'detail']);

Route::get('/topic',[TopicController::class,'show']);
Route::get('/create_topic',[TopicController::class,'create']);
Route::post('/create_topic',[TopicController::class,'add']);
Route::get('/update_topic/{id}',[TopicController::class,'edit']);
Route::post('/update_topic/{id}',[TopicController::class,'update']);
Route::get('/delete_topic/{id}',[TopicController::class,'delete']);

Route::get('/fashion', [FashionController::class, 'show']);
Route::get('/create_fashion', [FashionController::class, 'create']);
Route::post('/create_fashion', [FashionController::class, 'add']);
