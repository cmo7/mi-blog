<!-- Página de categoría
 Utiliza el layout principal y en el slot inserta:

    * Header principal
    * Wrapper formado por dos divs con las clases main e inner
    * Encabezado especial de la portada
    * Un componente tile-grid con los posts del blog-->
<x-layout>

    <!-- Header -->
    <x-main-header />

    <!-- Main -->
    <div id="main">
        <div class="inner">
            <header>
                <h1>Este es nuestro blog de ejemplo</a>.</h1>
                <p>Lo hemos construido utilizando <a href="https://laravel.com">Laravel</a></p>
            </header>
            <x-tile-grid :posts="$posts" />
        </div>
    </div>
</x-layout>
