<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function getPosts(Request $request)
    {
        $search = $request->input('search');
        $posts = Post::query()
            ->where('title', 'LIKE', '%' . $search . '%')
            ->orWhere('content', 'LIKE', '%' . $search . '%')
            ->get();

        return view('portada', [
            "posts" => $posts->sortByDesc('created_at'),
        ]);
    }

    public function getPostBySlug($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('post', [
            "post" => $post,
        ]);
    }

    public function newPostForm()
    {
        return view('new-post', [
            "categories" => \App\Models\Category::all(),
        ]);
    }

    public function newPost(Request $request)
    {

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
    }
}
