<x-app-layout>
    <x-slot name="header">
        <h2 class="header-title">
            {{ __('Les biens à vendre') }}
        </h2>
    </x-slot>
    @livewire('filter-property', ['properties' => $properties])
</x-app-layout>
