<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nuevo Ingreso') }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (session('status'))
                        {{session('status')}}
                    @endif
                    @include('fragment._erros-form')
                    
                    <form class="w-full" action="{{route('ingreso.store')}}" method="post">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            @include('ingreso._form')
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>

</x-app-layout>