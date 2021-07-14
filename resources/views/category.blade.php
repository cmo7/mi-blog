@extends('layout')
@section('content')
    <h1>{{ $category->name }}</h1>
    @foreach ($category->posts as $post)
        <article>
            <h2><a href="{{ '/post/' . $post->slug }}">{{ $post->title }}</a></h2>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
@endsection
