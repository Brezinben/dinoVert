<x-app-layout>
    <x-slot name="header">
        <h2 class="header-title">
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
                class="form-create-edit">
                <div class="relative mb-4">
                    <label for="title" class="form-libel-create-edit">Titre de l'Actualité</label>
                    <input type="text" id="title" name="title"
                           required
                           value="{{ old('title') }}"
                           placeholder="Votre titre"
                           class="form-input-create-edit">
                    <x-error-form input="title"></x-error-form>
                </div>
                <div class="relative mb-4">
                    <label for="imageUrl" class="form-libel-create-edit">Image de l'actualité</label>
                    <input type="url" id="imageUrl" name="imageUrl"
                           required
                           value="{{ old('imageUrl') }}"
                           placeholder="Lien de votre image"
                           class="form-input-create-edit">
                    <x-error-form input="imageUrl"></x-error-form>
                </div>
                <div class="relative mb-4">
                        <textarea id="wysiwyg_text" name="wysiwyg_text">
                          {{ old('wysiwyg_text') }}
                        </textarea>
                </div>
                <x-error-form input="wysiwyg_text"></x-error-form>

                <div class="relative mb-4">
                    <label for="tags[]" class="form-libel-create-edit">Tags associés (1-5)</label>
                    <select id="tags[]"
                            name="tags[]"
                            size="10"
                            class="form-input-create-edit"
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
                    <label for="category_id" class="form-libel-create-edit">Type du bien</label>
                    <select id="category_id"
                            name="category_id"
                            class="form-input-create-edit"
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


