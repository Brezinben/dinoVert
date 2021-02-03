<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tight text-dino-500">
            {{ __('Crée un bien') }}
        </h2>
    </x-slot>
    <div class="container flex px-5 py-10 mx-auto">
        <form method="post" class="w-full"
              id="createPostForm"
              action="{{route('admin.posts.store')}}"
        >
            @csrf
            <div
                class="relative z-10 flex flex-col w-full p-8 mt-10 bg-white rounded-lg md:ml-auto md:mt-0">
                <div class="relative mb-4">
                    <label for="title" class="text-sm leading-7 text-gray-600">Titre de l'Actualité</label>
                    <input type="text" id="title" name="title"
                           required
                           value="{{ old('title') }}"
                           placeholder="Votre titre"
                           class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                    <x-error-form input="title"></x-error-form>
                </div>
                <div class="relative mb-4">
                    <label for="imageUrl" class="text-sm leading-7 text-gray-600">Image de l'actualité</label>
                    <input type="url" id="imageUrl" name="imageUrl"
                           required
                           value="{{ old('imageUrl') }}"
                           placeholder="Lien de votre image"
                           class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                    <x-error-form input="imageUrl"></x-error-form>
                </div>
                <div class="relative mb-4">
                        <textarea id="wysiwyg_text" name="wysiwyg_text">
                          {{ old('wysiwyg_text') }}
                        </textarea>
                </div>
                <x-error-form input="wysiwyg_text"></x-error-form>

                <div class="relative mb-4">
                    <label for="tags[]" class="text-sm leading-7 text-gray-600">Tags associés (1-5)</label>
                    <select id="tags[]"
                            name="tags[]"
                            size="10"
                            class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            multiple
                    >
                        @foreach( $tags as $tag)
                            <option
                                @if($loop->first)
                                selected
                                @endif
                                value="{{$tag->id}}">{{$tag->title}}</option>
                        @endforeach
                    </select>
                    <x-error-form input="tags"></x-error-form>
                </div>

                <div class="relative mb-4">
                    <label for="category_id" class="text-sm leading-7 text-gray-600">Type du bien</label>
                    <select id="category_id"
                            name="category_id"
                            class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    >
                        @foreach($categories as $category)
                            <option
                                @if($loop->first)
                                selected
                                @endif
                                value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                    <x-error-form input="category_id"></x-error-form>
                </div>
                <button
                    type="submit"
                    onclick="event.preventDefault();document.getElementById('createPostForm').submit();"
                    class="px-6 py-2 text-lg text-white border-0 rounded bg-dino-500 focus:outline-none hover:bg-dino-600">
                    Crée le bien
                </button>

            </div>
        </form>
    </div>
    @include('layouts.script.tinymceScript')
</x-app-layout>


