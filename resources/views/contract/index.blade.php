<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modulo Contratos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @if (session('status'))
                        {{session('status')}}
                    @endif

                    <a href="{{ route('contract.create') }}" class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"> Nuevo Contrato</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Carro</th>
                                <th>Cliente</th>
                                <th>Monto</th>
                                <th>Nro Cuotas</th>
                                <th>Cuota</th>
                                <th>Inicio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contracts as $c)
                            <tr>
                                <td>{{$c->id}}</td>
                                <td>{{$c->carro}}</td>
                                <td>{{$c->cliente}}</td>
                                <td>{{$c->monto}}</td>
                                <td>{{$c->cuotas}}</td>
                                <td>{{$c->monto_cuota}}</td>
                                <td>{{$c->fec_ini}}</td>
                                <td>
                                    <a href="{{ route('contract.edit',$c) }}"> Editar</a>
                                    <form action="{{ route('contract.destroy',$c) }}" method="post">
                                        @method("DELETE")
                                        @csrf
                                        <button>Cancelar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$contracts->links()}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>