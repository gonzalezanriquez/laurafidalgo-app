<x-guest-layout>
    <div class="bg-gray-100 min-h-screen p-4 mt-10">
        <div class="container mx-auto pt-12 pb-20">
            <div class="container mx-auto px-6 flex justify-center items-center">
                <span class="text-center text-6xl font-custom abajo bg-red-700 text-white font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-red-700 mb-5">Docentes</span>
            </div>
            <p class="text-gray-700 text-lg text-center mb-12">
                Conoce al equipo de profesionales liderado por <strong>Laura Fidalgo</strong>. Cada docente aporta
                experiencia y pasión para llevar la danza a nuevos niveles.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-8">
                @foreach ($docentes as $docente)
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 duration-200 hover:scale-105 hover:shadow-lg">
                        @if ($docente->foto)
                            <img class="rounded-t-lg" src="{{ asset('storage/' . $docente->foto) }}" alt="{{ $docente->nombre }}" />
                        @else
                            <img class="rounded-t-lg" src="{{ asset('images/default-avatar.jpg') }}" alt="Default Avatar" />
                        @endif
                        <p class="text-black text-center mt-5">{{ $docente->nombre }}</p>
                        <div class="p-5">

                            <div class="container mx-auto px-2 mb-2 flex justify-center items-center">
                                
                                {{-- <span class="text-center  text-md sm:text-xs font-medium  bg-red-700 text-white   me-2 px-2.5 py-0.5 rounded dark:bg-red-700  ">{{ $docente->nombre }}</span>
                            </div> --}}

                            <div class="container mx-auto px-2 flex justify-center items-center">
                                
                                <span class="text-center  text-md sm:text-xs font-medium  bg-gray-500 text-white   me-2 px-2.5 py-0.5 rounded dark:bg-red-700  ">{{ $docente->disciplina }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-guest-layout>
