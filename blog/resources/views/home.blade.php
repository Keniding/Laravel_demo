<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-2xl mx-auto px-4">
        <h1 class="text-3xl font-bold text-gray-900 mb-4">Welcome to my page</h1>

        <!-- Call components alert -->
        <x-alert type="info" class="mb-4">
            <x-slot name="title">
                Titulo/home
            </x-slot>
            Contenido de la alerta variable, home
        </x-alert>
        <p>Hello world</p>
    </div>

</body>
</html>
