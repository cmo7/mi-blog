@props(['posts'])

<section class="tiles">
    @foreach ($posts as $post)
        <x-tile :post="$post" />
    @endforeach
</section>
