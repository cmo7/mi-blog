<!-- Página de categoría
 Utiliza el layout principal y en el slot inserta:

    * Header principal
    * Wrapper formado por dos divs con las clases main e inner
    * H1 con el título de la página (nombre de categoría)
    * Un componente tile-grid para contener los posts de la categoría -->
<x-layout>
    <x-main-header />
    <div id="main">
        <div class="inner">
            <h1>{{ $category->name }}</h1>
            <x-tile-grid :posts="$category->posts" />
        </div>
    </div>
</x-layout>
