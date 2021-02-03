<x-app-layout>
    <x-slot name="header">
        <h2 class="header-title">
            {{ __('Crée un Tag') }}
        </h2>
    </x-slot>
    <div class="container flex px-5 py-10 mx-auto">
        <form method="post" class="w-full" id="createTagForm"
              action="{{route("admin.tags.store")}}"
        >
            @csrf
            <div
                class="form-create-edit">
                <div class="relative mb-4">
                    <label for='title' class="form-libel-create-edit">Libeller du tag</label>
                    <input type="text" id='title' name='title'
                           required
                           value="{{ old('title') }}"
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
                    >{{ old('description') }}</textarea>
                    <x-error-form input="description"></x-error-form>
                </div>
                <button
                    type="submit"
                    onclick="event.preventDefault();document.getElementById('createTagForm').submit();"
                    class="px-6 py-2 text-lg text-white border-0 rounded bg-dino-500 focus:outline-none hover:bg-dino-600">
                    Crée le Tag
                </button>
            </div>
        </form>
    </div>
</x-app-layout>


