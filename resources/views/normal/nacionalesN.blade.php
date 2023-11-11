<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="{{ route('user.home') }}"> Inicio |</a>
            <a href="{{ route('normal.musicaN') }}"> Música |</a>
            <a href="{{ route('normal.nacionalesN') }}"> Nacionales |</a>
            <a href="{{ route('normal.internacionalesN') }}"> Internacionales |</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl font-semibold mb-4">Publicaciones Nacionales</h2>
                    @foreach($publicacionesN as $publicacion)
                        <div class="mb-4">
                            <h3 class="text-lg font-semibold">
                                <a href="{{ route('normal.showN', ['id' => $publicacion->id]) }}">
                                    {{ $publicacion->titulo }}
                                </a>
                            </h3>
                            <p class="text-sm">Publicado por: {{ $publicacion->user->name }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
