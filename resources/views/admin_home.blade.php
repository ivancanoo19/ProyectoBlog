<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        <a href="{{ route('posts.create') }}">Crear Publicación | </a>
        <a href="{{ route('extras.musica') }}"> Música |</a>
        <a href="{{ route('posts.nacionales') }}"> Nacionales |</a>
        <a href="{{ route('posts.internacionales') }}"> Internacionales |</a>
        <a href="{{ route('posts.index') }}"> Lista publicaciones |</a>
        
    </h2>
        
    </x-slot>

    

</x-app-layout>