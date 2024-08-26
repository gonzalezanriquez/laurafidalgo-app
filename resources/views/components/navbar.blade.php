
<div x-data="{ open: false, scrolled: false }" 
     @scroll.window="scrolled = (window.pageYOffset > 50)" 
     :class="scrolled ? 'bg-red-800 shadow-lg' : 'bg-transparent' "
     class="fixed w-full top-0 left-0 z-30 transition-colors duration-300 ">
    <div class="flex flex-col w-full px-8 py-5 mx-auto md:px-12 md:items-center md:justify-between md:flex-row lg:px-32 max-w-7xl ">
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
            <a class="hover:text-white focus:outline-none focus:text-amber-400 md:ml-auto" href="/">INICIO</a>
            <a class="hover:text-white focus:outline-none focus:text-amber-400" href="{{route('docentes.index')}}">DOCENTES</a>
            {{-- <a class="hover:text-white focus:outline-none focus:text-amber-400" href="{{route('docentes.index')}}">Clases</a> --}}
            <a class="hover:text-white focus:outline-none focus:text-amber-400" href="#">SOBRE MI </a>
        </nav>
    </div>
</div>

