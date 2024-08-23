{{-- <nav class="bg-red-800 px-10 py-3">
    <div class="flex items-center justify-between">
      <a class="text-2xl leading-none text-gray-600" href="#">
        <a href="/" class="text-white text-xl font-semibold flex justify-center items-center w-full md:w-auto">
            <img src="{{asset('images/logoestudio.png')}}" alt="" class="h-12 w-auto">
        </a>
      </a>
      <div class="lg:hidden">
        <button class="navbar-burger block text-gray-500 hover:text-gray-700 focus:outline-none">
          <svg class="h-4 w-4" fill="currentColor " viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
          </svg>
        </button>
      </div>
      <ul class="ml-auto mr-10 hidden w-auto items-center space-x-6 lg:flex">
        <li><a class="text-white  hover:text-amber-500  " href="#">Inicio</a></li>
        <li><a class="text-white  hover:text-amber-500  " href="#">Clases</a></li>
        <li><a class="text-white  hover:text-amber-500  " href="#">Laura Fidalgo</a></li>
        <li><a class="text-white  hover:text-amber-500  " href="#">Docentes</a></li>
      </ul>
    </div>
    <div class="navbar-menu fixed bottom-0 left-0 top-0 z-50 hidden w-5/6 max-w-sm">
      <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
      <nav class="relative flex h-full w-full flex-col overflow-y-auto border-r bg-white px-6 py-6">
        <div class="mb-8 flex items-center">
          <a class="mr-auto text-2xl font-semibold leading-none" href="#">
            <img class="h-8" src="https://shuffle.dev/mockup-assets/logos/shuffle-ux.svg" alt="" width="auto" />
          </a>

        </div>
        <div>
          <ul>
            <li class="mb-1"><a class="block rounded p-4 text-sm font-semibold text-gray-900 hover:bg-gray-50" href="#">About</a></li>
            <li class="mb-1"><a class="block rounded p-4 text-sm font-semibold text-gray-900 hover:bg-gray-50" href="#">Company</a></li>
            <li class="mb-1"><a class="block rounded p-4 text-sm font-semibold text-gray-900 hover:bg-gray-50" href="#">Services</a></li>
            <li class="mb-1"><a class="block rounded p-4 text-sm font-semibold text-gray-900 hover:bg-gray-50" href="#">Testimonials</a></li>
          </ul>
        </div>
        <div class="mt-auto">
          <div class="pt-6"><a class="mb-3 block rounded border border-gray-100 px-6 py-2 text-center text-sm font-bold leading-loose text-gray-500 hover:border-gray-200 hover:text-gray-600" href="#">Sign In</a><a class="mb-2 block rounded border border-gray-100 px-6 py-2 text-center text-sm font-bold leading-loose text-gray-500 hover:border-gray-200 hover:text-gray-600" href="#">Sign Up</a></div>
          <p class="mb-4 mt-6 text-center text-sm text-gray-400">
            <span>© 2021 All rights reserved.</span>
          </p>
        </div>
      </nav>
    </div>
  </nav>

  <script>
    // Selecciona el botón de la hamburguesa y el menú desplegable
    const burger = document.querySelector('.navbar-burger');
    const menu = document.querySelector('.navbar-menu');
    const close = document.querySelector('.navbar-close');
    const backdrop = document.querySelector('.navbar-backdrop');

    // Función para abrir el menú
    burger.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    // Función para cerrar el menú al hacer clic en el botón de cerrar
    close.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    // Función para cerrar el menú al hacer clic en el backdrop (fondo oscuro)
    backdrop.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script> --}}

<div class="justify-center w-full mx-auto bg-red-800 ">
    <div x-data="{ open: false }" class="flex flex-col w-full px-8 py-2 mx-auto md:px-12 md:items-center md:justify-between md:flex-row lg:px-32 max-w-7xl">
      <div class="flex flex-row items-center justify-between text-white">
        <a class="inline-flex items-center gap-3 text-xl font-bold tracking-tight text-white" href="/">
            <img src="{{asset('images/logoestudio.png')}}" alt="" class="h-12 w-auto">
        </a>
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
          <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <nav :class="{'flex': open, 'hidden': !open}" class="flex-col items-center flex-grow gap-3 p-4 px-5 text-sm font-medium text-gray-500 md:px-0 md:pb-0 md:flex md:justify-start md:flex-row lg:p-0 md:mt-0 hidden text-white">
        <a class="hover:text-white focus:outline-none focus:text-amber-400 md:ml-auto" href="/">Inicio </a>
        <a class="hover:text-white focus:outline-none focus:text-amber-400" href="{{route('docentes.index')}}">Docentes</a>
        {{-- <a class="hover:text-white focus:outline-none focus:text-amber-400" href="{{route('docentes.index')}}">Clases</a> --}}
        <a class="hover:text-white focus:outline-none focus:text-amber-400" href="">Laura Fidalgo</a>


      </nav>
    </div>
  </div>
