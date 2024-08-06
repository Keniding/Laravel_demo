<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravek 11 - Post</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-2xl mx-auto px-4">
        <h1>Post - This is the posts page</h1>

        <x-alert type="warning">
            <x-slot name="title">
                Titulo/post
            </x-slot>
            Contenido de la alerta variable, post
        </x-alert>
    </div>
</body>
</html>
