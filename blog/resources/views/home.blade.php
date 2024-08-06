<x-app-layout>

    <x-slot name="title">
        Home title laravel component
    </x-slot>

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
</x-app-layout>
