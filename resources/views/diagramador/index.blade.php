@extends('layouts.app') <!-- Asegúrate de que estés utilizando la plantilla de Laravel que deseas -->

@section('content')
@vite(['resources/js/diagramador.js'])
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">¡Éxito!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <title>Close</title>
                    <path
                        d="M14.293 5.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 11-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.293a1 1 0 111.414-1.414L10 8.586l4.293-4.293a1 1 0 011.414 0z" />
                </svg>
            </span>
        </div>
    @endif

    <div class="container mx-auto mt-8">
        <div class="w-full bg-white rounded-lg shadow-md p-4 m-2">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-semibold my-4">Diagramas</h1>
                <a href="{{ route('diagramador.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-4">Crear Diagrama</a>
            </div>

            <table class="min-w-full border border-collapse border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Título</th>
                        <th class="border border-gray-300 px-4 py-2">Invitados</th>
                        <th class="border border-gray-300 px-4 py-2">Autor</th>
                        <th class="border border-gray-300 px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @dd($arrayDiagramas) --}}
                    @foreach ($arrayDiagramas as $diagrama)
                        {{-- @dd($diagrama) --}}
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $diagrama['id_diagrama'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $diagrama['titulo'] }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                @foreach ($diagrama['invitados'] as $i)
                                    <p>
                                        {{ $i }}
                                    </p>
                                @endforeach
                            </td>
                            <td class="border border-gray-300 px-4 py-2">{{ $diagrama['autornombre'] }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <div class="flex items-center justify-center">
                                    <a href="{{ route('diagramador.edit', $diagrama['id_diagrama']) }}"
                                        class="text-blue-500 hover:text-blue-700 mr-2">Editar</a>
                                    <a href="{{ route('invitar', $diagrama['id_diagrama']) }}"
                                        class="text-black hover:text-blue-700 mr-2">Invitar</a>
                                    <a href="{{ route('diagramador.show', $diagrama['id_diagrama']) }}"
                                        class="text-green-500 hover:text-green-700 mr-2">Trabajar</a>
                                    <form action="{{ route('diagramador.destroy', $diagrama['id_diagrama']) }}"
                                        method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700">Eliminar</button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @if ($diagramasInvitados!=null)
    <div class="container mx-auto mt-8">
        <div class="w-full bg-white rounded-lg shadow-md p-4 m-2">
            <h1 class="text-3xl font-semibold my-4">Invitaciones</h1>
            <table class="min-w-full border border-collapse border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Título</th>
                        <th class="border border-gray-300 px-4 py-2">Autor</th>
                        <th class="border border-gray-300 px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @dd($arrayDiagramas) --}}
                    @foreach ($diagramasInvitados as $diagrama)
                        {{-- @dd($diagrama) --}}
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $diagrama['id'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $diagrama['titulo'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $diagrama['autornombre'] }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <div class="flex items-center justify-center">
                                    <a href="{{ route('diagramador.show', $diagrama['id']) }}"
                                        class="text-green-500 hover:text-green-700 mr-2">Trabajar</a>
                                    <form action="#" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700">Abandonar</button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
@endsection
