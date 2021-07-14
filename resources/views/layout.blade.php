<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <header>
        <nav>
                <span class="brand">{{ config('app.name') }}</span>
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="">Categorías</a></li>
                <li><a href="">Contacto</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
    <footer>
        Copyright 2021
    </footer>
</body>

</html>
