<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-semibold mb-6">Mensajes Recibidos</h1>

        <!-- Tabla de mensajes -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-b">Email</th>
                        <th class="px-4 py-2 border-b">Asunto</th>
                        <th class="px-4 py-2 border-b">Mensaje</th>
                        <th class="px-4 py-2 border-b">Fecha</th>
                        <th class="px-4 py-2 border-b">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $message)
                        <tr>
                            <td class="px-4 py-2 border-b">{{ $message->email }}</td>
                            <td class="px-4 py-2 border-b">{{ $message->subject }}</td>
                            <td class="px-4 py-2 border-b">{{ Str::limit($message->message, 50) }}</td>
                            <td class="px-4 py-2 border-b">{{ $message->created_at->format('d/m/Y H:i') }}</td>
                            <td class="px-4 py-2 border-b flex space-x-2">
                                <!-- Botón para ver -->
                                <a href="{{ route('messages.show', $message->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Ver</a>

                                <!-- Botón para eliminar -->
                                <form action="{{ route('messages.destroy', $message->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este mensaje?');">
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

        <!-- Paginación -->
        <div class="mt-4">
            {{ $messages->links() }}
        </div>
    </div>
</x-app-layout>
