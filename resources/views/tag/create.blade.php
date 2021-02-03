<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tight text-dino-500">
            {{ __('Crée un Tag') }}
        </h2>
    </x-slot>
    <div class="container flex px-5 py-10 mx-auto">
        <form method="post" class="w-full" id="createTagForm"
              action="{{route("admin.tags.store")}}"
        >
            @csrf
            <div
                class="relative z-10 flex flex-col w-full p-8 mt-10 bg-white rounded-lg md:ml-auto md:mt-0">
                <div class="relative mb-4">
                    <label for='title' class="text-sm leading-7 text-gray-600">Libeller du tag</label>
                    <input type="text" id='title' name='title'
                           required
                           value="{{ old('title') }}"
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


