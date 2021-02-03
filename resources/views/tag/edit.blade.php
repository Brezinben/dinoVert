<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between ">
            <h2 class="header-title">
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
                class="form-create-edit">
                <div class="relative mb-4">
                    <label for='title' class="form-libel-create-edit">Libeller du tag</label>
                    <input type="text" id='title' name='title'
                           required
                           value="{{ $tag->title }}"
                           placeholder="Titre du bien"
                           class="form-input-create-edit">
                    <x-error-form input="title"></x-error-form>
                </div>
                <div class="relative mb-4">
                    <label for="description" class="form-libel-create-edit">Description du tag</label>
                    <textarea
                        id="description" name="description"
                        placeholder="Description du bien"
                        required
                        class="form-input-create-edit"
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


