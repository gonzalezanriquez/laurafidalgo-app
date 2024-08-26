<section class="container mx-auto px-6">
    <div class="relative h-96 rounded-md overflow-hidden">
        <!-- Video Background -->
        <video class="absolute top-0 left-0 w-full h-full object-cover" autoplay loop muted playsinline>
            <source src="{{ asset('images/soylaura.webm') }}" type="video/webm">
            Tu navegador no soporta la reproducción de video.
        </video>
        <!-- Overlay and Content -->
        <div class="relative bg-gray-900 bg-opacity-10 flex items-center h-full">
            <div class="px-10 max-w-xl">
                <h2 class="text-6xl text-white font-semibold font-custom ">Sobre mi</h2>
                {{-- <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p> --}}
                <button class="flex items-center mt-4 px-3 py-2 bg-amber-500 text-white text-sm uppercase font-medium rounded hover:bg-amber-600 focus:outline-none focus:bg-amber-600">
                    <span>Shop Now</span>
                    <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </button>
            </div>
        </div>
    </div>
</section>
