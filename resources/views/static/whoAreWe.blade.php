<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tight text-dino-500">
            {{ __('Qui sommes nous ?') }}
        </h2>
    </x-slot>
    <div class="container mx-auto">


        <section id="team" class="md:flex gap-8">
            <div class="md:w-1/2 text-center mb-8 md:mb-0">
                <img class="w-48 h-48 rounded-full mx-auto -mb-24"
                     src="https://source.unsplash.com/user/erondu/1600x900" alt="Avatar Jacky"/>
                <div class="bg-white shadow-lg rounded-lg px-8 pt-32 pb-10 text-gray-400">
                    <h3 class="font-title text-gray-800 text-xl mb-3">
                        Jacky Pout
                    </h3>
                    <p class="font-body">
                        FullStack Engineer
                    </p>
                    <p class="font-body text-sm mb-4">
                        He love caramel and he hate PHP
                    </p>
                    <a class="font-body text-blue-500 hover:text-gray-800" href="#">
                        Jacky@poute.com
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 text-center">
                <img class="w-48 h-48 rounded-full mx-auto -mb-24"
                     src="https://source.unsplash.com/user/davidprspctive/1600x900" alt="Avatar Damien Marley"/>
                <div class="bg-white shadow-lg rounded-lg px-8 pt-32 pb-10 text-gray-400">
                    <h3 class="font-title text-gray-800 text-xl mb-3">
                        Damien Marley
                    </h3>
                    <p class="font-body">
                        CEO
                    </p>
                    <p class="font-body text-sm mb-4">
                        He&#x27;s fun and listen everyday Bob Marley
                    </p>
                    <a class="font-body text-blue-500 hover:text-gray-800" href="mailto:dino@siete.pm">
                        Damien@marley.com
                    </a>
                </div>
            </div>
        </section>

        <section id="testimonial" class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                         class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
                        <path
                            d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                    </svg>
                    <p class="leading-relaxed text-lg">Edison bulb retro cloud bread echo park, helvetica stumptown
                        taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY
                        tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware. Man bun next level
                        coloring book skateboard four loko knausgaard. Kitsch keffiyeh master cleanse direct trade
                        indigo juice before they sold out gentrify plaid gastropub normcore XOXO 90's pickled cindigo
                        jean shorts. Slow-carb next level shoindigoitch ethical authentic, yr scenester sriracha forage
                        franzen organic drinking vinegar.</p>
                    <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
                    <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HOLDEN CAULFIELD</h2>
                    <p class="text-gray-500">Senior Product Designer</p>
                </div>
            </div>
        </section>
        <!-- This is an example component -->
        <section id="stats" class="max-w-xl px-4 py-4 mx-auto">
            <div class="sm:grid sm:h-32 sm:grid-flow-row sm:gap-4 sm:grid-cols-3">
                <div id="jh-stats-positive"
                     class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                    <div>
                        <div>
                            <p class="flex items-center justify-end text-green-500 text-md">
                                <span class="font-bold">6%</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current"
                                     viewBox="0 0 24 24">
                                    <path class="heroicon-ui"
                                          d="M20 15a1 1 0 002 0V7a1 1 0 00-1-1h-8a1 1 0 000 2h5.59L13 13.59l-3.3-3.3a1 1 0 00-1.4 0l-6 6a1 1 0 001.4 1.42L9 12.4l3.3 3.3a1 1 0 001.4 0L20 9.4V15z"/>
                                </svg>
                            </p>
                        </div>
                        <p class="text-3xl font-semibold text-center text-gray-800">43</p>
                        <p class="text-lg text-center text-gray-500">New Tickets</p>
                    </div>
                </div>

                <div id="jh-stats-negative"
                     class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                    <div>
                        <div>
                            <p class="flex items-center justify-end text-red-500 text-md">
                                <span class="font-bold">6%</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current"
                                     viewBox="0 0 24 24">
                                    <path class="heroicon-ui"
                                          d="M20 9a1 1 0 012 0v8a1 1 0 01-1 1h-8a1 1 0 010-2h5.59L13 10.41l-3.3 3.3a1 1 0 01-1.4 0l-6-6a1 1 0 011.4-1.42L9 11.6l3.3-3.3a1 1 0 011.4 0l6.3 6.3V9z"/>
                                </svg>
                            </p>
                        </div>
                        <p class="text-3xl font-semibold text-center text-gray-800">43</p>
                        <p class="text-lg text-center text-gray-500">New Tickets</p>
                    </div>
                </div>

                <div id="jh-stats-neutral"
                     class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                    <div>
                        <div>
                            <p class="flex items-center justify-end text-gray-500 text-md">
                                <span class="font-bold">0%</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current"
                                     viewBox="0 0 24 24">
                                    <path class="heroicon-ui" d="M17 11a1 1 0 010 2H7a1 1 0 010-2h10z"/>
                                </svg>
                            </p>
                        </div>
                        <p class="text-3xl font-semibold text-center text-gray-800">43</p>
                        <p class="text-lg text-center text-gray-500">New Tickets</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-app-layout>
