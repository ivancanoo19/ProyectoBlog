<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear Publicación') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <h2 class="text-2xl font-semibold mb-4">Crear Publicación</h2>
                        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="titulo" class="form-label text-dark dark:text-white">Título:</label>
                                <input type="text" name="titulo" id="titulo" class="form-control bg-white text-black rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>

                            <div class="mb-3">
                                <label for="descripcion" class="form-label text-dark dark:text-white">Descripción:</label>
                                <textarea name="descripcion" id="descripcion" class="form-control bg-white text-black rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="categoria" class="form-label text-dark dark:text-white">Categoría:</label>
                                <select name="categoria" id="categoria" class="form-select bg-white text-black rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                    <option value="nacional">Nacional</option>
                                    <option value="internacional">Internacional</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="imagen" class="form-label text-dark dark:text-white">Imagen:</label>
                                <input type="file" name="imagen" id="imagen" class="form-control-file" accept="image/*" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Crear Publicación</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>