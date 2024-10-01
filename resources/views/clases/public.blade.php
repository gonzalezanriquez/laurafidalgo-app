<x-guest-layout>
    <div class="bg-gray-100 min-h-screen p-4 mt-20">
        <div class="container mx-auto pt-12 pb-20">
            <h1 class="text-4xl font-bold text-gray-800 text-center mb-8">
                Nuestras Clases
            </h1>
            <p class="text-gray-700 text-lg text-center mb-12">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet magna id ex hendrerit semper.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($clases as $clase)
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">{{ $clase->nombre }}</h2>
                        <p class="text-gray-700">
                            Horario: {{ $clase->horario }}
                        </p>
                        <p class="text-gray-700">
                            Docente: {{ $clase->docente }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-guest-layout>
