@extends('layouts.app')
@section('content')
    @vite(['resources/js/diagramador.js'])
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

            <div class="flex justify-between">
                <div class="flex space-x-4">
                   <button id="btnCargar" onclick="addNode()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Cargar
                    </button>
                    <a href="{{ route('exportarCodigoZip') }}"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Exportar Código Zip
                    </a>
                    <form id="formArchivo" method="POST" action="{{ route('exportarJson2') }}">
                        <input type="file" id="inputArchivo" />
                        <button type="submit">Exportar Json2
                        </button>
                    </form>
                    <a href="{{ route('exportarCase') }}"
                        class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                        Exportar Case
                    </a>
                    <a href="{{ route('exportarJson') }}"
                    class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                        Exportar Json
                </a>
                </div>

                <div class="flex items-center text-gray-500 text-sm">
                    @forelse ($invitadosArray as $i)
                        <span>{{ $i['invitado'] }}</span>
                    @empty
                    @endforelse
                    <span> Conectados: 4</span>
                </div>
            </div>

        </div>
    </main>
    <div id="diagramador"
        style="border: 0px solid black; width: 100%; height: 570px; position: relative; -webkit-tap-highlight-color: rgba(255, 255, 255, 0); cursor: auto;">
    </div>

    {{-- <script src="https://cdn.socket.io/4.6.0/socket.io.min.js"></script> --}}
    {{-- <script src="https://unpkg.com/gojs@2.3.11/release/go.js"></script> --}}

@endsection
