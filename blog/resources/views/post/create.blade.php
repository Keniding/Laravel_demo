<x-app-layout>
    <style>
        .container-form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .container-form h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #4CAF50;
            outline: none;
        }

        .btn-primary, a {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #45a049;
        }
    </style>

    <div class="max-w-2xl mx-auto px-4">
        <h1>Post - This is the create post page</h1>

        <x-alert-depende type="danger" class="mb-4">
            <x-slot name="title">
                Titulo/home
            </x-slot>
            Contenido de la alerta variable, home
        </x-alert-depende>
        <p>Hello world</p>
    </div>

    <div class="container-form">
        <a href="{{ route('posts.index') }}">Volver</a>
        <form action="{{ route('postStore.store') }}" method="POST">

            @csrf

            <!-- Campo para el título -->
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>

            <!-- Campo para el contenido -->
            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" class="form-control" rows="5" required></textarea>
            </div>

            <!-- Campo para la categoría -->
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" id="category" name="category" class="form-control" required>
            </div>

            <!-- Campo para la fecha de publicación -->
            <!-- <div class="form-group">
                <label for="published_at">Published At</label>
                <input type="datetime-local" id="published_at" name="published_at" class="form-control" required>
            </div> -->

            <!-- Campo para el estado activo -->
            <!-- <div class="form-group">
                <label for="is_active">Is Active</label>
                <select id="is_active" name="is_active" class="form-control" required>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div> -->

            <!-- Botón para enviar el formulario -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</x-app-layout>
