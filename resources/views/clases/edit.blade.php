<x-app-layout>
    <section class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white p-8 rounded shadow-lg w-full max-w-lg">
            <h1 class="text-2xl font-semibold mb-6">Editar Clase</h1>
            
            <!-- Formulario para editar la clase -->
            <form action="{{ route('clases.update', $clase->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <!-- Nombre de la clase -->
                <div class="mb-4">
                    <label for="nombre" class=" text-sm font-medium text-gray-700">Nombre de la clase</label>
                    <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $clase->nombre) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                
                <!-- Descripción -->
                <div class="mb-4">
                    <label for="descripcion" class=" text-sm font-medium text-gray-700">Descripción</label>
                    <textarea name="descripcion" id="descripcion" rows="4" class="mt-1  w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>{{ old('descripcion', $clase->descripcion) }}</textarea>
                </div>

                <!-- Docente -->
                <div class="mb-4">
                    <label for="docente" class=" text-sm font-medium text-gray-700">Docente</label>
                    <input type="text" name="docente" id="docente" value="{{ old('docente', $clase->docente) }}" class="mt-1  w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Horario -->
                <div class="mb-4">
                    <label for="horario" class=" text-sm font-medium text-gray-700">Horario</label>
                    <input type="text" name="horario" id="horario" value="{{ old('horario', $clase->horario) }}" class="mt-1  w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                
                <div class="flex justify-end">
                    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">
                        Actualizar
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>
