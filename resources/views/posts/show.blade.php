<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="{{ route('admin.home') }}"> Inicio |</a>
            <a href="{{ route('posts.create') }}">Crear Publicación |</a>
            <a href="{{ route('extras.musica') }}"> Música |</a>
            <a href="{{ route('posts.nacionales') }}"> Nacionales |</a>
            <a href="{{ route('posts.internacionales') }}"> Internacionales |</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl font-semibold mb-4">{{ $publicacion->titulo }}</h2>
                    <p class="text-sm">Publicado por: {{ $publicacion->user->name }}</p>
                    <p class="text-sm">{{ $publicacion->descripcion }}</p>
                    <img src="{{ asset('./public/imagenes/' . $publicacion->imagen) }}" class="img-fluid" alt="{{ $publicacion->titulo }}">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
