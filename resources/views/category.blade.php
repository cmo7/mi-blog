<x-layout>
    <x-interior-header />
    <div id="main">
        <div class="inner">
            <h1>{{ $category->name }}</h1>
            <x-tile-grid :posts="$category->posts" />
        </div>
    </div>
</x-layout>
