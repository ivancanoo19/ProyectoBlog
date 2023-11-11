<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear Publicación') }}
        </h2>
    </x-slot>

    <div class="flex items-center justify-center h-screen">
        <div class="max-w-md mx-auto">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf   
                    <div class="mb-4">
                        <label for="titulo" class="block text-sm font-medium text-dark dark:text-white">Título:</label>
                        <input type="text" name="titulo" id="titulo" class="form-input w-full" required>
                    </div>

                    <div class="mb-4">
                        <label for="descripcion" class="block text-sm font-medium text-dark dark:text-white">Descripción:</label>
                        <textarea name="descripcion" id="descripcion" class="form-textarea w-full" required></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="categoria" class="block text-sm font-medium text-dark dark:text-white">Categoría:</label>
                        <select name="categoria" id="categoria" class="form-select w-full" required>
                            <option value="nacional">Nacional</option>
                            <option value="internacional">Internacional</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="imagen" class="block text-sm font-medium text-dark dark:text-white">Imagen:</label>
                        <input type="file" name="imagen" id="imagen" class="form-input w-full" accept="image/*" required>
                    </div>

                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary w-full">Confirmar Publicación</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
