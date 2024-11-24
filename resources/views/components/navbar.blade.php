<nav class="fixed w-full top-0 left-0 z-30 bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <!-- Mobile menu button -->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button
                    @click="isOpen = !isOpen"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu"
                    aria-expanded="false"
                >
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>

            <!-- Logo -->
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-center">
                <div class="flex shrink-0 items-center mx-5">
                    <a href="/"><img class="h-10 w-auto" src="{{ asset('images/navbar/logo.svg') }}" alt="Logo Studio Laura Fidalgo"></a>
                </div>

                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <a href="/" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Inicio</a>
                        <a href="{{ route('docentes.public') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Docentes</a>
                        <a href="{{ route('clases.public') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Clases</a>
                        <a href="{{ route('sobremi.show') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Sobre Mi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-data="{ isOpen: false }" class="sm:hidden">
        <div x-show="isOpen" id="mobile-menu" class="space-y-1 px-2 pt-2 pb-3">
            <a href="/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Inicio</a>
            <a href="{{ route('docentes.public') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Docentes</a>
            <a href="{{ route('clases.public') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Clases</a>
            <a href="{{ route('sobremi.show') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Sobre Mi</a>
        </div>
    </div>
</nav>
