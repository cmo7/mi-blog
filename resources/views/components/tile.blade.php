<!-- Tile es un componente diseñado para ser utilizado para listar posts.
Su usuo principal es como uno de los elementos de tile-grid

Incluye un título con etiqueta h2, una imágen de fondo, un extracto del post
y un link a la página del post completo. 

En esta versión la imagen utiliza url absoluta, no relativa, así que puede
utilizar imágenes en otros servidores -->

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