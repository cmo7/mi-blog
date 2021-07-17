<!-- Página de categoría
 Utiliza el layout principal y en el slot inserta:

    * Header principal
    * Wrapper formado por dos divs con las clases main e inner
    * H1 con el título de la página (nombre del usuario)
    * Un componente tile-grid para contener los posts del usuario -->

<x-layout>
    <x-main-header />

    <div id="main">
        <div class="inner">
            <h1>{{ $user->name }}</h1>
            <a href="mailto:{{ $user->email }}">email</a>
            Miembro desde: {{$user->created_at->locale('es')->diffForHumans()}}
            <x-tile-grid :posts="$user->posts" />
        </div>
    </div>

</x-layout>