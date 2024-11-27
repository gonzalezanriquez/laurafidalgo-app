<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-semibold mb-6">Detalles del Mensaje</h1>

        <div class="bg-white shadow-md rounded-lg p-6">
            <p><strong>Email:</strong> {{ $message->email }}</p>
            <p><strong>Asunto:</strong> {{ $message->subject }}</p>
            <p><strong>Mensaje:</strong></p>
            <p class="mt-2">{{ $message->message }}</p>
            <p class="mt-4 text-sm text-gray-500"><strong>Enviado el:</strong> {{ $message->created_at->format('d/m/Y H:i') }}</p>
        </div>

        <div class="mt-4">
            <a href="{{ route('messages.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-gray-700">Volver</a>
        </div>
    </div>
</x-app-layout>
