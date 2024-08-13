<x-app-layout>
    <x-edit-css></x-edit-css>

    <div class="container-edit">
    <a href="{{ route('user.index') }}">Volver</a>
        <h2>Edit Post</h2>
        <!-- {{ route('user.update', $user->id) }} -->
        <form action="{{ route('user.update', $user) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <div id="id" name="id" class="form-control"">{{ $user->id }}</div>
            </div>

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" value="{{ $user->password }}" required>
            </div>

            <div class="form-group">
                <label for="email">Password</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" required>
            </div>

            <div class="form-group">
                Verifiqued: <div id="email_verified_at" name="email_verified_at" class="form-control"">{{ $user->email_verified_at }}</div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</x-app-layout>
