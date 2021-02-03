<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between ">
            <h2 class="text-2xl font-bold leading-tight text-dino-500">
                {{ __('Modifier le bien ').$property->id  }}
            </h2>
            <button
                type="submit"
                onclick="event.preventDefault();document.getElementById('deleteProperty').submit();"
                class="px-6 py-2 text-lg text-white bg-red-500 border-0 rounded focus:outline-none hover:bg-red-600">
                Supprimer le bien
            </button>
        </div>
    </x-slot>
    <div class="container flex px-5 py-10 mx-auto">
        <form method="post" class="w-full"
              id="editPropertyForm"
              action="{{route('admin.properties.update',compact('property')}}"
        >
            @method('PATCH')
            @csrf
            <div
                class="relative z-10 flex flex-col w-full p-8 mt-10 bg-white rounded-lg md:ml-auto md:mt-0">
                <div class="relative mb-4">
                    <label for="title" class="text-sm leading-7 text-gray-600">Libeller du bien</label>
                    <input type="text" id="title" name="title"
                           required
                           value="{{$property->title}}"
                           class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                    <x-error-form input="title"></x-error-form>
                </div>
                <div class="relative mb-4">
                    <label for="description" class="text-sm leading-7 text-gray-600">Description du bien</label>
                    <textarea
                        id="description" name="description"
                        required
                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500"
                        rows="1"
                    >{{$property->description}}</textarea>
                    <x-error-form input="description"></x-error-form>
                </div>
                <div class="relative mb-4">
                    <label for="price" class="text-sm leading-7 text-gray-600">Prix du bien</label>
                    <input type="number" id="price" name="price" min="0" max="10000000"
                           value="{{$property->price}}"
                           required
                           class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                    <x-error-form input="price"></x-error-form>
                </div>
                <div class="relative mb-4">
                    <label for="surface" class="text-sm leading-7 text-gray-600">Surface du bien</label>
                    <input type="number" id="surface" name="surface" min="0" max="10000"
                           value="{{$property->surface}}"
                           required
                           class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                    <x-error-form input="surface"></x-error-form>
                </div>
                <div class="relative mb-4">
                    <label for="rooms" class="text-sm leading-7 text-gray-600">Nombre de pièces</label>
                    <input type="number" id="rooms" name="rooms" min="0" max="99"
                           value="{{$property->rooms}}"
                           required
                           class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                    <x-error-form input="rooms"></x-error-form>
                </div>
                <div class="relative mb-4">
                    <label for="postcode" class="text-sm leading-7 text-gray-600">Code Postal</label>
                    <input type="number" id="postcode" name="postcode" min="0" max="100000"
                           value="{{$property->postcode}}"
                           required
                           class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                    <x-error-form input="postcode"></x-error-form>
                </div>
                <div class="relative mb-4">
                    <label for="town" class="text-sm leading-7 text-gray-600">Ville</label>
                    <input type="text" id="town" name="town"
                           value="{{$property->town}}"
                           required
                           class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                    <x-error-form input="town"></x-error-form>
                </div>
                <div class="relative mb-4">
                    <label for="constructionYear" class="text-sm leading-7 text-gray-600">Date de construction</label>
                    <input type="number" id="constructionYear" name="constructionYear" min="1900"
                           max="{{\Carbon\Carbon::now()->year}}"
                           value="{{$property->constructionYear}}"
                           required
                           class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                    <x-error-form input="constructionYear"></x-error-form>
                </div>
                {{old('images')}}
                @if(old('images')!=null)
                    {{--   Si on avait déja renseigner des url alors on les repasse au composant--}}
                    @livewire('image-property-input',['images'=>explode(",", old('images'))])
                @else
                    @livewire('image-property-input',['images'=>$images])
                @endif
                <x-error-form input="images"></x-error-form>
                <div class="relative mb-4">
                    <label for="type_id" class="text-sm leading-7 text-gray-600">Type du bien</label>
                    <select id="type_id"
                            name="type_id"
                            class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    >
                        @foreach($types as $type)
                            <option
                                @if($property->type->id == $type->id)
                                selected
                                @endif
                                value="{{$type->id}}">{{$type->title}}</option>
                        @endforeach
                    </select>
                    <x-error-form input="type_id"></x-error-form>
                </div>
                <div class="relative mb-4">
                    <label for="state" class="text-sm leading-7 text-gray-600">état du bien</label>
                    <select id="state"
                            name="state"
                            class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    >
                        @foreach($states as $state)
                            <option
                                @if($property->type->id == $type->id)
                                selected
                                @endif
                                value="{{$state}}">{{$state}}</option>
                        @endforeach
                    </select>
                    <x-error-form input="state"></x-error-form>
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
                        onclick="event.preventDefault();document.getElementById('deleteProperty').submit();"
                        class="px-6 py-2 text-lg text-white bg-red-500 border-0 rounded focus:outline-none hover:bg-red-600">
                        Supprimer le bien
                    </button>
                </div>
            </div>
        </form>
        <form id="deleteProperty" method="POST"
              action="{{route('admin.properties.destroy',compact('property'))}}">
            @method('DELETE') @csrf
        </form>
    </div>
</x-app-layout>


