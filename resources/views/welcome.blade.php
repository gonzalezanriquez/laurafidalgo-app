<x-guest-layout>



    <main class="flex flex-col items-center ">



        <section class="overflow-hidden py-20 sm:py-32 lg:pb-32 xl:pb-36">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="lg:grid lg:grid-cols-12 lg:gap-x-8 lg:gap-y-20">
                    <div class="relative z-10 mx-auto max-w-2xl lg:col-span-7 lg:max-w-none lg:pt-6 xl:col-span-6">
                        <h1 class="text-center sm:text-right text-md sm:text-xl font-bold">Estudio de Arte y Danza</h1>

                        <div class="flex justify-center sm:justify-end">
                            <img src="{{ asset('images/firma.png') }}" alt="Firma Laura Fidalgo" class="mt-3 block mx-auto sm:mx-0">
                        </div>

                        <p class="mt-2 text-lg text-amber-600 font-bold text-center sm:text-end text-sm">
                            Profesion - Pasion - Voluntad - Disciplina - Amor
                        </p>
                        <p class="mt-6 text-lg text-gray-600 text-center sm:text-end">
                            Subite a la nave del arte. Saná, liberá angustias y depresión. Aprendé de cero. Para todas las edades. No necesitas conocimientos previos. Solo necesitas ganas y voluntad.
                        </p>
                        
                    </div>

                    <div class="relative mt-10 sm:mt-20 lg:col-span-5 lg:row-span-2 lg:mt-0 xl:col-span-6">
                        <div class="absolute left-1/2 top-4 h-[1026px] w-[1026px] -translate-x-1/3 stroke-gray-300/70 [mask-image:linear-gradient(to_bottom,white_20%,transparent_75%)] sm:top-16 sm:-translate-x-1/2 lg:-top-16 lg:ml-12 xl:-top-14 xl:ml-0">
                            <svg viewBox="0 0 1026 1026" fill="none" aria-hidden="true" class="absolute inset-0 h-full w-full animate-spin-slow">
                                <path d="M1025 513c0 282.77-229.23 512-512 512S1 795.77 1 513 230.23 1 513 1s512 229.23 512 512Z" stroke="#D4D4D4" stroke-opacity="0.7"></path>
                                <path d="M513 1025C230.23 1025 1 795.77 1 513" stroke="url(#:R65m:-gradient-1)" stroke-linecap="round"></path>
                                <defs>
                                    <linearGradient id=":R65m:-gradient-1" x1="1" y1="513" x2="1"
                                        y2="1025" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#06b6d4"></stop>
                                        <stop offset="1" stop-color="#06b6d4" stop-opacity="0"></stop>
                                    </linearGradient>
                                </defs>
                            </svg><svg viewBox="0 0 1026 1026" fill="none" aria-hidden="true"
                                class="absolute inset-0 h-full w-full animate-spin-reverse-slower">
                                <path
                                    d="M913 513c0 220.914-179.086 400-400 400S113 733.914 113 513s179.086-400 400-400 400 179.086 400 400Z"
                                    stroke="#D4D4D4" stroke-opacity="0.7"></path>
                                <path d="M913 513c0 220.914-179.086 400-400 400" stroke="url(#:R65m:-gradient-2)"
                                    stroke-linecap="round"></path>
                                <defs>
                                    <linearGradient id=":R65m:-gradient-2" x1="913" y1="513" x2="913"
                                        y2="913" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#06b6d4"></stop>
                                        <stop offset="1" stop-color="#06b6d4" stop-opacity="0"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <!-- Video -->
                        <video autoplay loop muted playsinline class="object-cover object-center w-full h-auto rounded-xl">
                            <source src="{{ asset('images/institucional.webm') }}" type="video/webm">
                        </video>
                    </div>

                </div>
            </div>
        </section>


{{-- 

        <div class="text-center">
            <h1 class="text-md sm:text-4xl font-bold">Estudio de Arte y Danza</h1>
            <img src="{{ asset('images/firma.png') }}" alt="Firma Laura Fidalgo" class="mx-auto">
        </div>


        <section class="w-full sm:w-1/2 relative">
            <video autoplay loop muted playsinline class="object-cover object-center w-full h-auto rounded-xl">
                <source src="{{ asset('images/institucional.webm') }}" type="video/webm">
            </video>
            <div class="absolute inset-0 bg-black opacity-30 rounded-xl"></div>
        </section>
        <section class="m-8">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <!-- Imagen 1: Ocupa dos filas y una columna en pantallas grandes -->
                <div class="sm:row-span-2 sm:col-span-1">
                    <img src="{{ asset('images/estudio.jpg') }}" alt="Imagen 1"
                        class="w-full h-full object-cover rounded-xl">
                </div>

                <!-- Imagen 2: Ocupa fila 1 y columna 2 en pantallas grandes -->
                <div class="sm:col-span-1 sm:row-span-1">
                    <img src="{{ asset('images/estudio.jpg') }}" alt="Imagen 2"
                        class="w-full h-full object-cover rounded-xl">
                </div>

                <!-- Imagen 3: Ocupa fila 1 y columna 3 en pantallas grandes -->
                <div class="sm:col-span-1 sm:row-span-1">
                    <img src="{{ asset('images/estudio.jpg') }}" alt="Imagen 3"
                        class="w-full h-full object-cover rounded-xl">
                </div>

                <!-- Imagen 4: Ocupa fila 2 y columnas 2 y 3 en pantallas grandes -->
                <div class="sm:col-span-2 sm:row-span-1">
                    <img src="{{ asset('images/estudio.jpg') }}" alt="Imagen 4"
                        class="w-full h-full object-cover rounded-xl">
                </div>
            </div>
        </section>


        <section class="w-full sm:w-1/2">
            <div class="text-center">
                <p>sdsdfsdf</p>
            </div>
        </section> --}}
    </main>
</x-guest-layout>
