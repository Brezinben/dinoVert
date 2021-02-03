<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tight text-dino-500">
            {{ __($post->title) }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-16 mb-32 text-center">
        <img
            class="object-cover w-3/4 mx-auto -mb-24 rounded-lg shadow-lg xl:max-h-80 max-h-44 md:max-h-64 lg:max-h-72 "
            src="{{$post->imageUrl}}"
            alt=""/>
        <div class="px-8 pt-32 pb-10 bg-white rounded-lg shadow-lg">
            {!!$post->wysiwyg_text!!}
        </div>
    </div>
</x-app-layout>

