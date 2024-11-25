<x-guest-layout>
    <div class="bg-gray-100 min-h-screen p-4 mt-10">
        <div class="container mx-auto pt-12 pb-20">
            <!-- Título y descripción -->
            <div class="container mx-auto px-6 flex justify-center items-center">
                <span class="text-center   text-6xl   font-custom abajo bg-amber-500 text-white  font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-red-700 mb-5 ">Clases</span>
            </div>
            <p class="text-gray-700 text-lg text-center mb-12">
                Bienvenidos a las clases de danza de <strong>Laura Fidalgo</strong>, donde la pasión y la técnica se
                encuentran. Explora nuestras propuestas y descubre la clase ideal para llevar tu danza al siguiente
                nivel.
            </p>
            <!-- Grid de Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                @foreach ($clases as $clase)
                    <div
                        class="relative flex flex-col justify-between bg-white shadow-sm border border-slate-200 rounded-lg w-full p-6 min-h-[300px]">
                        <!-- Título e Ícono -->
                        <div>
                            <div class="flex items-center justify-center mb-4">
                                <img src="{{ asset('images/iconos/calendario.svg') }}" alt="Calendario" class="w-6 h-6">
                                <h5 class="ml-3 text-slate-800 text-xl font-semibold">
                                    {{ $clase->nombre }}
                                </h5>
                            </div>

                            <!-- Descripción -->
                            <p class="block text-center text-slate-600 leading-normal font-light mb-4">
                                {{ $clase->descripcion }}
                            </p>
                        </div>
                        <!-- Docente y Horario (siempre al final) -->
                        <div class="mt-4">
                            <p class="text-sm text-center font-semibold text-slate-500 uppercase">
                                Docente: {{ $clase->docente }}
                            </p>
                            <p class="text-base mt-2 font-light text-center">
                                <span
                                    class="bg-red-500 text-white text-sm sm:text-xs font-medium px-2 py-1 rounded-full">
                                    Horario: {{ $clase->horario }}
                                </span>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-guest-layout>
