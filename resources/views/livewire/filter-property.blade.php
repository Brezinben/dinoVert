<div class="container my-5 mx-auto ">
    <input type="text"
           wire:model="query"
           wire:keydown.enter="search()"
           class=" rounded-lg  border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
           placeholder="Votre recherche"/>
    <div class="my-5">
        <span
            class="inline-flex items-center justify-center  cursor-pointer px-2 py-1 my-2 text-xs font-bold leading-none text-gray-200 bg-gray-600 rounded-full"
            wire:click="resetFilter()"
        >All</span>
        @foreach($types as $type)
            <span
                @if($type->title == "Maison individuelle")
                class="inline-flex items-center justify-center cursor-pointer  px-2 py-1 my-2 text-xs font-bold leading-none bg-blue-600 rounded-full text-gray-50"
                @elseif($type->title == "Appartement")
                class="inline-flex items-center justify-center cursor-pointer  px-2 py-1 my-2 text-xs font-bold leading-none bg-green-600 rounded-full text-gray-50"
                @elseif($type->title == "Enclos à dinosaure")
                class="inline-flex items-center justify-center cursor-pointer  px-2 py-1 my-2 text-xs font-bold leading-none rounded-full text-gray-50 bg-dino-600"
                @else
                class="inline-flex items-center justify-center  cursor-pointer px-2 py-1 my-2 text-xs font-bold leading-none text-gray-200 bg-gray-600 rounded-full"
                @endif()
                wire:click="filterType({{$type}})"
            >{{$type->title}}</span>
        @endforeach
    </div>
    <div class="grid grid-cols-1 gap-4 mx-auto xl:grid-cols-3 md:grid-cols-2 md:gap-3">
        @foreach($filtered as $property)
            <div class="flex max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <div class="w-1/3 bg-cover"
                     style="background-image: url('{{$property->images[0]->url}}')"
                     title="{{$property->images[0]->alternative}}"
                ></div>

                <div class="w-2/3 p-4 md:p-4">
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-white">{{Str::limit($property->title, 30, ' ...')}}</h1>

                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{Str::limit($property->description, 70, ' ...')}}</p>

                    <span
                        @if($property->type->title == "Maison individuelle")
                        class="inline-flex items-center justify-center px-2 py-1 my-2 text-xs font-bold leading-none bg-blue-600 rounded-full text-gray-50"
                        @elseif($property->type->title == "Appartement")
                        class="inline-flex items-center justify-center px-2 py-1 my-2 text-xs font-bold leading-none bg-green-600 rounded-full text-gray-50"
                        @elseif($property->type->title == "Enclos à dinosaure")
                        class="inline-flex items-center justify-center px-2 py-1 my-2 text-xs font-bold leading-none rounded-full text-gray-50 bg-dino-600"
                        @else
                        class="inline-flex items-center justify-center px-2 py-1 my-2 text-xs font-bold leading-none text-gray-200 bg-gray-600 rounded-full"
                        @endif()
                        >{{$property->type->title}}</span>

                    <div class="flex justify-between mt-1 item-center">
                        <h1 class="text-lg font-bold text-gray-700 dark:text-gray-200 md:text-xl">{{number_format($property->price, 0, ',', ' ')." €"}}</h1>
                        <a
                            href="{{route("properties.show",['property'=>$property])}}"
                            class="inline-flex items-center h-8 px-5 space-x-2 text-white transition-colors duration-150 rounded-lg bg-dino-700 focus:shadow-outline hover:bg-dino-800">
                            <span>Voir</span>
                            <svg class="w-6 h-6" data-darkreader-inline-fill="" data-darkreader-inline-stroke=""
                                 fill="none" stroke="currentColor"
                                 style="--darkreader-inline-fill:none; --darkreader-inline-stroke:currentColor;"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>