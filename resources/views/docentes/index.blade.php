<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

<div class="text-center p-10">
    <h1 class="font-bold text-6xl mb-4 font-custom block">Docentes</h1>
</div>

<section id="Projects"
    class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">
@foreach ($docentes as $docente)
<div class="w-72 bg-slate-800 shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
    <a href="#">
        <img src="{{asset('images/docentes/Barbara Lucia 1.jpg')}}"
                alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
        <div class="px-4 py-3 w-72">
            <p class="text-lg font-bold  truncate block capitalize">{{$docente->nombre}} {{$docente->apellido}}</p>
            <span class="text-gray-400 font-bold mr-3 uppercase text-xs">{{$docente->apellido}}</span>

        </div>
    </a>
</div>
    
@endforeach
    



</section>



</x-guest-layout>
