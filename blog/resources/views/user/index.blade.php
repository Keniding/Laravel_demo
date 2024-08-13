<x-app-layout>
    <x-index-css></x-index-css>

    <div>
        <div class="create">
            <a href="{{ route('user.create') }}">Crear usuario</a>
        </div>

        <h1>Post - This is the User page</h1>

        <table>
            <thead>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Pasword</th>
                <th>Verification</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <!-- {{ route('user.show', $user->id) }} inferencia de identificador/biding -->
                        <td><a href=" {{ route('user.show', $user) }} ">{{ $user->name }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->email_verified_at }}</td>
                        <td>
                        <!-- {{ route('user.edit', $user->id) }} inferencia de identificador/biding -->
                            <a href="{{ route('user.edit', $user) }}">Edit</a>
                            <!-- {{ route('user.destroy', $user->id) }} inferencia de identificador/biding -->
                            <form action="{{ route('user.destroy', $user) }}" method="post">
                                @csrf
                                @method('Delete')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $users->links() }}
    </div>
</x-app-layout>
