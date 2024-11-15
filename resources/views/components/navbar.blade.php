<div x-data="{ open: false, scrolled: false }" 
     class=" bg-red-600 fixed w-full top-0 left-0 z-30 transition-colors duration-300">
    <div class="flex flex-col w-full px-8 py-5 mx-auto md:px-12 md:items-center md:justify-between md:flex-row lg:px-32 max-w-7xl bg-shaddow">
        <div class="flex flex-row items-center justify-between text-white">
            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}" class="hidden antialiased font-sans leading-relaxed flex-col items-center flex-grow gap-8 p-4 text-sm font-medium text-gray-500 md:flex md:justify-center md:flex-row md:gap-6 lg:p-0 md:mt-0 text-white">
            <a class="hover:text-white focus:outline-none focus:text-amber-400" href="/">INICIO</a>
            <p class="hover:text-white focus:outline-none focus:text-amber-400" >|</p>
            <a class="hover:text-white focus:outline-none focus:text-amber-400" href="{{route('docentes.public')}}">DOCENTES</a>
            <p class="hover:text-white focus:outline-none focus:text-amber-400" >|</p>
            <a class="hover:text-white focus:outline-none focus:text-amber-400" href="{{route('clases.public')}}">CLASES</a>
            <p class="hover:text-white focus:outline-none focus:text-amber-400" >|</p>
            <a class="hover:text-white focus:outline-none focus:text-amber-400" href="{{route('laura')}}"> SOBRE MI</a>
        </nav>
    </div>
</div>
