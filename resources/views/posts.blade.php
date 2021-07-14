@extends ('layout')

@section('content')
    @foreach ($posts as $post)
        <article>
            <h2><a href="{{ '/post/' . $post->slug }}">{{ $post->title }}</a></h2>
            <div class="info">
                Escrito por <a href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a>
                en <a href="{{ '/category/' . $post->category->slug }}">{{ $post->category->name }}</a> 
                {{$post->updated_at->locale('es')->diffForHumans()}}
            </div>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
@endsection
