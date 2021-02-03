<div
    class="h-full p-4  shadow-lg bg-white bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">{{$tag->title}}</h1>
    <p class="leading-relaxed mb-3">{{Str::limit($tag->description, 100, ' (...)')}}</p>
    <div
        class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
        <a href="{{route('tags.show',compact('tag'))}}" class="text-dino-500 inline-flex items-center">Voir les
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

