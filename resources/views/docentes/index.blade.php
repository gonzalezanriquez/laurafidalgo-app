<!-- resources/views/docentes/index.blade.php -->
<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-semibold mb-6">Listado de Docentes</h1>
        
        <!-- Botón para crear nuevo docente -->
        <div class="flex justify-end mb-4">
            <a href="{{ route('docentes.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">
                Crear Nuevo Docente
            </a>
        </div>
        
        <!-- Tabla de docentes -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-b">Nombre</th>
                        <th class="px-4 py-2 border-b">Apellido</th>
                        <th class="px-4 py-2 border-b">Horarios</th>
                        <th class="px-4 py-2 border-b">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($docentes as $docente)
                        <tr>
                            <td class="px-4 py-2 border-b">{{ $docente->nombre }}</td>
                            <td class="px-4 py-2 border-b">{{ $docente->apellido }}</td>
                            <td class="px-4 py-2 border-b">{{ $docente->horarios }}</td>
                            <td class="px-4 py-2 border-b flex space-x-2">
                                <!-- Botón para editar -->
                                <a href="{{ route('docentes.edit', $docente->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Editar</a>
                                
                                <!-- Formulario para eliminar -->
                                <form action="{{ route('docentes.destroy', $docente->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este docente?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
