<div
    class="relative w-full max-w-xl mx-auto overflow-hidden bg-white rounded-lg shadow-lg cursor-pointer h-max">
    <div><img alt="blog photo" src="{{$post->imageUrl}}"
              class="object-cover w-full rounded-t-lg max-h-40"/></div>
    <div class="relative flex flex-col justify-between p-4 h-72 dark:bg-gray-800">
        <p class="mb-2 text-xl font-medium text-gray-800 dark:text-white">{{$post->title}}
        </p>
        <p class="font-light text-gray-400 dark:text-gray-300 text-md">
            {{Str::limit(strip_tags($post->wysiwyg_text), 250, ' (...)') }}
        </p>
        <div class="flex items-center justify-between mt-4">
            <a href="{{route('posts.show',compact(['post']))}}"
               class="inline-flex items-center ml-5 duration-150 cursor-pointer focus:outline-none text-punch-400 hover:text-punch-500">Voir
                l'actu
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
