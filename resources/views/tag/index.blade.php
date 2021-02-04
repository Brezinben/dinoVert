<x-app-layout>
    <x-slot name="header">
        <h2 class="header-title">
            {{ __('Les Tags') }}
        </h2>
    </x-slot>

    <div class="container px-5 pt-12 pb-14 mx-auto">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @each('tag.card-index', $tags, 'tag')
        </div>
        <div class="mt-16 ">
            {{ $tags ->links('pagination') }}
        </div>
    </div>
</x-app-layout>
