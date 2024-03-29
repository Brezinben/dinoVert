<div class="container mx-auto my-5">
    <input type="text"
           wire:model="query"
           wire:keydown.enter="search()"
           class="flex-1 block w-2/3 px-4 py-2 mx-auto text-base text-gray-700 placeholder-gray-400 border border-gray-300 rounded-lg shadow-sm appearance-none bg-punch-50 focus:outline-none focus:ring-2 focus:ring-punch-600 focus:border-transparent"
           placeholder="Votre recherche"/>
    @error('query') <span class="error">{{ $message }}</span> @enderror
    <div class="flex justify-center mx-auto my-5 space-x-5 items-center ">
        @foreach($types as $type)
            @if($loop->first)
                <div><span
                        class="inline-flex  justify-center items-center py-1 px-2 mr-2 text-xs font-bold leading-none rounded-full cursor-pointer text-gray-200 bg-gray-600"
                        wire:click="resetFilter()">All
                 </span></div>
            @endif
            <div wire:click="filterType({{$type}})">
                <x-badge-type :title="$type->title"></x-badge-type>
            </div>
        @endforeach
    </div>
    <div class="grid grid-cols-1 gap-4 mx-auto xl:grid-cols-3 md:grid-cols-2 md:gap-3">
        @foreach($filtered as $property)
            <div class="flex w-full max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-900">
                @if($property->images->count()!=0)
                    <div class="w-1/3 bg-cover"
                         style="background-image: url('{{$property->images[0]->url}}')"
                         title="{{$property->images[0]->alternative}}"
                    ></div>
                @else
                    <div class="w-1/3 bg-cover"
                         style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/No_image_3x4.svg/200px-No_image_3x4.svg.png')"
                         title="Pas d'image disponible"
                    ></div>
                @endif


                <div class="flex flex-col w-2/3 p-4 md:p-4 justify-evenly">
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-white">{{Str::limit($property->title, 30, ' ...')}}</h1>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{Str::limit($property->description, 70, ' ...')}}</p>
                    <div class="flex justify-end my-2 ">
                        <x-badge-type :title="$property->type->title"></x-badge-type>
                    </div>
                    <div class="flex justify-between mt-1 item-center">
                        <h1 class="text-lg font-bold text-gray-700 dark:text-gray-200 md:text-xl">{{number_format($property->price, 0, ',', ' ')." €"}}</h1>
                        <a
                            href="{{route("properties.show",compact('property'))}}"
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
