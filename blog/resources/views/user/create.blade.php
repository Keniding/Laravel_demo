<x-app-layout>
    <x-create-css></x-create-css>

    <div class="container-form">

        <div class="back">
            <a href="{{ route('user.index') }}">Volver</a>
        </div>

        <form action="{{ route('user.store') }}" method="POST">

            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" id="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</x-app-layout>
