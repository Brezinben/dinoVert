<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DinoVert') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased bg-gray-100">
<x-jet-banner/>

<div class="min-h-screen ">
    @livewire('navigation-menu')

    <!-- Page Heading -->
    <header class="">
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>
    <div>
        @if (session('error'))
            <div class="relative px-6 py-4 mb-4 text-white bg-red-500 border-0 rounded" x-data="{ open: true }"
                 x-show="open">
        <span class="inline-block mr-5 text-xl align-middle ">
        <svg class="w-8 h-8 text-red-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
            <line
                x1="9" y1="9" x2="15" y2="15"/>
            <line x1="15" y1="9" x2="9" y2="15"/>
        </svg>
        </span>
                <span class="inline-block mr-8 align-middle">
    <b> {{ session('error') }}</b>
            </span>
                <button @click="open = !open"
                        class="absolute top-0 right-0 mt-4 mr-6 text-2xl font-semibold leading-none bg-transparent outline-none focus:outline-none">
                    <span>×</span>
                </button>
            </div>
        @endif
        @if (session('success'))
            <div class="relative px-6 py-4 mb-4 text-white bg-green-500 border-0 rounded" x-data="{ open: true }"
                 x-show="open">
  <span class="inline-block mr-5 text-xl align-middle ">
    <svg class="w-8 h-8 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
         stroke-linecap="round" stroke-linejoin="round">  <polyline points="20 6 9 17 4 12"/></svg>
        </span>
                <span class="inline-block mr-8 align-middle">
    <b> {{ session('success') }}</b>
            </span>
                <button @click="open = !open"
                        class="absolute top-0 right-0 mt-4 mr-6 text-2xl font-semibold leading-none bg-transparent outline-none focus:outline-none">
                    <span>×</span>
                </button>
            </div>
        @endif
        @if (session('info'))
            <div class="relative px-6 py-4 mb-4 text-white bg-blue-500 border-0 rounded" x-data="{ open: true }"
                 x-show="open">
  <span class="inline-block mr-5 text-xl align-middle ">
    <svg class="w-8 h-8 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
         stroke-linecap="round" stroke-linejoin="round">  <circle cx="12" cy="12" r="10"/>  <line x1="12" y1="16"
                                                                                                  x2="12" y2="12"/>  <line
            x1="12" y1="8" x2="12.01" y2="8"/></svg>
        </span>
                <span class="inline-block mr-8 align-middle">
    <b> {{ session('info') }}</b>
            </span>
                <button @click="open = !open"
                        class="absolute top-0 right-0 mt-4 mr-6 text-2xl font-semibold leading-none bg-transparent outline-none focus:outline-none">
                    <span>×</span>
                </button>
            </div>
        @endif
        @if (session('warning'))
            <div class="relative px-6 py-4 mb-4 text-white bg-yellow-500 border-0 rounded" x-data="{ open: true }"
                 x-show="open">
  <span class="inline-block mr-5 text-xl align-middle ">
    <svg class="w-8 h-8 text-yellow-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
         stroke-linecap="round" stroke-linejoin="round">  <path
            d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>  <line
            x1="12" y1="9" x2="12" y2="13"/>  <line x1="12" y1="17" x2="12.01" y2="17"/></svg>
        </span>
                <span class="inline-block mr-8 align-middle">
    <b> {{ session('warning') }}</b>
            </span>
                <button @click="open = !open"
                        class="absolute top-0 right-0 mt-4 mr-6 text-2xl font-semibold leading-none bg-transparent outline-none focus:outline-none">
                    <span>×</span>
                </button>
            </div>
        @endif
    </div>


    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>

@stack('modals')
<footer class="bg-dino-500 dark:bg-gray-800 w-full py-8">
    <div class="max-w-screen-xl mx-auto px-4">
        <ul class="max-w-screen-md mx-auto text-lg font-light flex flex-wrap justify-around">
            <li class="my-2">
                <a class="text-footer" href="{{route('posts.index')}}">Actualités</a>
            </li>
            <li class="my-2">
                <a class="text-footer" href="{{route('pages.contact')}}">Contact</a>
            </li>
            <li class="my-2">
                <a class="text-footer" href="{{route('pages.legalNotices')}}">Mentions Légales</a>
            </li>
        </ul>
        <div class="pt-8 flex max-w-xs mx-auto items-center justify-between">
            <a href="#"
               class="text-gray-400 hover:text-gray-800 dark:hover:text-white hover:text-gray-800 transition-colors duration-200">
                <svg width="20" height="20" fill="currentColor"
                     class="text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200"
                     viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1343 12v264h-157q-86 0-116 36t-30 108v189h293l-39 296h-254v759h-306v-759h-255v-296h255v-218q0-186 104-288.5t277-102.5q147 0 228 12z">
                    </path>
                </svg>
            </a>
            <a href="#"
               class="text-gray-400 hover:text-gray-800 dark:hover:text-white hover:text-gray-800 transition-colors duration-200">
                <svg width="20" height="20" fill="currentColor"
                     class="text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200"
                     viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z">
                    </path>
                </svg>
            </a>
            <a href="#"
               class="text-gray-400 hover:text-gray-800 dark:hover:text-white hover:text-gray-800 transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                     class="text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200"
                     viewBox="0 0 1792 1792">
                    <path
                        d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z">
                    </path>
                </svg>
            </a>
            <a href="#"
               class="text-gray-400 hover:text-gray-800 dark:hover:text-white hover:text-gray-800 transition-colors duration-200">
                <svg width="20" height="20" fill="currentColor"
                     class="text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200"
                     viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z">
                    </path>
                </svg>
            </a>
        </div>
        <div class="text-center pt-10  sm:pt-12 font-light flex flex-col items-center justify-center">
            <form method="POST" action="{{route('pages.newsletter')}}"
                  class="flex w-full max-w-lg flex-col space-y-4 md:flex-row space-x-3">
                @csrf
                <div class=" relative ">
                    <input type="email"
                           name="newsletterMail"
                           id="newsletterMail"
                           value="{{old('newsletterMail')}}"
                           class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent"
                           placeholder="Email"/>
                </div>
                <button
                    class="flex-shrink-0 bg-dino-800 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-dino-900 focus:outline-none focus:ring-2 focus:ring-dino-500 focus:ring-offset-2 focus:ring-offset-dino-200"
                    type="submit">
                    S'abonner à la newsletter
                </button>
            </form>
            @error('newsletterMail')
            <div class="text-red-500 text-lg">{{ $message }}</div>
            @enderror
        </div>
        <div
            class="text-center text-footer mt-5">
            Created by Brezinben with <a href="{{route('login')}}">❤️</a>
        </div>
    </div>
</footer>
@livewireScripts
</body>
</html>
