<!-- tile-grid es un componente que dibuja una rejilla de losetas o tiles,
    definidas en el componente tiles.

    Puede dibujar cualquier número de losetas, pero está diseñado para usar
    múltiplos de 3 -->

@props(['posts'])

<section class="tiles">
    @foreach ($posts as $post)
        <x-tile :post="$post" />
    @endforeach
</section>
