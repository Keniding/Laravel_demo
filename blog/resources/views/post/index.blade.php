@extends('layout.app')

<!-- section for yield -->
<!-- En una sola linea -->
 <!-- Contenido variable unico -->
@section('title', 'Laravel 11 - Post Dinamic')

<!-- push for stack  -->
<!-- diff con section: push se van sumando -->
@push('css')
    <style>
        body {
            background-color: #f2f2f2;
        }
    </style>
@endpush

@section('content')
    <div class="max-w-2xl mx-auto px-4">
        <h1>Post - This is the posts page</h1>

        <x-alert type="warning">
            <x-slot name="title">
                Titulo/post
            </x-slot>
            Contenido de la alerta variable, post
        </x-alert>
    </div>
@endsection

@push('css')
    <style>
        body {
            color: orange;
        }
    </style>
@endpush


