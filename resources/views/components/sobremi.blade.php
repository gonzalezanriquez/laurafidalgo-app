<section class="container mx-auto px-6">
    <div class="relative h-96 rounded-md overflow-hidden">
        <!-- Video -->
        <video class="absolute top-0 left-0 w-full h-full object-cover object-top" autoplay loop muted playsinline>
            <source src="{{ asset('images/videos/laura.webm') }}" type="video/webm">
            Tu navegador no soporta la reproducción de video.
        </video>
        <!-- Overlay -->
        <div class="absolute top-0 left-0 w-full h-full bg-gray-900 bg-opacity-40"></div>
        <!-- Content -->
        <div class="relative flex items-center justify-center h-full">
            <div class="px-10 max-w-xl text-center">
                <div class="container mx-auto px-6 flex justify-center items-center">
                    <span class="text-center font-bold text-white text-2xl sm:text-3xl md:text-6xl font-custom abajo bg-amber-500 text-amber-500 font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-amber-500 text-white">
                        Sobre Mi
                    </span>
                </div>
                <!-- SVG con hover -->
                <a href="{{ route('sobremi.show') }}" class="inline-block mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mx-auto fill-white hover:fill-amber-500 transition-transform duration-300 transform hover:scale-110" viewBox="0 0 24 24" fill-rule="evenodd" clip-rule="evenodd">
                        <path d="M12 0c-6.623 0-12 5.377-12 12s5.377 12 12 12 12-5.377 12-12-5.377-12-12-12zm0 1c-6.071 0-11 4.929-11 11s4.929 11 11 11 11-4.929 11-11-4.929-11-11-11zm4.828 11.5l-4.608 3.763.679.737 6.101-5-6.112-5-.666.753 4.604 3.747h-11.826v1h11.828z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

