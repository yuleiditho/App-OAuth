<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <div class=" overflow-hidde sm:rounded-lg flex items-center  shadow-md rounded-lg p-6">
             
                <img src="{{ Auth::user()->avatar }}" alt="Foto de perfil"
                    class="w-16 h-16 rounded-full border-2">

                <div>
                    <h2 class="text-xl font-semibold text-white sm:px-6">
                        {{ Auth::user()->name }}
                    </h2>
                    <p class="text-sm text-gray-600 sm:px-6">
                        {{ Auth::user()->email }}
                    </p>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>