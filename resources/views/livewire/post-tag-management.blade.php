<div>
    <label for="" class="text-sm leading-7 text-gray-600">Image du bien</label>
    <input type="hidden" class="hidden" name="images" wire:model="tags">

    @foreach($chooseTags as $tag)
        <div class="relative my-5">
            <label for="tag{{$loop->index}}" class="hidden"></label>
            <div class="flex items-center">
                <input type="url" id="tag{{$loop->index}}" name="tag{{$loop->index}}" disabled
                       wire:model="chooseTags.{{$loop->index}}.title"
                       class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-green-300 rounded outline-none focus:border-indigo-500">
                <button
                    wire:click="deleteImage({{$loop->index}})"
                    class="px-4 py-2 mb-1 ml-1 text-xs font-bold text-red-500 uppercase bg-transparent border border-red-500 border-solid rounded outline-none hover:bg-red-500 hover:text-white active:bg-green-600 focus:outline-none"
                    type="button">
                    🗑️
                </button>
            </div>
        </div>
    @endforeach

    <div class="relative my-5">
        <label for="inputTag" class="hidden"></label>
        <div class="flex items-center">
            <select id="inputTag"
                    name="inputTag"
                    class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            >
                @foreach($allTags as $tag)
                    <option
                        @if($loop->first)
                        selected
                        @endif
                        wire:click="refreshKey({{$loop->index}})"
                        value="{{$tag->id}}">{{$tag->id.' - '.$tag->title}}</option>
                @endforeach
            </select>
            <button
                wire:click="addTag()"
                class="px-4 py-2 mb-1 ml-1 text-xs font-bold text-green-500 uppercase bg-transparent border border-green-500 border-solid rounded outline-none hover:bg-green-500 hover:text-white active:bg-green-600 focus:outline-none"
                type="button">
                ➕
            </button>
        </div>
        @error('inputTag')
        <div class="px-4 py-3 leading-normal text-punch-500 bg-punch-100 rounded-lg" role="alert">
            <p>{{ $message }}</p>
        </div>
        @enderror
    </div>
</div>

