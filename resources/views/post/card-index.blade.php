<div
    class="flex flex-wrap px-5 py-8 text-gray-500 bg-white dark:bg-gray-900 dark:text-gray-50 shadow  rounded-2xl md:flex-nowrap">
    <div
        class="flex flex-col flex-shrink-0 w-full mb-6 overflow-hidden max-h-44 md:w-56 md:mr-5 md:mb-0 md:max-h-72 lg:max-h-44">
        <img src="{{$post->imageUrl}}"
             class="object-cover w-full h-full shadow-lg rounded-t-md md:rounded-2xl"
             alt="">
    </div>
    <div class="w-full md:flex-grow">
        <h2 class="mb-2 text-2xl font-medium text-gray-900 dark:text-gray-100 title-font">{{Str::limit($post->title, 100, ' (...)')}}</h2>
        <p class="leading-relaxed">{{Str::limit(strip_tags($post->wysiwyg_text), 250, ' (...)')}}</p>
        <div class="flex items-center justify-between justify-around mt-4">
            <a href="{{route('posts.show',['post'=> $post])}}"
               class="inline-flex items-center duration-150 cursor-pointer focus:outline-none text-punch-400 hover:text-punch-500">Voir
                l'actu
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                </svg>
            </a>
            <div class="flex flex-col flex-shrink-0 mb-6 md:mb-0 ">
                <span
                    class="mb-2 text-sm dark:text-gray-50 text-gray-500">{{ date('d M y', strtotime($post->created_at)) }} </span>
                <x-badge-type :title="$post->category->title"></x-badge-type>
            </div>
        </div>
    </div>
</div>

