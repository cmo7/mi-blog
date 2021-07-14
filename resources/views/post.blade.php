@extends ('layout')
@section('content')

    <article>
        <h2>{{ $post->title }}</h2>
        <div class="info">
            Escrito por <a href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a>
            en <a href="{{ '/category/' . $post->category->slug }}">{{ $post->category->name }}</a>
        </div>
        <div>
            {{ $post->content }}
        </div>
    </article>
    <a href="/">Volver al inicio</a>

@endsection
