<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name') . " - " . $post->title }}</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <article>
        <h2>{{$post->title}}</h2>
        <div>
            {{$post->content}}
        </div>
    </article>
    <a href="/">Volver al inicio</a>
</body>

</html>