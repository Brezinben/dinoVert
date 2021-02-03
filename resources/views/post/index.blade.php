<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tight text-dino-500">
            {{ __('Les dernières Actualitées') }}
        </h2>
    </x-slot>
    <div class="container px-5 pt-12 pb-24 mx-auto">
        <div class="flex flex-col -my-8 divide-y-2 divide-gray-100 space-y-9">
            @each('post.card-index',$posts,'post')
        </div>
    </div>
</x-app-layout>
