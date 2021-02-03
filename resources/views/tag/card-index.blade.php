<div
    class="relative h-full p-4 px-8 pt-16 pb-24 overflow-hidden text-center bg-white dark:bg-gray-900 dark:border-gray-900 bg-opacity-75 rounded-lg shadow-lg">
    <h1 class="mb-3 text-xl font-medium text-gray-900 dark:text-gray-50 title-font sm:text-2xl">{{$tag->title}}</h1>
    <p class="mb-3  dark:text-gray-100 leading-relaxed">{{Str::limit($tag->description, 100, ' (...)')}}</p>
    <div
        class="absolute bottom-0 left-0 flex justify-center w-full py-4 mt-2 leading-none text-center">
        <a href="{{route('tags.show',compact('tag'))}}"
           class="inline-flex items-center dark:text-gray-200 text-dino-500">Voir les
            article liés
            <span
                class="text-dino-400  inline-flex items-center leading-none text-md mx-1.5 pr-3 py-1">
              <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                   xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>{{$tag->posts_count}}
            </span>
        </a>
    </div>
</div>

