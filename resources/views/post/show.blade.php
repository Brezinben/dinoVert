<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tight text-dino-500">
            {{ __($post->title) }}
        </h2>
    </x-slot>
    <div class="container text-center  mx-auto mt-16 mb-32">
        <img
            class="xl:max-h-80 w-3/4 max-h-44 md:max-h-64 lg:max-h-72 rounded-lg mx-auto -mb-24 object-cover shadow-lg "
            src="{{$post->imageUrl}}"
            alt=""/>
        <div class="bg-white shadow-lg rounded-lg px-8 pt-32 pb-10">
            {!!$post->wysiwyg_text!!}
        </div>
    </div>
</x-app-layout>

