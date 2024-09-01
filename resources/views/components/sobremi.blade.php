<section class="container mx-auto px-6">
    <div class="relative h-96 rounded-md overflow-hidden">
        <video class="absolute top-0 left-0 w-full h-full object-cover objet-top" autoplay loop muted playsinline>
            <source src="{{ asset('images/soylaura.webm') }}" type="video/webm">
            Tu navegador no soporta la reproducción de video.
        </video>
        <div class="relative bg-gray-900 bg-opacity-10 flex items-center h-full justify-center">
            
            <div class="px-10 max-w-xl text-center">
                <h2 class="text-8xl text-white font-semibold font-custom">Sobre mí</h2>
                <button
                    class="flex justify-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                    <span class="ml-auto">Ver más</span>
                    <svg class="h-5 w-5 ml-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </button>
            </div>
            
        </div>
    </div>
</section>
