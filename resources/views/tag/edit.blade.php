<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between ">
            <h2 class="text-2xl font-bold leading-tight text-dino-500">
                {{ __('Modifier le Tag '.$tag->id) }}
            </h2>
            <button
                type="submit"
                onclick="event.preventDefault();document.getElementById('deleteTag').submit();"
                class="px-6 py-2 text-lg text-white bg-red-500 border-0 rounded focus:outline-none hover:bg-red-600">
                Supprimer le tag
            </button>
        </div>
    </x-slot>
    <div class="container flex px-5 py-10 mx-auto">
        <form method="post" class="w-full" id="editTagForm"
              action="{{route("admin.tags.update",compact('tag'))}}"
        >
            @csrf
            @method('PATCH')
            <div
                class="relative z-10 flex flex-col w-full p-8 mt-10 bg-white rounded-lg md:ml-auto md:mt-0">
                <div class="relative mb-4">
                    <label for='title' class="text-sm leading-7 text-gray-600">Libeller du tag</label>
                    <input type="text" id='title' name='title'
                           required
                           value="{{ $tag->title }}"
                           placeholder="Titre du bien"
                           class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                    <x-error-form input="title"></x-error-form>
                </div>
                <div class="relative mb-4">
                    <label for="description" class="text-sm leading-7 text-gray-600">Description du tag</label>
                    <textarea
                        id="description" name="description"
                        placeholder="Description du bien"
                        required
                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500"
                        rows="1"
                    >{{ $tag->description }}</textarea>
                    <x-error-form input="description"></x-error-form>
                </div>
                <div class="flex justify-evenly ">
                    <button
                        type="submit"
                        onclick="event.preventDefault();document.getElementById('editPropertyForm').submit();"
                        class="px-6 py-2 text-lg text-white border-0 rounded bg-dino-500 focus:outline-none hover:bg-dino-600">
                        Modifier le bien
                    </button>
                    <button
                        type="submit"
                        onclick="event.preventDefault();document.getElementById('deleteTag').submit();"
                        class="px-6 py-2 text-lg text-white bg-red-500 border-0 rounded focus:outline-none hover:bg-red-600">
                        Supprimer le tag
                    </button>
                </div>
            </div>
        </form>
        <form id="deleteTag" method="POST"
              action="{{route('admin.tags.destroy',compact('tag'))}}">
            @method('DELETE') @csrf
        </form>
    </div>
</x-app-layout>


