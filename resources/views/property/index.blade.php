<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tight text-dino-500">
            {{ __('Les biens à vendre') }}
        </h2>
    </x-slot>
    @livewire('filter-property', ['properties' => $properties])
</x-app-layout>
