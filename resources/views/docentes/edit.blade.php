<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Editar Docente</h1>

        <form action="{{ route('docentes.update', $docente->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- This method is required for updates -->

            <!-- Nombre -->
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="border border-gray-300 p-2 w-full rounded" value="{{ old('nombre', $docente->nombre) }}" required>
                @error('nombre')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Disciplina -->
            <div class="mb-4">
                <label for="disciplina" class="block text-sm font-medium text-gray-700">Disciplina</label>
                <input type="text" name="disciplina" id="disciplina" class="border border-gray-300 p-2 w-full rounded" value="{{ old('disciplina', $docente->disciplina) }}" required>
                @error('disciplina')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Foto (opcional) -->
            <div class="mb-4">
                <label for="foto" class="block text-sm font-medium text-gray-700">Foto (opcional)</label>
                <input type="file" name="foto" id="foto" class="border border-gray-300 p-2 w-full rounded">
                @error('foto')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Display current photo if it exists -->
            @if ($docente->foto)
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Foto actual</label>
                    <img src="{{ asset('storage/' . $docente->foto) }}" alt="Foto Docente" class="w-32 h-32 object-cover rounded mt-2">
                </div>
            @endif

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar cambios</button>
            </div>
        </form>
    </div>
</x-app-layout>
