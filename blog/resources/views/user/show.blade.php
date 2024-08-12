<x-app-layout>
    <x-show-css></x-show-css>

    <a href="{{ route('user.index') }}">Volver</a>

    <h1>Post - This is the user with id: {{ $id }}</h1>


    <div class="contenido">
        <p>TITLE: <span>{{$user->name}}</span></p>
        <p>CATEGORY: <span>{{$user->email}}</span></p>
        <p>CONTENT: <span>{{$user->password}}</span></p>
        <p>Verification: <span>{{$user->email_verified_at}}</span></p>
    </div>
</x-app-layout>
