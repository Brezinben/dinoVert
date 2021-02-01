<x-app-layout>
    <x-slot name="header">

        <div class="flex justify-between ">
            <h2 class="text-2xl font-bold leading-tight text-dino-500">{{'Accueil'}}</h2>
            <button
                type="submit"
                onclick="event.preventDefault();document.getElementById('homeEdit').submit();"
                class="px-6 py-2 text-lg text-white border-0 rounded bg-green-500 focus:outline-none hover:bg-green-600">
                Mettre à jour
            </button>
        </div>
    </x-slot>
    <div class="container mx-auto">
        <div class="text-dino-500 font-montserrat mb-5">
            <form id="homeEdit" action="{{route('admin.storeEditHome',['id'=>$content->id])}}" method="POST">
                @method('POST')
                @error('wysiwygTextHome')
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
                @csrf

                <textarea id="wysiwygTextHome" name="wysiwygTextHome">
                          {{ $content->wysiwyg_text }}
                 </textarea>


            </form>

        </div>
        <h2 class="text-2xl font-bold leading-tight text-dino-500">
            {{ __('Les nouveaux biens à vendre') }}
        </h2>
        <div class="grid grid-cols-1 grid-rows-3 py-5 lg:grid-cols-11 lg:grid-rows-4">
            <div class="row-span-1 w-full lg:col-span-5 lg:row-span-full">
                <div class="flex flex-col mx-auto w-full max-w-xl h-full rounded-2xl">
                    <div class="overflow-hidden h-full text-center bg-cover rounded-t-xl"
                         style="background-image: url('{{$properties[0]->images[0]->url}}')"
                         title="{{$properties[0]->images[0]->alternative}}">
                    </div>
                    <div
                        class="flex flex-col justify-between p-4 w-full leading-normal bg-white rounded-b-xl border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light">
                        <div class="flex flex-col mb-8 space-y-2">
                            <div
                                class="text-2xl text-dino-400 font-montserrat">{{$properties[0]->town." - ".$properties[0]->postcode}}</div>
                            <div
                                class="text-xl text-dino-400 font-montserrat">{{number_format($properties[0]->price, 0, ',', ' ')." €"}}</div>
                            <div
                                class="text-xl text-dino-400 font-montserrat">{{number_format($properties[0]->surface, 0, ',', ' ')." m²"}}</div>
                        </div>
                        <div class="flex justify-between items-center">
                        <span
                            class="inline-flex justify-center items-center py-1 px-2 mr-2 text-xs font-bold leading-none rounded-full
                            @if($properties[0]->type->title == "Maison individuelle") text-gray-50 bg-blue-600
                            @elseif($properties[0]->type->title == "Appartement") text-gray-50 bg-green-600
                            @elseif($properties[0]->type->title == "Enclos à dinosaure") text-gray-50  bg-dino-600
                            @else text-gray-200 bg-gray-600
                            @endif() "
                        >{{$properties[0]->type->title}}</span>
                            <a
                                href="{{route("properties.show",['property'=>$properties[0]])}}"
                                class="inline-flex items-center px-5 space-x-2 h-8 text-white rounded-lg transition-colors duration-150 bg-dino-700 focus:shadow-outline hover:bg-dino-800">
                                <span>Voir</span>
                                <svg class="w-6 h-6" data-darkreader-inline-fill="" data-darkreader-inline-stroke=""
                                     fill="none" stroke="currentColor"
                                     style="--darkreader-inline-fill:none; --darkreader-inline-stroke:currentColor;"
                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @for($index = 1; $index < 3; $index++)
                <div
                    class="row-span-1 mt-5 w-full lg:col-span-5 lg:col-start-7 lg:row-span-2
                @if($index==1)
                        lg:my-2
                     @else()
                        lg:row-start-3
                    @endif ">
                    <div class="mx-auto w-full max-w-xl rounded-2xl lg:flex">
                        <div
                            class="overflow-hidden flex-none h-48 text-center bg-cover rounded-t-xl lg:h-auto lg:w-48 lg:rounded-t-none lg:rounded-l-xl"
                            style="background-image: url('{{$properties[$index]->images[0]->url}}')"
                            title="{{$properties[$index]->images[0]->alternative}}">
                        </div>
                        <div
                            class="flex flex-col justify-between p-4 w-full leading-normal bg-white rounded-b rounded-b-xl border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light lg:rounded-r-xl lg:rounded-b-none">
                            <div class="flex flex-col mb-8 space-y-2">
                                <div
                                    class="text-2xl text-dino-400 font-montserrat">{{$properties[$index]->town." - ".$properties[$index]->postcode}}</div>
                                <div
                                    class="text-xl text-dino-400 font-montserrat">{{number_format($properties[$index]->price, 0, ',', ' ')." €"}}</div>
                                <div
                                    class="text-xl text-dino-400 font-montserrat">{{number_format($properties[$index]->surface, 0, ',', ' ')." m²"}}</div>
                            </div>
                            <div class="flex justify-between items-center">
                        <span
                            class="inline-flex justify-center items-center py-1 px-2 mr-2 text-xs font-bold leading-none rounded-full
                            @if($properties[$index]->type->title == "Maison individuelle")text-gray-50 bg-blue-600
                            @elseif($properties[$index]->type->title == "Appartement")text-gray-50 bg-green-600
                            @elseif($properties[$index]->type->title == "Enclos à dinosaure") text-gray-50  bg-dino-600
                            @else text-gray-200 bg-gray-600
                            @endif() "
                        >{{$properties[$index]->type->title}}</span>
                                <a
                                    href="{{route("properties.show",['property'=>$properties[$index]])}}"
                                    class="inline-flex items-center px-5 space-x-2 h-8 text-white rounded-lg transition-colors duration-150 bg-dino-700 focus:shadow-outline hover:bg-dino-800">
                                    <span>Voir</span>
                                    <svg class="w-6 h-6" data-darkreader-inline-fill="" data-darkreader-inline-stroke=""
                                         fill="none" stroke="currentColor"
                                         style="--darkreader-inline-fill:none; --darkreader-inline-stroke:currentColor;"
                                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <h2 class="py-6 px-4 mx-auto mb-5 max-w-7xl text-2xl font-bold leading-tight sm:px-6 lg:px-8 text-dino-500">Les
            dernières actualitées</h2>
        <div class="grid grid-cols-1 auto-rows-max gap-8 mb-10 lg:grid-cols-3">
            @foreach($posts as $post)
                <div
                    class="overflow-hidden relative mx-auto w-full max-w-xl bg-white rounded-lg shadow-lg cursor-pointer h-max">
                    <div><img alt="blog photo" src="{{$post->imageUrl}}"
                              class="object-cover w-full max-h-40 rounded-t-lg"/></div>
                    <div class="flex relative flex-col justify-between p-4 h-72 dark:bg-gray-800">
                        <p class="mb-2 text-xl font-medium text-gray-800 dark:text-white">{{$post->title}}
                        </p>
                        <p class="font-light text-gray-400 dark:text-gray-300 text-md">
                            {{Str::limit(strip_tags($post->wysiwyg_text), 250, ' (...)') }}
                        </p>
                        <div class="flex items-center justify-between  mt-4">
                            <div class="flex flex-nowrap justify-start items-center overflow-hidden">
                                @foreach($post->tags as $tag)
                                    @if ($loop->index===3)
                                        @break
                                    @endif
                                    <div class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl">
                                        {{$tag->title}}
                                    </div>
                                @endforeach
                            </div>
                            <a href="{{route('posts.show',['post'=> $post])}}"
                               class="inline-flex items-center duration-150 ml-5 focus:outline-none cursor-pointer text-punch-400 hover:text-punch-500">Voir
                                l'actu
                                <svg class="ml-2 w-4 h-4" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.tiny.cloud/1/qg3ec6i44rbiw5399mtl1ltcql76g4o3w42gj7c4d7ix2wa5/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    <script>
        var useDarkMode = false;
        // window.matchMedia('(prefers-color-scheme: dark)').matches;

        tinymce.init({
            selector: '#wysiwygTextHome',
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
