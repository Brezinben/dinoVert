<x-app-layout>
    <x-slot name="header">
        <h2 class="header-title">
            {{ __($post->title) }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-8 mb-32 text-center">
        <span class="mb-4 inline-flex  justify-center items-center py-1 px-2 mr-2 text-lg font-bold leading-none rounded-full
                                            @if($post->category->title == "Maison individuelle") text-blue-50 bg-blue-600
                                            @elseif($post->category->title == "Appartement") text-green-50 bg-green-600
                                            @elseif($post->category->title == "Enclos à dinosaure") text-gray-50  bg-dino-600
                                            @else text-gray-200 bg-gray-600
                                            @endif() "
        >{{$post->category->title}}</span>
        <img
            class="object-cover w-3/4 mx-auto -mb-24 rounded-lg shadow-lg xl:max-h-80 max-h-44 md:max-h-64 lg:max-h-72 "
            src="{{$post->imageUrl}}"
            alt=""/>
        <div class="px-8 pt-32 pb-10 bg-white dark:bg-gray-900 dark:text-gray-50 rounded-lg shadow-lg">
            {!!$post->wysiwyg_text!!}
        </div>
        <div class="mt-4 flex flex-nowrap justify-start items-center overflow-hidden">
            @foreach($post->tags as $tag)
                @if ($loop->index===10)
                    @break
                @endif
                <div
                    class="text-md mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 dark:bg-gray-900 dark:text-gray-100 dark:hover:bg-punch-500 duration-150 rounded-2xl">
                    <a href="{{route('tags.show',compact('tag'))}}">
                        {{$tag->title}}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>

