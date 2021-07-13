<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name') . " - Posts"}}</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<!-- por aqui encima está todo lo del head -->

<body>
    @foreach($posts as $post)
    <article>
        <h2><a href="{{'/post/' . $post->slug}}">{{$post->title}}</a></h2>
        <div class="category">
            <a href="{{'/category/' . $post->category->slug}}">{{$post->category->name}}</a>
        </div>
        <div>
            {{$post->excerpt}}
        </div>
    </article>
    @endforeach
</body>

</html>