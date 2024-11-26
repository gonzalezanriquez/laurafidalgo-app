<section class="relative h-screen flex flex-col items-center justify-center text-center text-white py-0 px-3 mt-10">
  <!-- Video Background -->
  <div class="video-docker absolute top-0 left-0 w-full h-full overflow-hidden" style="transform: translate3d(0, 0, 0); will-change: transform;">
      <video class="min-w-full min-h-full absolute object-cover" 
             src="{{ asset('images/videos/inicio.webm') }}" 
             type="video/mp4" autoplay muted loop>
      </video>
      <!-- Overlay -->
      <div class="absolute top-0 left-0 w-full h-full bg-black opacity-10"></div>
  </div>

  <!-- Content -->
  <div class="video-content space-y-2 relative z-10">
    <div class="flex justify-center sm:justify-left">
      <img src="{{ asset('images/firma/blanca.png') }}" 
           alt="Firma Laura Fidalgo"
           class="mt-3 block mx-auto sm:mx-0 animate__animated animate__fadeInUp">
    </div>
  </div>
</section>



