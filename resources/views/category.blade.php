<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name') . " - " . $category->name}}</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <h1>{{$category->name}}</h1>
    @foreach($category->posts as $post)
    <article>
        <h2><a href="{{'/post/' . $post->slug}}">{{$post->title}}</a></h2>
        <div>
            {{$post->excerpt}}
        </div>
    </article>
    @endforeach
</body>

</html>