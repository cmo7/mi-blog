<x-layout>

    <x-interior-header />

    <div id="main">
        <div class="inner">
            <article>
                <h1>{{ $post->title }}</h1>
                <span class="image main"><img src="/images/{{ $post->image }}" alt="" /></span>
                <div class="info">
                    Escrito por <a href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a>
                    en <a href="{{ '/category/' . $post->category->slug }}">{{ $post->category->name }}</a>
                </div>
                <div>
                    {!! $post->content !!}
                </div>
            </article>
        </div>
    </div>
</x-layout>
