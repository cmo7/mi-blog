@props(['post'])

<article class="style1">
    <span class="image">
        <img src="{{$post->image}}" alt="" />
    </span>
    <a href="/post/{{ $post->slug }}">
        <h2>{{ $post->title }}</h2>
        <div class="content">
            <p>{{$post->excerpt}}</p>
        </div>
    </a>
</article>