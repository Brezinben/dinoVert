<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tight text-dino-500">
            {{ __('Les dernieres Actualitées') }}
        </h2>
    </x-slot>


    <div class="container pt-12 pb-24 px-5 mx-auto">
        <div class="flex flex-col -my-8 space-y-9 divide-y-2 divide-gray-100">
            @foreach($posts as $post)
                <div class="flex flex-wrap py-8 px-5 text-gray-500 bg-white rounded-2xl shadow md:flex-nowrap">
                    <div
                        class="flex overflow-hidden flex-col flex-shrink-0 mb-6 w-full max-h-44 md:w-56 md:mr-5 md:mb-0 md:max-h-72 lg:max-h-44">
                        <img src="{{$post->imageUrl}}"
                             class="object-cover shadow-lg w-full h-full rounded-t-md md:rounded-2xl"
                             alt="">
                    </div>
                    <div class="md:flex-grow">
                        <h2 class="mb-2 text-2xl font-medium text-gray-900 title-font">{{Str::limit($post->title, 100, ' (...)')}}</h2>
                        <p class="leading-relaxed">{{Str::limit($post->wysiwyg_text, 250, ' (...)')}}</p>
                        <div class="flex justify-between justify-around items-center mt-4">
                            <a href="{{route('posts.show',['post'=> $post])}}"
                               class="inline-flex items-center duration-150 cursor-pointer text-punch-400 hover:text-punch-500">Voir
                                l'actu
                                <svg class="ml-2 w-4 h-4" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <div class="flex flex-col-reverse flex-shrink-0 mb-6  md:mb-0">
                                <span class="font-semibold text-dino-700 title-font">{{$post->category->title}}</span>
                                <span
                                    class="mt-1 text-sm text-gray-500">{{ date('d M y', strtotime($post->created_at)) }} </span>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-app-layout>
