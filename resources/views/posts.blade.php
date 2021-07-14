@extends ('layout')

@section ('content')
    @foreach($posts as $post)
    <article>
        <h2><a href="{{'/post/' . $post->slug}}">{{$post->title}}</a></h2>
        <div class="category">
            <a href="{{'/category/' . $post->category->slug}}">{{$post->category->name}}</a>
        </div>
        <div>
            {{$post->excerpt}}
        </div>
    </article>
    @endforeach
@endsection