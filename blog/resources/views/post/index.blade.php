<x-app-layout>
<style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            color: #45a049;
        }

        /* Estilos para botones de acción */
        .actions a {
            margin-right: 10px;
            padding: 5px 10px;
            border: 1px solid #4CAF50;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .actions a:hover {
            background-color: #4CAF50;
            color: white;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: white;
        }
    </style>

    <div>
        <div class="create">
            <a href="{{ route('post.create') }}">Crear usuario</a>
        </div>

        <h1>Post - This is the posts page</h1>

        <table>
            <thead>
                <th>Post ID</th>
                <th>Post Title</th>
                <th>Post Content</th>
                <th>Category</th>
                <th>Post Date</th>
                <th>Activity</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <!-- "{{ route('post.show', $post->id) }}" (ruta con nombre) === post/{{$post->id}} -->
                        <td><a href=" {{ route('post.show', $post->id) }} ">{{ $post->title }}</a></td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->category }}</td>
                        <td>{{ $post->published_at }}</td>
                        <td>{{ $post->is_active ? 'SI' : 'NO' }}</td>
                        <td>
                        <!-- post/{{$post->id}}/edit === {{ route('post.update', $post->id) }}  -->
                            <a href=" {{ route('post.update', $post->id) }} ">Edit</a>
                            <!-- postDelete/{{$post->id}} === {{ route('postDelete.postDelete', $post->id) }} -->
                            <form action="{{ route('postDelete.postDelete', $post->id) }}" method="post">
                                @csrf
                                @method('Delete')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- para paginacion  -->
        {{ $posts->links() }}
    </div>
</x-app-layout>
