<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Gestion des tags') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="container mx-auto max-w-7xl sm:px-6 lg:px-8">
            <a href="{{route("admin.tags.create")}}"
               class="btn-add-green">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </a>
            <section class="text-gray-600 body-font">
                <div class="overflow-x-auto py-2 pr-10 -my-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div
                        class="inline-block overflow-hidden px-8 pt-3 min-w-full align-middle bg-white dark:bg-gray-900 rounded-br-lg rounded-bl-lg shadow shadow-dashboard">
                        <table class="min-w-full">
                            <thead>
                            <tr>
                                <th class="py-3 px-6 tracking-wider leading-4 text-left border-b-2 border-gray-300 text-punch-500">
                                    ID
                                </th>
                                <th class="py-3 px-6 text-sm tracking-wider leading-4 text-left border-b-2 border-gray-300 text-punch-500">
                                    Titre
                                </th>
                                <th class="py-3 px-6 text-sm tracking-wider leading-4 text-left border-b-2 border-gray-300 text-punch-500">
                                    Description
                                </th>
                                <th class="py-3 px-6 text-sm tracking-wider leading-4 text-left border-b-2 border-gray-300 text-punch-500">
                                    Nombre de Posts
                                </th>
                                <th class="py-3 px-6 border-b-2 border-gray-300"></th>
                            </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-900">
                            @foreach($tags as $tag)
                                <tr>
                                    <td class="py-4 px-6 border-b border-gray-500 whitespace-no-wrap">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm leading-5 dark:text-gray-200">
                                                    #{{$tag->id}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 border-b border-gray-500 whitespace-no-wrap">
                                        <div
                                            class="text-sm leading-5 text-blue-900 dark:text-gray-200">{{$tag->title}}</div>
                                    </td>
                                    <td class="py-4 px-6 text-sm leading-5 text-blue-900 dark:text-gray-200 border-b border-gray-500 whitespace-no-wrap">
                                        {{Str::limit( $tag->description,250,'(...)')}}
                                    </td>
                                    <td class="py-4 px-6 text-sm leading-5 text-blue-900 dark:text-gray-200 border-b border-gray-500 whitespace-no-wrap">
                                        {{$tag->posts_count}}
                                    </td>
                                    <td class="py-4 px-6 text-sm leading-5 text-right border-b border-gray-500 whitespace-no-wrap">
                                        <div class="flex">
                                            <a href="{{route("tags.show",compact(['tag']))}}"
                                               class="btn-eye-dino">
                                                <svg class="w-6 h-6" data-darkreader-inline-fill=""
                                                     data-darkreader-inline-stroke=""
                                                     fill="none" stroke="currentColor"
                                                     style="--darkreader-inline-fill:none; --darkreader-inline-stroke:currentColor;"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                </svg>
                                            </a>
                                            <a href="{{route("admin.tags.edit",compact(['tag']))}}"
                                               class="btn-edit-punch">
                                                <svg class="w-6 h-6" viewBox="0 0 24 24" stroke-width="2"
                                                     stroke="currentColor" fill="none" stroke-linecap="round"
                                                     stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z"/>
                                                    <path
                                                        d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3"/>
                                                    <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3"/>
                                                    <line x1="16" y1="5" x2="19" y2="8"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
