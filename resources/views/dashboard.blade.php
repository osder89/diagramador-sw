@php
    $imageUrl = asset('imagen/Diagramadesecuencia.png');
@endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PRESENTACION') }}
            <div class="container mx-auto py-10 text-center">
                <h1 class="text-3xl font-semibold mb-4">Diagrama de Secuencia ONICHAN2</h1>
                <img src="{{ $imageUrl }}" alt="Mi Imagen" class="mx-auto mb-6 max-w-lg rounded shadow-lg">
                {{-- <img src="https://www.cybermedian.com/es/wp-content/uploads/sites/8/2022/01/0ExDfaS6ZvBM17fl9.png" alt="Diagrama de Secuencia" class="mx-auto mb-6 max-w-lg rounded shadow-lg"> --}}
                <p class="text-lg text-gray-700 ">En esta página, podrás realizar diagramas de secuencias y exportarlos como código</p>
                <p class="text-lg text-gray-700 mt-4">¡Comienza a crear y visualizar tus diagramas de secuencia de manera sencilla y eficiente!</p>
                <a href={{ route('diagramador.index') }} class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-6 inline-block">Comenzar</a>
            </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-welcome /> --}}

            </div>
        </div>
    </div>
</x-app-layout>
