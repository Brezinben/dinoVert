<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tight text-dino-500">
            {{$property->title.' - '.number_format($property->price, 0, ',', ' ')." €"}}
        </h2>
    </x-slot>

    <div class="container flex flex-col justify-center items-center  px-5 my-3 mx-auto text-gray-600">
        <div class="flex flex-col justify-center items-center">
            <div
                class="relative mx-auto max-w-4xl"
                x-data="{ activeSlide: 0, slides: {{$property->images->map(fn($images, $key) => [$key,$images->url,$images->alternative])}} }">
                <!-- Slides -->
                <template x-for="slide in slides" :key="slide[0]">
                    <img x-show="activeSlide === slide[0]" class="rounded-lg object-cover "
                         style="width: 50rem;height: 30rem;" :src="slide[1]"
                         :alt=slide[2]>
                </template>

                <!-- Prev/Next Arrows -->
                <div class="flex absolute inset-0">
                    <div class="flex justify-start items-center w-1/2">
                        <button
                            class="-ml-6 w-12 h-12 font-bold text-gray-800 bg-gray-50 rounded-full shadow-lg hover:text-orange-500 hover:shadow-lg"
                            x-on:click="activeSlide = (activeSlide === 0) ? slides.length-1 : activeSlide - 1">
                            &#8592;
                        </button>
                    </div>
                    <div class="flex justify-end items-center w-1/2">
                        <button
                            class="-mr-6 w-12 h-12 font-bold text-gray-800 bg-gray-50 rounded-full shadow-lg hover:text-orange-500 hover:shadow"
                            x-on:click="activeSlide = (activeSlide == slides.length-1) ? 0 : activeSlide + 1">
                            &#8594;
                        </button>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex absolute justify-center items-center px-4 w-full">
                    <template x-for="slide in slides" :key="slide[0]">
                        <button
                            class="overflow-hidden flex-1 mx-2 mt-4 mb-0 w-4 h-2 rounded-full transition-colors duration-200 ease-out hover:bg-dino-600 hover:shadow-lg"
                            :class="{
                                  'bg-dino-200': activeSlide === slide[0],
                                  'bg-gray-200': activeSlide !== slide[0]
                              }"
                            x-on:click="activeSlide = slide[0]"
                        ></button>
                    </template>
                </div>
            </div>
        </div>
        <div class="mt-10 w-full text-center lg:w-2/3">
            <h1 class="mb-4 text-3xl font-medium text-gray-900 title-font sm:text-4xl">{{$property->title}}</h1>
            <p class="mb-8 leading-relaxed">{{$property->description}}</p>
            <div class="flex flex-wrap justify-center -m-4 text-center">
                <div class="p-4 w-full md:w-1/3 2xl:w-1/4 sm:w-1/2">
                    <div class="py-6 px-4 rounded-lg border-2 border-gray-200">
                        <svg class="inline-block mb-3 w-12 h-12 text-punch-500" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="7" height="7"/>
                            <rect x="14" y="3" width="7" height="7"/>
                            <rect x="14" y="14" width="7" height="7"/>
                            <rect x="3" y="14" width="7" height="7"/>
                        </svg>
                        <h2 class="text-3xl font-medium text-gray-900 title-font">{{$property->rooms}}</h2>
                        <p class="leading-relaxed">Pièce</p>
                    </div>
                </div>
                <div class="p-4 w-full md:w-1/3 2xl:w-1/4 sm:w-1/2">
                    <div class="py-6 px-4 rounded-lg border-2 border-gray-200">
                        <svg class="inline-block mb-3 w-12 h-12 text-dino-500" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>

                        <h2 class="text-3xl font-medium text-gray-900 title-font">{{$property->state}}</h2>
                        <p class="leading-relaxed">Etat</p>
                    </div>
                </div>
                <div class="p-4 w-full md:w-1/3 2xl:w-1/4 sm:w-1/2">
                    <div class="py-6 px-4 rounded-lg border-2 border-gray-200">
                        <svg class="inline-block mb-3 w-12 h-12 text-punch-500" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                        </svg>
                        <h2 class="text-3xl font-medium text-gray-900 title-font">{{$property->constructionYear}}</h2>
                        <p class="leading-relaxed">Construction</p>
                    </div>
                </div>
                <div class="p-4 w-full md:w-1/3 2xl:w-1/4 sm:w-1/2">
                    <div class="py-6 px-4 rounded-lg border-2 border-gray-200">
                        <svg class="inline-block mb-3 w-12 h-12 text-dino-500" fill="none" stroke="currentColor"
                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <h2 class="text-3xl font-medium text-gray-900 title-font">{{$property->postcode}}</h2>
                        <p class="leading-relaxed">{{$property->town}}</p>
                    </div>
                </div>
                <div class="p-4 w-full md:w-1/3 2xl:w-1/4 sm:w-1/2">
                    <div class="py-6 px-4 rounded-lg border-2 border-gray-200">
                        <svg class="inline-block mb-3 w-12 h-12 text-punch-500" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"/>
                            <line x1="12" y1="22" x2="12" y2="15.5"/>
                            <polyline points="22 8.5 12 15.5 2 8.5"/>
                            <polyline points="2 15.5 12 8.5 22 15.5"/>
                            <line x1="12" y1="2" x2="12" y2="8.5"/>
                        </svg>
                        <h2 class="text-3xl font-medium text-gray-900 title-font">{{number_format($property->surface, 0, ',', ' ')." m2"}}</h2>
                        <p class="leading-relaxed">Surface</p>
                    </div>
                </div>
                <div class="p-4 w-full md:w-1/3 2xl:w-1/4 sm:w-1/2">
                    <div class="py-6 px-4 rounded-lg border-2 border-gray-200">
                        <svg class="inline-block mb-3 w-12 h-12 text-dino-500" width="24" height="24"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z"/>
                            <path d="M3 21v-13l9-4l9 4v13"/>
                            <path d="M13 13h4v8h-10v-6h6"/>
                            <path d="M13 21v-9a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v3"/>
                        </svg>
                        <h2 class="text-3xl font-medium text-gray-900 title-font">{{$property->type->title}}</h2>
                        <p class="leading-relaxed">Type</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
