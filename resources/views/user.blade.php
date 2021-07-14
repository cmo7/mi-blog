@extends('layout')
@section('content')
    <h1>{{ $user->name }}</h1>
    <a href="mailto:{{ $user->email }}">email</a>
    Miembro desde: {{$user->created_at->locale('es')->diffForHumans()}}
    @foreach ($user->posts as $post)
        <article>
            <h2><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
@endsection
