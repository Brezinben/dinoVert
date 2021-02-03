<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tight text-dino-500">
            {{ __('Les Tags') }}
        </h2>
    </x-slot>

    <div class="container pt-12 pb-24 px-5 mx-auto">
        <div class="grid grid-cols-3 gap-8">
            @each('tag.card-index', $tags, 'tag')
        </div>
    </div>
</x-app-layout>
