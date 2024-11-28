<section class="relative h-screen flex flex-col items-center justify-center text-center text-white py-0 px-3 mt-10">
  <!-- Video Background -->
  <div class="video-docker absolute top-0 left-0 w-full h-full overflow-hidden">
      <video 
          class="absolute top-0 left-0 w-full h-full object-cover"
          src="{{ asset('images/videos/inicio.webm') }}"
          autoplay muted loop>
      </video>
      <!-- Overlay -->
      <div class="absolute top-0 left-0 w-full h-full bg-black opacity-30"></div>
  </div>

  <!-- Content -->
  <div class="video-content space-y-2 relative z-10 px-4">
    <div class="flex justify-center sm:justify-start">
      <img src="{{ asset('images/firma/blanca.png') }}" 
           alt="Firma Laura Fidalgo"
           class="mt-3 max-w-full sm:max-w-md block mx-auto animate__animated animate__fadeInUp">
    </div>
  </div>
</section>
