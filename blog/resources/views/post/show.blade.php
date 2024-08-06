<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11 - Post</title>
</head>
<body>
    <h1>Post - This is the post with id: {{ $id }}</h1>

    @if ($id > 2)
        <p>Contenido condicionado True, id > 2</p>
    @else
        <p>Contenido condicionado False, id < 2</p>
    @endif
</body>
</html>
