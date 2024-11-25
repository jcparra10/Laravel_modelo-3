<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <p>
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('blog')}}">Blog</a>
    </p>

    <hr>

    @yield('content')

</body>
</html>

c. Modificar el archivo home.blade.php así
@extends('template')

@section('content')

    <h1>Pagina del Home</h1>

@endsection
