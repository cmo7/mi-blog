@extends ('layout')
@section('content')

    <article>
        <h2>{{ $post->title }}</h2>
        <div>
            {{ $post->content }}
        </div>
    </article>
    <a href="/">Volver al inicio</a>

@endsection
