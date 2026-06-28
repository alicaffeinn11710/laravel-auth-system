<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function(){
//     return view('home');
// });
// Route::get('/courses', function(){
//     return view('courses.index');
// });
// Route::get('/courses/{courseid}', function($courseid){
//     return view('courses.single',compact('courseid'));
// });
// Route::get('/courses', function(){
//     return view('courses');
// });
Route::get('/register', function(){
    return view('register');


})->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login',function(){
    return view('login');
});

Route::post('/login',
[AuthController::class,'login']);