<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;

Route::get('/', function () {
    $posts = Post::all();
    return view('posts', [
        "posts" => $posts,
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