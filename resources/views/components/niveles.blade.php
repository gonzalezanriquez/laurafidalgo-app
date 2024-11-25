<section class="my-8">
    <div class="container mx-auto px-6">
 
            <div class="container mx-auto px-6 flex justify-center items-center">
                <span class="text-center font-bold text-white text-6xl   font-custom abajo bg-red-500 text-red-800 text-2xl font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-red-700 text-white ">Clases</span>
            </div>
            
            

        <div class="md:flex mt-8 md:-mx-4 space-y-8 md:space-y-0"> 

            <a href="{{route('clases.public')}}">
            <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-top md:w-1/2 duration-500 hover:scale-105 izquierda"
                style="background-image: url('{{ asset('images/galeria/7.jpg') }}') ">
                <div class="bg-black bg-opacity-30 flex items-center h-full">
                    <div class="px-10 max-w-xl">
                        
                        <h2 class="text-3xl md:text-5xl text-white font-semibold ">Niños
                        </h2>
                        
                            <button class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                            <span>Ver mas</span>
                            <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </a>
            </div>

            <a href="{{route('clases.public')}}">
            <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-top md:w-1/2 duration-500 hover:scale-105 abajo"
                style="background-image: url('{{ asset('images/galeria/2.jpg') }}') ">
                <div class="bg-black bg-opacity-30 flex items-center h-full">
                    <div class="px-10 max-w-xl">
                        <h2 class="text-3xl md:text-5xl text-white font-semibold ">Adulto y Adolescentes</h2>
                        <button
                            class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                            <span>Ver mas</span>
                            <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>       
            </a>
            </div>

          
        </div>

    </div>
</section>
{{-- <div class="container mx-auto px-4">
    <div class="grid grid-cols-2 gap-4">
        <div class="h-64">
            <h3 class="z-10 mt-3 text-3xl font-bold text-white">Paris</h3>
            <img class="w-full h-full object-cover rounded-lg" src="{{ asset('images/galeria/7.jpg') }}" alt="">
        </div>
        <div class="h-64">
            <img class="w-full h-full object-cover rounded-lg" src="{{ asset('images/galeria/2.jpg') }}" alt="">
        </div>
    
    </div>
</div> --}}



</div>

