<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',(['posts'=> Post::latest()->take(5)->get()]));
});
Route::get('/posts',[PostController::class,'index']);
Route::get('/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store']);


Route::get('/edit/{id}', [PostController::class, 'edit']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::patch('/posts/{id}', [PostController::class, 'update']);
Route::delete('/posts/{id}',[PostController::class, 'destroy']);

Route::get('/register',[RegisterUserController::class,'create']);
Route::post('/register',[RegisterUserController::class,'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
