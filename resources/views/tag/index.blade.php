<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tight text-dino-500">
            {{ __('Les Tags') }}
        </h2>
    </x-slot>

    <div class="container px-5 pt-12 pb-24 mx-auto">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @each('tag.card-index', $tags, 'tag')
        </div>
    </div>
</x-app-layout>
