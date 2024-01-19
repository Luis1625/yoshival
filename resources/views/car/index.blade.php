<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modulo Autos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @if (session('status'))
                        {{session('status')}}
                    @endif

                    <a href="{{ route('car.create') }}" class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"> Registrar Auto</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Modelo</th>
                                <th>Placa</th>
                                <th>VIM</th>
                                <th>Flota</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cars as $c)
                            <tr>
                                <td>{{$c->id}}</td>
                                <td>{{$c->modelo}}</td>
                                <td>{{$c->placa}}</td>
                                <td>{{$c->vim}}</td>
                                <td>{{$c->flota}}</td>
                                <td>
                                    @if ($c->estado == 0)
                                        <a class="flex-shrink-0 bg-green-500 py-1 px-3 rounded"></a>
                                    @elseif($c->estado == 1)
                                        <a class="flex-shrink-0 bg-yellow-500 py-1 px-3 rounded"></a>         
                                    @elseif($c->estado == 2)
                                        <a class="flex-shrink-0 bg-red-500 py-1 px-3 rounded"></a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('car.edit',$c) }}"> Editar</a>
                                    <form action="{{ route('car.destroy',$c) }}" method="post">
                                        @method("DELETE")
                                        @csrf
                                        <button>Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$cars->links()}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>