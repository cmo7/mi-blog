<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;
use Clockwork\Request\Request;

//Post Routes
Route::get('/', [PostController::class, 'getPosts']);
Route::get('/post/{slug}', [PostController::class, 'getPostBySlug']);
Route::get('/new/post', [PostController::class, 'newPostForm']);
Route::post('/new/post', [PostController::class, 'newPost']);

Route::get('/category/{slug}', function ($slug) {
    $category = Category::where('slug', $slug)->firstOrFail();
    return view('category', [
        "category" => $category,
    ]);
});

Route::get('/user/{id}', function ($id) {
    return view('user', [
        "user" => User::findOrFail($id),
    ]);
});


//Auth Routes
Route::get('/register', [AuthController::class, 'formularioRegistro']);
Route::post('/register', [AuthController::class, 'registro']);
Route::get('/login', [AuthController::class, 'formularioLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);