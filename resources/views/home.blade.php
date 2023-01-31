<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    @vite('resources/js/app.js')

    <title>Document</title>
</head>
<body>
    <h1 class="container text-center">Dc Comics</h1>
    @yield("content")
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary m-auto" href="{{route('comics.index')}}">
            &#8962;
        </a>
    </div>
</body>
</html>