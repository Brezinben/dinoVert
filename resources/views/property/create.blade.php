<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tight text-dino-500">
            {{ __('Crée un bien') }}
        </h2>
    </x-slot>
    <div class="container flex px-5 py-10 mx-auto">
        <form method="post" class="w-full"
              action="{{route('admin.properties.store')}}"
        >
            @csrf
            <div
                class="relative z-10 flex flex-col w-full p-8 mt-10 bg-white rounded-lg md:ml-auto md:mt-0">
                <div class="relative mb-4">
                    <label for="title" class="text-sm leading-7 text-gray-600">Libeller du bien</label>
                    <input type="text" id="title" name="title"
                           required
                           class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                    @error('title')
                    <div x-data="{ openError: true }"
                         x-show="openError"
                         class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg"
                         role="alert">
                        <p>{{ "title" }}</p>
                        <span class="absolute inset-y-0 right-0 flex items-center mr-4" @click="openError = !openError">
                     <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path
                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                             clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </span>
                    </div>
                    @enderror
                </div>
                <div class="relative mb-4">
                    <label for="description" class="text-sm leading-7 text-gray-600">Description du bien</label>
                    <textarea
                        id="description" name="description"
                        required
                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500"
                        rows="1"
                    ></textarea>
                    @error('description')
                    <div x-data="{ openError: true }"
                         x-show="openError"
                         class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg"
                         role="alert">
                        <p>{{"description"}}</p>
                        <span class="absolute inset-y-0 right-0 flex items-center mr-4" @click="openError = !openError">
                     <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path
                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                             clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </span>
                    </div>

                    @enderror
                </div>
                <div class="relative mb-4">
                    <label for="price" class="text-sm leading-7 text-gray-600">Prix du bien</label>
                    <input type="number" id="price" name="price"
                           required
                           class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                    @error('price')
                    <div x-data="{ openError: true }"
                         x-show="openError"
                         class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg"
                         role="alert">
                        <p>{{ "title" }}</p>
                        <span class="absolute inset-y-0 right-0 flex items-center mr-4" @click="openError = !openError">
                     <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path
                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                             clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </span>
                    </div>
                    @enderror
                </div>
                <div class="relative mb-4">
                    <label for="surface" class="text-sm leading-7 text-gray-600">Surface du bien</label>
                    <input type="number" id="surface" name="surface"
                           required
                           class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                    @error('surface')
                    <div x-data="{ openError: true }"
                         x-show="openError"
                         class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg"
                         role="alert">
                        <p>{{ "title" }}</p>
                        <span class="absolute inset-y-0 right-0 flex items-center mr-4" @click="openError = !openError">
                     <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path
                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                             clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </span>
                    </div>
                    @enderror
                </div>
                <div class="relative mb-4">
                    <label for="rooms" class="text-sm leading-7 text-gray-600">Nombre de pièces</label>
                    <input type="number" id="rooms" name="rooms"
                           required
                           class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                    @error('rooms')
                    <div x-data="{ openError: true }"
                         x-show="openError"
                         class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg"
                         role="alert">
                        <p>{{ "title" }}</p>
                        <span class="absolute inset-y-0 right-0 flex items-center mr-4" @click="openError = !openError">
                     <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path
                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                             clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </span>
                    </div>
                    @enderror
                </div>
                <div class="relative mb-4">
                    <label for="postcode" class="text-sm leading-7 text-gray-600">Code Postal</label>
                    <input type="number" id="postcode" name="postcode"
                           required
                           class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                    @error('postcode')
                    <div x-data="{ openError: true }"
                         x-show="openError"
                         class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg"
                         role="alert">
                        <p>{{ "title" }}</p>
                        <span class="absolute inset-y-0 right-0 flex items-center mr-4" @click="openError = !openError">
                     <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path
                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                             clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </span>
                    </div>
                    @enderror
                </div>
                <div class="relative mb-4">
                    <label for="town" class="text-sm leading-7 text-gray-600">Ville</label>
                    <input type="text" id="town" name="town"
                           required
                           class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                    @error('town')
                    <div x-data="{ openError: true }"
                         x-show="openError"
                         class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg"
                         role="alert">
                        <p>{{ "title" }}</p>
                        <span class="absolute inset-y-0 right-0 flex items-center mr-4" @click="openError = !openError">
                     <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path
                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                             clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </span>
                    </div>
                    @enderror
                </div>
                <div class="relative mb-4">
                    <label for="constructionYear" class="text-sm leading-7 text-gray-600">Date de construction</label>
                    <input type="number" id="constructionYear" name="constructionYear"
                           required
                           class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                    @error('constructionYear')
                    <div x-data="{ openError: true }"
                         x-show="openError"
                         class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg"
                         role="alert">
                        <p>{{ "title" }}</p>
                        <span class="absolute inset-y-0 right-0 flex items-center mr-4" @click="openError = !openError">
                     <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path
                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                             clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </span>
                    </div>
                    @enderror
                </div>
                <div class="relative mb-4">
                    <label for="image_1" class="text-sm leading-7 text-gray-600">Image du bien</label>
                    <div class="relative my-5">
                        <input type="url" id="image_1" name="image_1"
                               value="image_1"
                               class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                    </div>
                </div>
                <div class="relative mb-4">
                    <label for="type_id" class="text-sm leading-7 text-gray-600">Type du bien</label>
                    <select id="type_id"
                            name="type_id"
                            class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    >
                        @foreach($types as $type)
                            <option
                                @if($loop->first)
                                selected
                                @endif
                                value="{{$type->id}}">{{$type->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="relative mb-4">
                    <label for="state" class="text-sm leading-7 text-gray-600">état du bien</label>
                    <select id="state"
                            class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    >
                        @foreach($states as $state)
                            <option value="{{$state}}">{{$state}}</option>
                        @endforeach
                    </select>
                </div>
                <button
                    type="submit"
                    class="px-6 py-2 text-lg text-white bg-dino-500 border-0 rounded focus:outline-none hover:bg-dino-600">
                    Crée le bien
                </button>

            </div>
        </form>
    </div>
</x-app-layout>


