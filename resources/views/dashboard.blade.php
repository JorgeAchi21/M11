<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Welcome... {{auth()->user()->name}}<br>
                    You have logged in.
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <br>
                    <a href="{{route('home')}}" class="text-indigo-700 btn btn btn-primary">Regresar al home...</a>
                    <br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
