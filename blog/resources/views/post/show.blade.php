<x-app-layout>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f5;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        h1 {
            color: #4CAF50;
            text-align: center;
            margin-bottom: 20px;
            font-size: 2.5em;
            text-transform: uppercase;
        }

        .prueba, .contenido, a {
            background-color: #ffffff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .prueba p, .contenido p {
            font-size: 1.2em;
            line-height: 1.5;
        }

        .contenido h1 {
            font-size: 2em;
            color: #333;
            margin-top: 0;
        }

        .contenido p {
            margin: 10px 0;
        }

        .prueba p {
            color: #555;
            font-weight: bold;
        }

        /* Estilos específicos para el contenido condicionado */
        .prueba p, a {
            color: #ff5722;
        }

        .contenido p span {
            font-weight: bold;
            color: #4CAF50;
        }
    </style>

    <a href="../posts">Volver</a>

    <h1>Post - This is the post with id: {{ $id }}</h1>

    <div class="prueba">
        @if ($id > 2)
            <p>Contenido condicionado True, id > 2</p>
        @else
            <p>Contenido condicionado False, id < 2</p>
        @endif
    </div>

    <div class="contenido">
        <p>TITLE: <span>{{$post->title}}</span></p>
        <p>CATEGORY: <span>{{$post->category}}</span></p>
        <p>CONTENT: <span>{{$post->content}}</span></p>
        <p>ACTIVE: <span>{{$post->is_active ? 'SI' : 'NO'}}</span></p>
        <p>PUBLISHED: <span>{{$post->published_at}}</span></p>
    </div>
</x-app-layout>
