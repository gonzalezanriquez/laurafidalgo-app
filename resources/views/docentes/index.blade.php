
<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-semibold mb-6">Docentes</h1>
        <div class="mt-6">
            <a href="{{ route('docentes.create') }}" class="bg-green-500 text-white px-4 py-2  rounded">Crear Docente</a>
        </div>
        
        <!-- Tabla de docentes -->
        <div class="overflow-x-auto mt-5">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-b">Nombre</th>
                        <th class="px-4 py-2 border-b">Disciplina</th>
                        <th class="px-4 py-2 border-b">Foto</th>
                        <th class="px-4 py-2 border-b">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($docentes as $docente)
                        <tr>
                            <td class="px-4 py-2 border-b">{{ $docente->nombre }}</td>
                            <td class="px-4 py-2 border-b">{{ $docente->disciplina }}</td>
                            <td class="px-4 py-2 border-b">
                                <img src="{{ $docente->foto ? asset('storage/' . $docente->foto) : asset('images/default-photo.jpg') }}" alt="Foto" class="w-12 h-12 rounded-full">
                            </td>
                            <td class="px-4 py-2 border-b">

                                <a href="{{ route('docentes.edit', $docente) }}" class="text-yellow-600 ml-4">Editar</a>
                                <form action="{{ route('docentes.destroy', $docente) }}" method="POST" class="inline-block ml-4">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Paginación -->
        <div class="mt-4">
            {{ $docentes->links() }}
        </div>

     
    </div>
</x-app-layout>
