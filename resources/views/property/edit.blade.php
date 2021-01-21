<div class="container flex px-5 py-10 mx-auto">
    <form method="post" wire:submit.prevent="submit"
        {{--          action="{{route('courses.update',$course)}}"--}}
    >
        @method('PATCH')
        @csrf
        <div
            class="relative z-10 flex flex-col w-full p-8 mt-10 bg-white rounded-lg md:ml-auto md:mt-0">
            <div class="relative mb-4">
                <label for="title" class="text-sm leading-7 text-gray-600">Titre de la formation</label>


                <input type="text" id="title" name="title"
                       wire:model="title"
                       required
                       class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                @error('title')
                <div x-data="{ openError: true }"
                     x-show="openError"
                     class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
                    <p>{{ $message }}</p>
                    <span class="absolute inset-y-0 right-0 flex items-center mr-4" @click="openError = !openError">
                     <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path
                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                             clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </span>
                </div>
                @enderror
            </div>
            <div class="relative mb-4">
                <label for="description" class="text-sm leading-7 text-gray-600">Description de la
                    formation</label>


                <textarea wire:model="description"
                          id="description" name="description"
                          required
                          class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500"
                          rows="5"
                ></textarea>
                @error('description')
                <div x-data="{ openError: true }"
                     x-show="openError"
                     class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
                    <p>{{ $message }}</p>
                    <span class="absolute inset-y-0 right-0 flex items-center mr-4" @click="openError = !openError">
                     <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path
                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                             clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </span>
                </div>

                @enderror
            </div>


            <p class="my-3 text-2xl text-gray-700 ">Tags <span
                    class="text-xs text-red-400">Modification à la volée</span>
            </p>
            <div class="relative mb-4">
                {{--            wire:poll.keep-alive--}}
                {{--            wire:poll.200ms--}}
                @foreach($course->tags as $tag)
                    <label for="tag{{$loop->index}}" class="text-sm leading-7 text-gray-600"></label>
                    <div class="relative my-5">
                        <input type="text" id="tag{{$loop->index}}" name="tag{{$loop->index}}"
                               value="{{$tag->title}}" disabled
                               class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                        <button
                            wire:click="deleteTag({{ $tag->id }})"
                            class="absolute top-0 right-0 h-full px-3 py-1 mb-1 text-xs font-bold uppercase bg-transparent bg-red-100 border border-red-500 border-solid rounded rounded-l-none outline-none hover:bg-red-500 hover:text-white active:bg-red-600 focus:outline-none"
                            type="button">
                            🗑️
                        </button>
                    </div>
                @endforeach


                <select id="addTag" x-model.number="$wire.selectedTag"
                        class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                >
                    @foreach($allTags as $tag)
                        <option wire:click="refreshSelected({{$tag->id}})"
                                value="{{$tag->id}}">{{$tag->id.' - '.$tag->title}}</option>
                    @endforeach
                </select>
                <button
                    wire:click="addTag({{$selectedTag}})"
                    class="px-4 py-2 mb-1 mr-1 text-xs font-bold text-green-500 uppercase bg-transparent border border-green-500 border-solid rounded outline-none hover:bg-green-500 hover:text-white active:bg-green-600 focus:outline-none"
                    type="button">
                    ➕
                </button>

            </div>


            <p class="my-3 text-2xl text-gray-700 ">Assets</p>
            <div class="relative mb-4">
                @foreach($course->assets as $asset)
                    <label for="asset{{$loop->index}}" class="text-sm leading-7 text-gray-600"></label>
                    <input type="text" id="asset{{$loop->index}}" name="asset{{$loop->index}}"
                           value="{{$asset->slug}}" disabled
                           class="w-full px-3 py-1 my-2 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                @endforeach
            </div>


            <button
                type="submit"
                class="px-6 py-2 text-lg text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">
                Modifier la formation
            </button>

        </div>
    </form>
</div>

