<nav class="bg-red-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="/" class="text-white text-xl font-semibold flex justify-center items-center w-full md:w-auto">
            <img src="{{asset('images/firmablanco.png')}}" alt="" class="h-12 w-auto">
        </a>
        <!-- Botón para desplegar el menú en móvil -->
        <button class="md:hidden text-white focus:outline-none" id="menu-button">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>
    <!-- Menú desplegable en móvil -->
    <div class="md:hidden hidden flex-col space-y-4 mt-4 text-center" id="menu">
        <a href="/" class="text-white hover:text-gray-300 block">Inicio</a>
        <a href="/" class="text-white hover:text-gray-300 block">Nosotros</a>
        <a href="/" class="text-white hover:text-gray-300 block">Laura Fidalgo</a>
        <a href="/about" class="text-white hover:text-gray-300 block">Clases</a>
        <a href="/contact" class="text-white hover:text-gray-300 block">Docentes</a>
    </div>
</nav>

<script>
    // Script para abrir y cerrar el menú en versión móvil
    document.getElementById('menu-button').addEventListener('click', function () {
        var menu = document.getElementById('menu');
        menu.classList.toggle('hidden');
    });
</script>
