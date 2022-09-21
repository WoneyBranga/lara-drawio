<x-app-layout>
    <style type="text/css">
        html,
        body,
        iframe {
            background-color: #ffffff;
            border: 0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%
        }
    </style>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{-- {{ __('Dashboard') }} --}}
            Piloto Geração de Topologias
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}

                @livewire('topologias')
            </div>
        </div>
    </div>

</x-app-layout>
