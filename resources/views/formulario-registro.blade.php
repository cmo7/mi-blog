<x-layout>
    <x-main-header />
    <div id="main">
        <div class="inner">
            <h1>Regístrate en mi blog</h1>
            <form action="/register" method="post">
                @csrf
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <input type="submit" value="Registrarse">
            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</x-layout>
