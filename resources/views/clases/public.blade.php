<x-guest-layout>
    <div class="bg-gray-100 min-h-screen p-4 mt-10">
        <div class="container mx-auto pt-12 pb-20">
            <h1 class="text-4xl font-bold text-gray-800 text-center mb-8">
                Nuestras Clases
            </h1>
            <p class="text-gray-700 text-lg text-center mb-12">
                Bienvenidos a las clases de danza de <strong>Laura Fidalgo</strong>, donde la pasión y la técnica se encuentran. Explora nuestras propuestas y descubre la clase ideal para llevar tu danza al siguiente nivel.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 ">
                @foreach ($clases as $clase)
                    <div class="flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg my-6 duration-500 hover:scale-105 hover:shadow-xl">
                        <div class="m-2.5 overflow-hidden rounded-md h-80 flex justify-center items-center">
                            <img class=" h-full object-cover" src="{{asset('images/logonuevolfcolorbgnegro.png')}}" alt="{{ $clase->nombre }}">
                        </div>
                        <div class="p-6 text-center">
                            <h4 class="mb-1 text-xl font-semibold text-slate-800">
                                {{ $clase->nombre }}
                            </h4>
                            <p class="text-sm font-semibold text-slate-500 uppercase">
                                Docente: {{ $clase->docente }}
                            </p>
                            <p class="text-sm  text-black pt-5 ">
                                {{ $clase->descripcion }}
                            </p>
                            <p class="text-base sm:text-xs mt-4 font-light">
                                <span class="bg-red-500 text-white text-sm sm:text-xs font-medium px-2 py-1 rounded-full">
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
