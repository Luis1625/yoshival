<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modulo Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @if (session('status'))
                        {{session('status')}}
                    @endif

                    <a href="{{ route('customer.create') }}" class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"> Registrar Cliente</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombres</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>DNI</th>
                                <th>Direccion</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $c)
                            <tr>
                                <td>{{$c->id}}</td>
                                <td>{{$c->nombres}}</td>
                                <td>{{$c->ape_pat}}</td>
                                <td>{{$c->ape_mat}}</td>
                                <td>{{$c->doi}}</td>
                                <td>{{$c->direc}}</td>
                                <td>
                                    <a href="{{ route('customer.edit',$c) }}"> Editar</a>
                                    <form action="{{ route('customer.destroy',$c) }}" method="post">
                                        @method("DELETE")
                                        @csrf
                                        <button>Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$customers->links()}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>