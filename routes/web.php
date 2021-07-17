<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

Route::get('/', function () {
    $posts = Post::all();
    return view('portada', [
        "posts" => $posts->take(9),
    ]);
});

Route::get('/post/{slug}', function($slug) {
    $post = Post::where('slug', $slug)->firstOrFail();
    return view('post', [
        "post" => $post,
    ]);
});

Route::get('/category/{slug}', function($slug) {
    $category = Category::where('slug', $slug)->firstOrFail();
    return view('category', [
        "category" => $category,
    ]);
});

Route::get('/user/{id}', function($id) {
    return view('user', [
        "user" => User::findOrFail($id),
    ]);
});