<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    @livewireStyles
</head>

<body>

    <div class="font-sans antialiased">





        <!-- component -->
        <div>

            <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
                <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
                    class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

                <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
                    class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">
                    <div class="flex items-center justify-center mt-8">
                        <div class="flex items-center">

                            <span class="mx-2 text-2xl font-semibold text-white"></span>
                        </div>
                    </div>

                    <x-navbar-dashboard />
                </div>

                <div class="flex flex-col flex-1 overflow-hidden">
                    <header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-gray-600">
                        <div class="flex items-center">
                            <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>


                        </div>

                        <div class="flex items-center">


                            <div x-data="{ dropdownOpen: false }" class="relative">
                                <button @click="dropdownOpen = ! dropdownOpen"
                                    class="relative block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none">
                                    <img class="object-cover w-full h-full" src="{{ asset('images/avatar.png') }}"
                                        alt="Your avatar">
                                </button>

                                <div x-show="dropdownOpen" @click="dropdownOpen = false"
                                    class="fixed inset-0 z-10 w-full h-full" style="display: none;"></div>

                                <div x-show="dropdownOpen"
                                    class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl"
                                    style="display: none;">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Crear
                                        Clases</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Modificar
                                        Docentes</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
                                </div>
                            </div>
                        </div>
                    </header>

                    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 mt-10">
                        {{ $slot }}

                    </main>
                </div>
            </div>
        </div>



    </div>

    @livewireScripts




    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/@lottiefiles/lottie-player@0.4.0/dist/lottie-player.js"></script>

</body>

</html>
