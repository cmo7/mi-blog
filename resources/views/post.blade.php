<!-- Página de categoría
 Utiliza el layout principal y en el slot inserta:

    * Header principal
    * Wrapper formado por dos divs con las clases main e inner
    * H1 con el título de la página (nombre del post individual)
    * un div info con los datos del usuario
    * El contenido del post, sin escapar -->

<x-layout>

    <x-main-header />

    <div id="main">
        <div class="inner">
            <article>
                <h1>{{ $post->title }}</h1>
                <span class="image main"><img src="{{ $post->image }}" alt="" /></span>
                <div class="info">
                    Escrito por <a href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a>
                    en <a href="{{ '/category/' . $post->category->slug }}">{{ $post->category->name }}</a>
                </div>
                <div>
                    {!! $post->content !!} {{-- Si usamos esta sintaxis el contenido se trata como html sin mas --}}
                </div>
            </article>
        </div>
    </div>
</x-layout>
