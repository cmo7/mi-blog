<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;

Route::get('/', function (Request $request) {
    $search = $request->input('search');
    $posts = Post::query()
        ->where('title', 'LIKE', '%' . $search . '%')
        ->orWhere('content', 'LIKE', '%' . $search . '%')
        ->get();

    return view('portada', [
        "posts" => $posts->sortByDesc('created_at')->take(9),
    ]);
});

Route::get('/post/{slug}', function ($slug) {
    $post = Post::where('slug', $slug)->firstOrFail();
    return view('post', [
        "post" => $post,
    ]);
});

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

Route::get('/new/post', function () {
    return view('new-post', [
        "categories" => Category::all(),
    ]);
});

Route::post('/new/post', function (Request $request) {

    //Subir la imagen
    $imageName = time() . '.' . $request->image->extension();
    $request->image->move(public_path('images'), $imageName);

    //Crear el post
    $post = new Post;
    $post->title = $request->input('title');
    $post->slug = Str::slug($request->input('title'));
    $post->category_id = $request->input('category');
    $post->excerpt = substr($request->input('content'), 0, 200);
    $post->content = $request->input('content');
    $post->user_id = 1;                                           // TODO
    $post->image = "/images/$imageName";
    $post->save();
    return redirect('/');
});
