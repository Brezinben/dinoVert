<x-app-layout>
    <x-slot name="header">
        <h2 class="header-title">
            {{ __('Qui sommes nous ?') }}
        </h2>
    </x-slot>
    <div class="container mx-auto">


        <section id="team" class="gap-8 md:flex">
            <div class="mb-8 text-center md:w-1/2 md:mb-0">
                <img class="object-cover w-48 h-48 mx-auto -mb-24 rounded-full"
                     src="https://images.unsplash.com/photo-1590895178913-3d3472310a47?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1498&q=80"
                     alt=" Médhi Khaman"/>
                <div class="px-8 pt-32 pb-10 text-gray-400 bg-white dark:bg-gray-900  rounded-lg shadow-lg">
                    <h3 class="mb-3 text-xl text-gray-800 dark:text-gray-100 font-title">
                        Médhi Khaman
                    </h3>
                    <p class="font-body">
                        Conseiller immobilier, spécialiser dans les maisons et les appartements
                    </p>
                    <p class="mb-4 text-sm font-body">
                        Comme Leroy Merlin, faut qu'mes envies prennent vie
                    </p>
                    <a class="font-body text-dino-500 hover:text-dino-800  dark:text-gray-200  dark:hover:text-gray-50"
                       href="medhi-khaman@superDino.fr">
                        medhi-khaman@superDino.fr
                    </a>
                </div>
            </div>
            <div class="text-center md:w-1/2">
                <img class="object-cover w-48 h-48 mx-auto -mb-24 rounded-full"
                     src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80"
                     alt="Colette Stérole"/>
                <div class="px-8 pt-32 pb-10 text-gray-400 bg-white dark:bg-gray-900 rounded-lg shadow-lg">
                    <h3 class="mb-3 text-xl text-gray-800 font-title dark:text-gray-100">
                        Colette Stérole
                    </h3>
                    <p class="font-body">
                        CEO, Webmaster et Conseillère
                    </p>
                    <p class="mb-4 text-sm font-body">
                        J'adore les dinosaures, et les maisons donc je vends des enclos !
                    </p>
                    <a class="font-body text-dino-500 hover:text-dino-800  dark:text-gray-200  dark:hover:text-gray-50"
                       href="colette.stérole@superDino.fr">
                        colette.stérole@superDino.fr
                    </a>
                </div>
            </div>
        </section>

        <section id="testimonial" class="text-gray-600  dark:text-gray-200  body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="w-full mx-auto text-center xl:w-1/2 lg:w-3/4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                         class="inline-block w-8 h-8 mb-8 text-gray-400" viewBox="0 0 975.036 975.036">
                        <path
                            d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                    </svg>
                    <p class="text-lg leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown
                        taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY
                        tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware. Man bun next level
                        coloring book skateboard four loko knausgaard. Kitsch keffiyeh master cleanse direct trade
                        indigo juice before they sold out gentrify plaid gastropub normcore XOXO 90's pickled cindigo
                        jean shorts. Slow-carb next level shoindigoitch ethical authentic, yr scenester sriracha forage
                        franzen organic drinking vinegar.</p>
                    <span class="inline-block w-10 h-1 mt-8 mb-6 rounded bg-dino-500"></span>
                    <h2 class="text-sm font-medium tracking-wider dark:text-gray-100 text-gray-900 title-font">HOLDEN
                        CAULFIELD</h2>
                    <p class="text-gray-500 dark:text-gray-300">Senior Product Designer</p>
                </div>
            </div>
        </section>

        <section id="stats" class="max-w-xl px-4 py-4 mx-auto">
            <div class="sm:grid sm:h-32 sm:grid-flow-row sm:gap-4 sm:grid-cols-3">
                <div id="jh-stats-positive"
                     class="flex flex-col justify-center px-4 py-4 bg-white dark:bg-gray-900 border dark:border-black border-gray-300 rounded">
                    <div>
                        <div>
                            <p class="flex items-center justify-end text-green-500 text-md">
                                <span class="font-bold">56%</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current"
                                     viewBox="0 0 24 24">
                                    <path class="heroicon-ui"
                                          d="M20 15a1 1 0 002 0V7a1 1 0 00-1-1h-8a1 1 0 000 2h5.59L13 13.59l-3.3-3.3a1 1 0 00-1.4 0l-6 6a1 1 0 001.4 1.42L9 12.4l3.3 3.3a1 1 0 001.4 0L20 9.4V15z"/>
                                </svg>
                            </p>
                        </div>
                        <p class="text-3xl font-semibold text-center text-gray-800 dark:text-gray-400">432</p>
                        <p class="text-lg text-center  text-gray-500 dark:text-gray-300">Nouveau Client</p>
                    </div>
                </div>

                <div id="jh-stats-negative"
                     class="flex flex-col justify-center px-4 py-4 mt-4 bg-white dark:bg-gray-900 border dark:border-black border-gray-300 rounded sm:mt-0">
                    <div>
                        <div>
                            <p class="flex items-center justify-end text-green-500 text-md">
                                <span class="font-bold">82%</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current"
                                     viewBox="0 0 24 24">
                                    <path class="heroicon-ui"
                                          d="M20 15a1 1 0 002 0V7a1 1 0 00-1-1h-8a1 1 0 000 2h5.59L13 13.59l-3.3-3.3a1 1 0 00-1.4 0l-6 6a1 1 0 001.4 1.42L9 12.4l3.3 3.3a1 1 0 001.4 0L20 9.4V15z"/>
                                </svg>
                            </p>
                        </div>
                        <p class="text-3xl font-semibold text-center text-gray-800 dark:text-gray-400 ">1800</p>
                        <p class="text-lg text-center  text-gray-500 dark:text-gray-300">Client statifait</p>
                    </div>
                </div>

                <div id="jh-stats-neutral"
                     class="flex flex-col justify-center px-4 py-4 mt-4 bg-white dark:bg-gray-900 border dark:bg-black dark:border-black border-gray-300 rounded sm:mt-0">
                    <div>
                        <div>
                            <p class="flex items-center justify-end  text-gray-500 dark:text-gray-300 text-md">
                                <span class="font-bold">0</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current"
                                     viewBox="0 0 24 24">
                                    <path class="heroicon-ui" d="M17 11a1 1 0 010 2H7a1 1 0 010-2h10z"/>
                                </svg>
                            </p>
                        </div>
                        <p class="text-3xl font-semibold text-center text-gray-800 dark:text-gray-400 ">0</p>
                        <p class="text-lg text-center  text-gray-500 dark:text-gray-300">Mécontentement</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-app-layout>
