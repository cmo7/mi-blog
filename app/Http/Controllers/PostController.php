<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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
}
