<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modulo Ingresos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @if (session('status'))
                        {{session('status')}}
                    @endif

                    <a href="{{ route('ingreso.create') }}" class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"> Nuevo Ingreso</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Fecha</th>
                                <th>Cliente</th>
                                <th>Placa</th>
                                <th>Banco</th>
                                <th>Nro. Operación</th>
                                <th>Monto</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ingresos as $i)
                            <tr>
                                <td>{{$i->id}}</td>
                                <td>{{$i->fecha}}</td>
                                <td>{{$i->cliente}}</td>
                                <td>{{$i->carro}}</td>
                                <td>{{$i->banco}}</td>
                                <td>{{$i->nro_ope}}</td>
                                <td>{{$i->monto}}</td>
                                <td>{{$i->descripcion}}</td>
                                <td>
                                    <a href="{{ route('contract.edit',$i) }}"> Editar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    {{$ingresos->links()}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>