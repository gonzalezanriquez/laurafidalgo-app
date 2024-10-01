<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-semibold mb-6">Listado de Clases</h1>
        
        <!-- Botón para crear nueva clase -->
        <div class="flex justify-end mb-4">
            <a href="{{ route('clases.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">
                Crear Nueva Clase
            </a>
        </div>
        
        <!-- Tabla de clases -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-b">Nombre</th>
                        <th class="px-4 py-2 border-b">Descripción</th>
                        <th class="px-4 py-2 border-b">Docente</th>
                        <th class="px-4 py-2 border-b">Horario</th>
                        <th class="px-4 py-2 border-b">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clases as $clase)
                        <tr>
                            <td class="px-4 py-2 border-b">{{ $clase->nombre }}</td>
                            <td class="px-4 py-2 border-b">{{ $clase->descripcion }}</td>
                            <td class="px-4 py-2 border-b">{{ $clase->docente }}</td>
                            <td class="px-4 py-2 border-b">{{ $clase->horario }}</td>
                            <td class="px-4 py-2 border-b flex space-x-2">
                                <!-- Botón para editar -->
                                <a href="{{ route('clases.edit', $clase->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Editar</a>
                                
                                <!-- Formulario para eliminar -->
                                <form action="{{ route('clases.destroy', $clase->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta clase?');">
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
