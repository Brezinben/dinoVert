<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tight text-dino-500">
            {{ __('Crée un bien') }}
        </h2>
    </x-slot>
    <div class="container flex py-10 px-5 mx-auto">
        <form method="post" class="w-full"
              id="createPostForm"
              action="{{route('admin.posts.store')}}"
        >
            @csrf
            <div
                class="flex relative z-10 flex-col p-8 mt-10 w-full bg-white rounded-lg md:ml-auto md:mt-0">
                <div class="relative mb-4">
                    <label for="title" class="text-sm leading-7 text-gray-600">Titre de l'Actualité</label>
                    <input type="text" id="title" name="title"
                           required
                           value="{{ old('title') }}"
                           placeholder="Votre titre"
                           class="py-1 px-3 w-full text-base leading-8 text-gray-700 bg-white rounded border border-gray-300 transition-colors duration-200 ease-in-out outline-none focus:border-indigo-500">
                    @error('title')
                    <div x-data="{ openError: true }"
                         x-show="openError"
                         class="relative py-3 pr-10 pl-4 leading-normal text-red-700 bg-red-100 rounded-lg"
                         role="alert">
                        <p>{{ $message }}</p>
                        <span class="flex absolute inset-y-0 right-0 items-center mr-4" @click="openError = !openError">
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
                           class="py-1 px-3 w-full text-base leading-8 text-gray-700 bg-white rounded border border-gray-300 transition-colors duration-200 ease-in-out outline-none focus:border-indigo-500">
                    @error('imageUrl')
                    <div x-data="{ openError: true }"
                         x-show="openError"
                         class="relative py-3 pr-10 pl-4 leading-normal text-red-700 bg-red-100 rounded-lg"
                         role="alert">
                        <p>{{ $message }}</p>
                        <span class="flex absolute inset-y-0 right-0 items-center mr-4" @click="openError = !openError">
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
                @error('wysiwyg_text')
                <div x-data="{ openError: true }"
                     x-show="openError"
                     class="relative py-3 pr-10 pl-4 leading-normal text-red-700 bg-red-100 rounded-lg"
                     role="alert">
                    <p>{{ $message }}</p>
                    <span class="flex absolute inset-y-0 right-0 items-center mr-4" @click="openError = !openError">
                     <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path
                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                             clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </span>
                </div>
                @enderror

                <div class="relative mb-4">
                    <label for="tags[]" class="text-sm leading-7 text-gray-600">Tags associés (1-5)</label>
                    <select id="tags[]"
                            name="tags[]"
                            size="10"
                            class="block py-2 px-3 mt-1 w-full bg-white rounded-md border border-gray-300 shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
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
                    @error('tags')
                    <div x-data="{ openError: true }"
                         x-show="openError"
                         class="relative py-3 pr-10 pl-4 leading-normal text-red-700 bg-red-100 rounded-lg"
                         role="alert">
                        <p>{{ $message }}</p>
                        <span class="flex absolute inset-y-0 right-0 items-center mr-4"
                              @click="openError = !openError">
                     <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path
                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                             clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </span>
                    </div>
                    @enderror
                </div>

                <div class="relative mb-4">
                    <label for="category_id" class="text-sm leading-7 text-gray-600">Type du bien</label>
                    <select id="category_id"
                            name="category_id"
                            class="block py-2 px-3 mt-1 w-full bg-white rounded-md border border-gray-300 shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
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
                         class="relative py-3 pr-10 pl-4 leading-normal text-red-700 bg-red-100 rounded-lg"
                         role="alert">
                        <p>{{ $message }}</p>
                        <span class="flex absolute inset-y-0 right-0 items-center mr-4"
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
                    onclick="event.preventDefault();document.getElementById('createPostForm').submit();"
                    class="py-2 px-6 text-lg text-white rounded border-0 bg-dino-500 focus:outline-none hover:bg-dino-600">
                    Crée le bien
                </button>

            </div>
        </form>
    </div>

    <script src="https://cdn.tiny.cloud/1/qg3ec6i44rbiw5399mtl1ltcql76g4o3w42gj7c4d7ix2wa5/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    <script>
        var useDarkMode = false;
        // window.matchMedia('(prefers-color-scheme: dark)').matches;

        tinymce.init({
            selector: 'textarea',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            imagetools_cors_hosts: ['picsum.photos'],
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            toolbar_sticky: true,
            autosave_ask_before_unload: true,
            autosave_interval: '30s',
            autosave_prefix: '{path}{query}-{id}-',
            autosave_restore_when_empty: false,
            autosave_retention: '2m',
            image_advtab: true,
            link_list: [
                {title: 'My page 1', value: 'https://www.tiny.cloud'},
                {title: 'My page 2', value: 'http://www.moxiecode.com'}
            ],
            image_list: [
                {title: 'My page 1', value: 'https://www.tiny.cloud'},
                {title: 'My page 2', value: 'http://www.moxiecode.com'}
            ],
            image_class_list: [
                {title: 'None', value: ''},
                {title: 'Some class', value: 'class-name'}
            ],
            importcss_append: true,
            file_picker_callback: function (callback, value, meta) {
                /* Provide file and text for the link dialog */
                if (meta.filetype === 'file') {
                    callback('https://www.google.com/logos/google.jpg', {text: 'My text'});
                }

                /* Provide image and alt text for the image dialog */
                if (meta.filetype === 'image') {
                    callback('https://www.google.com/logos/google.jpg', {alt: 'My alt text'});
                }

                /* Provide alternative source and posted for the media dialog */
                if (meta.filetype === 'media') {
                    callback('movie.mp4', {source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg'});
                }
            },
            templates: [
                {
                    title: 'New Table',
                    description: 'creates a new table',
                    content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
                },
                {title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...'},
                {
                    title: 'New list with dates',
                    description: 'New List with dates',
                    content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
                }
            ],
            template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
            template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
            height: 600,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: 'mceNonEditable',
            toolbar_mode: 'sliding',
            contextmenu: 'link image imagetools table',
            skin: useDarkMode ? 'oxide-dark' : 'oxide',
            content_css: useDarkMode ? 'dark' : 'default',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>
</x-app-layout>


