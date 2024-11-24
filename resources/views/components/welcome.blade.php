

<div class="p-6 lg:p-8 bg-white border-b border-gray-200 flex items-center">
    <!-- Logo -->
    <div class="flex-shrink-0">
        <img src="{{ asset('images/logonuevolfcolorbgnegro.png') }}" alt="Logo de Laura Fidalgo" class="block h-[20rem] w-auto">
    </div>

    <!-- Texto de bienvenida -->
    <div class="ml-8">
        <h1 class="text-2xl font-medium text-gray-900">
            ¡Te damos la bienvenida al panel de administración de Clases de Danza de Laura Fidalgo!
        </h1>

        <p class="mt-6 text-gray-500 leading-relaxed">
            Este sistema ofrece un entorno moderno, intuitivo y potente para facilitar la gestión de tus clases de danza. Está diseñado para que disfrutes cada paso del proceso, permitiéndote enfocarte en lo que realmente importa: inspirar a tus alumnos y compartir tu pasión por la danza. Queremos que esta plataforma sea una herramienta confiable y dinámica que simplifique tus tareas diarias, para que puedas dedicar más tiempo a lo que amas.
            Esperamos que disfrutes cada momento usando esta plataforma. ¡Que comience el baile!
        </p>
    </div>
</div>
<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a href="{{route('clases.index')}}">Clases</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
En esta seccion podras agregar, editar o eliminar las clases del estudio para que se vean reflejadas para tus alumnos        </p>

      
    </div>

    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
            </svg>
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a href="{{route('docentes.index')}}">Docentes</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            En esta seccion podras agregar, editar o eliminar los docentes del estudio para que se vean reflejadas para tus alumnos        
        </p>

        
    </div>



</div>
