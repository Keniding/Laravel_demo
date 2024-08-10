<x-app-layout>
    <style>
        .container-edit {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
        }

        .container-edit h2 {
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
            border-color: #007BFF;
            outline: none;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="container-edit">
    <a href="../../posts">Volver</a>
        <h2>Edit Post</h2>
        <form action="../../postUpdate/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <div id="id" name="id" class="form-control"">{{ $post->id }}</div>
            </div>

            <!-- Campo para el título -->
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ $post->title }}" required>
            </div>

            <!-- Campo para el contenido -->
            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" class="form-control" rows="5" required>{{ $post->content }}</textarea>
            </div>

            <!-- Campo para la categoría -->
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" id="category" name="category" class="form-control" value="{{ $post->category }}" required>
            </div>

            <!-- Campo para la fecha de publicación -->
            <div class="form-group">
                <label for="published_at">Published At</label>
                <input type="datetime-local" id="published_at" name="published_at" class="form-control" value="{{ $post->published_at->format('Y-m-d\TH:i') }}" required>
            </div>

            <!-- Campo para el estado activo -->
            <div class="form-group">
                <label for="is_active">Is Active</label>
                <select id="is_active" name="is_active" class="form-control" required>
                    <option value="1" {{ $post->is_active ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$post->is_active ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Botón para enviar el formulario -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</x-app-layout>
