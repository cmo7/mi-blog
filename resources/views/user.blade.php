<x-layout>
    <x-interior-header />

    <div id="main">
        <div class="inner">
            <h1>{{ $user->name }}</h1>
            <a href="mailto:{{ $user->email }}">email</a>
            Miembro desde: {{$user->created_at->locale('es')->diffForHumans()}}
            <x-tile-grid :posts="$user->posts" />
        </div>
    </div>

</x-layout>