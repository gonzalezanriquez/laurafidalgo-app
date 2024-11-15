<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles --> 
    <style>
        @font-face {
            font-family: 'laura';
            src: url('{{ asset('fonts/laura.ttf') }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        body {
        font-family: 'Poppins', sans-serif;
    }

    </style>
    @livewireStyles
</head>

<body class=" font-sans text-white bg-black ">
    
    <x-navbar />
    <div class="  font-sans text-white">

        
        {{ $slot }}
    </div>

    @livewireScripts



  
    <x-footer/> 
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/@lottiefiles/lottie-player@0.4.0/dist/lottie-player.js"></script>

</body>

</html>
