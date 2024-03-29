<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto max-w-7xl sm:px-6 lg:px-8">
            <section class="text-gray-600 dark:text-gray-200 body-font">
                <div class="container py-24 px-5 mx-auto">
                    <div class="flex flex-wrap justify-center -m-4">
                        <div class="p-4 md:w-1/3">
                            <div class="flex flex-col p-8 h-full bg-gray-100 dark:bg-gray-900 rounded-lg">
                                <div class="flex items-center mb-3">
                                    <div
                                        class="inline-flex flex-shrink-0 justify-center items-center mr-3 w-8 h-8 rounded-full text-punch-500">
                                        <svg class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24"
                                             stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                             stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"/>
                                            <path d="M3 21v-13l9-4l9 4v13"/>
                                            <path d="M13 13h4v8h-10v-6h6"/>
                                            <path d="M13 21v-9a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v3"/>
                                        </svg>
                                    </div>
                                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 title-font">Gestion
                                        des biens</h2>
                                </div>
                                <div class="flex-grow">
                                    <p class="text-base leading-relaxed">Un tableau qui liste les différents bien ainsi
                                        que leur type, on peut soit le consulter ou le modifier.</p>
                                    <a type="button"
                                       href="{{route("admin.properties.index")}}"
                                       class="block py-2 px-4  mt-5 w-full text-base font-semibold text-center text-white rounded-lg shadow-md transition duration-200 ease-in bg-punch-600 hover:bg-punch-700 focus:ring-punch-500 focus:ring-offset-punch-200 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                        Y aller
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="p-4 md:w-1/3">
                            <div class="flex flex-col p-8 h-full bg-gray-100 dark:bg-gray-900 rounded-lg">
                                <div class="flex items-center mb-3">
                                    <div
                                        class="inline-flex flex-shrink-0 justify-center items-center mr-3 w-8 h-8 rounded-full text-punch-500">
                                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                                        </svg>

                                    </div>
                                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 title-font">Gestions
                                        des
                                        actualitées</h2>
                                </div>
                                <div class="flex-grow">
                                    <p class="text-base leading-relaxed">Un tableau qui liste les différentes
                                        actualitées ainsi que leur categorie, on peut soit le consulter ou le
                                        modifier.</p>
                                    <a type="button"
                                       href="{{route("admin.posts.index")}}"
                                       class="block py-2 px-4 mt-5 w-full  text-base font-semibold text-center text-white rounded-lg shadow-md transition duration-200 ease-in bg-punch-600 hover:bg-punch-700 focus:ring-punch-500 focus:ring-offset-punch-200 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                        Y aller
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="p-4 md:w-1/3">
                            <div
                                class="flex flex-col justify-between p-8 h-full bg-gray-100 dark:bg-gray-900 rounded-lg">
                                <div class="flex items-center mb-3">
                                    <div
                                        class="inline-flex flex-shrink-0 justify-center items-center mr-3 w-8 h-8 rounded-full text-punch-500">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                        </svg>

                                    </div>
                                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 title-font">Modifier
                                        la
                                        home page</h2>
                                </div>
                                <div class="flex-grow">
                                    <p class="text-base leading-relaxed">Pour modifier le message d'accueil du site.</p>
                                    <a type="button"
                                       href="{{route("admin.editHome")}}"
                                       class="block py-2 px-4 mt-5 w-full  text-base font-semibold text-center text-white rounded-lg shadow-md transition duration-200 ease-in bg-punch-600 hover:bg-punch-700 focus:ring-punch-500 focus:ring-offset-punch-200 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                        Y aller
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="p-4 md:w-1/3">
                            <div class="flex flex-col p-8 h-full bg-gray-100 dark:bg-gray-900 rounded-lg">
                                <div class="flex items-center mb-3">
                                    <div
                                        class="inline-flex flex-shrink-0 justify-center items-center mr-3 w-8 h-8 rounded-full text-punch-500">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                        </svg>

                                    </div>
                                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 title-font">Gestion
                                        des tags</h2>
                                </div>
                                <div class="flex-grow">
                                    <p class="text-base leading-relaxed">Un tableau qui liste les différentes tags ainsi
                                        que le nombre d'actualitée aux quelles il sont liés, on peut soit le consulter
                                        ou le modifier.</p>

                                    <a type="button"
                                       href="{{route("admin.tags.index")}}"
                                       class="block py-2 px-4 mt-5 w-full  text-base font-semibold text-center text-white rounded-lg shadow-md transition duration-200 ease-in bg-punch-600 hover:bg-punch-700 focus:ring-punch-500 focus:ring-offset-punch-200 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                        Y aller
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</x-app-layout>
