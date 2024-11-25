<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado del Blog</h1>
    @foreach ($posts as $post)
    <p>
        <strom>{{$post['id']}}</strom>
        <a href="">
            {{$post['title']}}
        </a>
    </p>
    @end foreach
</body>
</html>
