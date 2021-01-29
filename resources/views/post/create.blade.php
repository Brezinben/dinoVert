<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tight text-dino-500">
            {{ __('Crée un bien') }}
        </h2>
    </x-slot>
    <div class="container flex px-5 py-10 mx-auto">
        <form method="post" class="w-full"
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
                    @error('title')
                    <div x-data="{ openError: true }"
                         x-show="openError"
                         class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg"
                         role="alert">
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
                    <label for="imageUrl" class="text-sm leading-7 text-gray-600">Image de l'actualité</label>
                    <input type="url" id="imageUrl" name="imageUrl"
                           required
                           value="{{ old('imageUrl') }}"
                           placeholder="Lien de votre image"
                           class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500">
                    @error('imageUrl')
                    <div x-data="{ openError: true }"
                         x-show="openError"
                         class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg"
                         role="alert">
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
                        <textarea id="wysiwyg_text" name="wysiwyg_text">
                          {{ old('wysiwyg_text') }}
                        </textarea>
                </div>
                {{--                @if(old('tags')!=null)--}}
                {{--                    --}}{{--   Si on avait déja renseigner des url alors on les repasse au composant--}}
                {{--                    @livewire('tag-post-select')--}}
                {{--                @else--}}
                {{--                    @livewire('tag-post-select')--}}
                {{--                @endif--}}
                @error('wysiwyg_text')
                <div x-data="{ openError: true }"
                     x-show="openError"
                     class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg"
                     role="alert">
                    <p>{{ $message }}</p>
                    <span class="absolute inset-y-0 right-0 flex items-center mr-4" @click="openError = !openError">
                     <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path
                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                             clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </span>
                </div>
                @enderror
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
                    @error('category_id')
                    <div x-data="{ openError: true }"
                         x-show="openError"
                         class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg"
                         role="alert">
                        <p>{{ $message }}</p>
                        <span class="absolute inset-y-0 right-0 flex items-center mr-4"
                              @click="openError = !openError">
                     <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path
                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                             clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </span>
                    </div>
                    @enderror
                </div>
                <button
                    type="submit"
                    class="px-6 py-2 text-lg text-white border-0 rounded bg-dino-500 focus:outline-none hover:bg-dino-600">
                    Crée le bien
                </button>

            </div>
        </form>
    </div>

    <script src="https://cdn.tiny.cloud/1/qg3ec6i44rbiw5399mtl1ltcql76g4o3w42gj7c4d7ix2wa5/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>
</x-app-layout>


