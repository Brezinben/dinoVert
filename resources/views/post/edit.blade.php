<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between ">
            <h2 class="header-title">
                {{ __('Modifier l\'actualité du ').date('d/m/y', strtotime($post->created_at)) }}
            </h2>
            <button
                type="submit"
                onclick="event.preventDefault();document.getElementById('deletePost').submit();"
                class="px-6 py-2 text-lg text-white bg-red-500 border-0 rounded focus:outline-none hover:bg-red-600">
                Supprimer l'actualité
            </button>
        </div>
    </x-slot>
    <div class="container flex px-5 py-10 mx-auto">
        <form method="post" class="w-full"
              id="editPostForm"
              action="{{route('admin.posts.update',compact('post'))}}"

        >
            @method('PUT')
            @csrf
            <div
                class="form-create-edit">
                <div class="relative mb-4">
                    <label for="title" class="form-libel-create-edit">Titre de l'Actualité</label>
                    <input type="text" id="title" name="title"
                           required
                           value="{{ $post->title }}"
                           placeholder="Votre titre"
                           class="form-input-create-edit">
                    <x-error-form input="title"></x-error-form>
                </div>
                <div class="relative mb-4">
                    <label for="imageUrl" class="form-libel-create-edit">Image de l'actualité</label>
                    <input type="url" id="imageUrl" name="imageUrl"
                           required
                           value="{{$post->imageUrl }}"
                           placeholder="Lien de votre image"
                           class="form-input-create-edit">
                    <x-error-form input="imageUrl"></x-error-form>
                </div>
                <div class="relative mb-4">
                        <textarea id="wysiwyg_text" name="wysiwyg_text">
                          {{ $post->wysiwyg_text}}
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
                                @if($post->tags->contains($tag))
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
                                @if($post->category->id ==$category->id)
                                selected
                                @endif
                                value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                    <x-error-form input="category_id"></x-error-form>
                </div>
                <div class="flex justify-evenly ">
                    <button
                        type="submit"
                        onclick="event.preventDefault();document.getElementById('editPostForm').submit();"
                        class="px-6 py-2 text-lg text-white border-0 rounded bg-dino-500 focus:outline-none hover:bg-dino-600">
                        Modifier l'actualité
                    </button>
                    <button
                        type="submit"
                        onclick="event.preventDefault();document.getElementById('deletePost').submit();"
                        class="px-6 py-2 text-lg text-white bg-red-500 border-0 rounded focus:outline-none hover:bg-red-600">
                        Supprimer l'actualité
                    </button>
                </div>

            </div>
        </form>
        <form id="deletePost" method="POST"
              action="{{route('admin.posts.destroy',compact('post'))}}">
            @method('DELETE') @csrf
        </form>
    </div>
    @include('layouts.script.tinymceScript')
</x-app-layout>


