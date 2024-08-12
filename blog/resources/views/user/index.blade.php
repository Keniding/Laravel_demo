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
                        <td><a href=" {{ route('user.show', $user->id) }} ">{{ $user->name }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->email_verified_at }}</td>
                        <td>
                            <a href="{{ route('user.edit', $user->id) }}">Edit</a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="post">
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
