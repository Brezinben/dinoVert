<div>
    <label for="" class="form-libel-create-edit">Image du bien</label>
    <input type="hidden" class="hidden" name="images" wire:model="images">
    @foreach($images as $image)
        <div class="relative my-5">
            <label for="image{{$loop->index}}" class="hidden"></label>
            <div class="flex items-center">
                <input type="url" id="image{{$loop->index}}" name="image{{$loop->index}}" disabled
                       wire:model="images.{{$loop->index}}"
                       class="form-input-create-edit">
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
        <label for="image" class="hidden"></label>
        <div class="flex items-center">
            <input type="url" id="image" name="image" wire:model="image"
                   placeholder="URL de l'image"
                   class="form-input-create-edit">
            <button
                wire:click="addImage()"
                class="px-4 py-2 mb-1 ml-1 text-xs font-bold text-green-500 uppercase bg-transparent border border-green-500 border-solid rounded outline-none hover:bg-green-500 hover:text-white active:bg-green-600 focus:outline-none"
                type="button">
                ➕
            </button>
        </div>
        @error('image')
        <div class="px-4 py-3 leading-normal rounded-lg text-punch-500 bg-punch-100" role="alert">
            <p>{{ $message }}</p>
        </div> @enderror
    </div>
</div>
