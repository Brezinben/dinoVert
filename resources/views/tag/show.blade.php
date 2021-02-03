<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tight text-dino-500">
            {{ __('Le Tag : '.$tag->title) }}
        </h2>
    </x-slot>

    <div class="container px-5 pt-2 pb-24 mx-auto">
        <div class="p-4 md:w-full">
            <div
                class="flex flex-col p-8 bg-white border-2 border-gray-200 border-opacity-50 rounded-lg shadow-lg sm:flex-row">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-16 h-16 mb-4 bg-green-100 rounded-full sm:mr-8 sm:mb-0 text-dino-500">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                    </svg>
                </div>
                <div class="flex-grow">
                    <h2 class="mb-3 text-2xl font-medium text-gray-900 title-font">{{$tag->title}}</h2>
                    <p class="text-base leading-relaxed">{{$tag->description}}</p>
                    <a class="inline-flex items-center mt-3 text-dino-500">Liste des Actualitées lié à ce tag
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4 mt-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @each('tag.card-post',$tag->posts,'post',)
        </div>
    </div>
</x-app-layout>
