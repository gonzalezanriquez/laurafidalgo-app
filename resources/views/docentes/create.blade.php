<x-app-layout>

<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-6">Crear Docente</h1>
    <form action="{{ route('docentes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="border border-gray-300 p-2 w-full rounded" value="{{ old('nombre') }}" required>
            @error('nombre')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="apellido" class="block text-sm font-medium text-gray-700">Apellido</label>
            <input type="text" name="apellido" id="apellido" class="border border-gray-300 p-2 w-full rounded" value="{{ old('apellido') }}" required>
            @error('apellido')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="horarios" class="block text-sm font-medium text-gray-700">Horarios</label>
            <textarea name="horarios" id="horarios" class="border border-gray-300 p-2 w-full rounded" required>{{ old('horarios') }}</textarea>
            @error('horarios')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="foto" class="block text-sm font-medium text-gray-700">Foto (opcional)</label>
            <input type="file" name="foto" id="foto" class="border border-gray-300 p-2 w-full rounded">
            @error('foto')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="cv" class="block text-sm font-medium text-gray-700">CV (PDF, opcional)</label>
            <input type="file" name="cv" id="cv" class="border border-gray-300 p-2 w-full rounded">
            @error('cv')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
        </div>
    </form>
</div>
</x-app-layout>

