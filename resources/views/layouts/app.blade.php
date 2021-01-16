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
<body class="font-sans antialiased">
<x-jet-banner/>

<div class="min-h-screen bg-gray-100">
    @livewire('navigation-menu')

    <!-- Page Heading -->
    <header class="">
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>

@stack('modals')
<footer class="relative bottom-0 mt-20 text-white bg-gray-100">
    <svg id="bg-svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg"
         class="absolute bottom-0 transition duration-300 ease-in-out delay-150">
        <path
            d="M 0,400 C 0,400 0,200 0,200 C 93.39285714285714,216.57142857142856 186.78571428571428,233.14285714285714 318,225 C 449.2142857142857,216.85714285714286 618.2499999999999,183.99999999999997 745,184 C 871.7500000000001,184.00000000000003 956.2142857142858,216.85714285714283 1065,225 C 1173.7857142857142,233.14285714285717 1306.892857142857,216.57142857142858 1440,200 C 1440,200 1440,400 1440,400 Z"
            stroke="none" stroke-width="0" fill="#455d6aff"
            class="transition-all duration-300 ease-in-out delay-150"></path>
    </svg>
    <div class="relative flex pb-10 mx-auto space-x-40 w-min">
        <a href="{{route('posts.index')}}"
           class="px-2 py-1 text-lg font-bold text-white rounded font-montserrat dark:text-gray-500 hover:bg-gray-900 hover:text-gray-100 md:mx-2">Actualité</a>
        <a href="{{route('pages.newsletter')}}"
           class="px-2 py-1 text-lg font-bold text-white rounded  font-montserrat dark:text-gray-500 hover:bg-gray-900 hover:text-gray-100 md:mx-2">Newsletter</a>
        <a href="{{route('pages.legal')}}"
           class="px-2 py-1 text-lg font-bold text-white rounded w-max font-montserrat dark:text-gray-500 hover:bg-gray-900 hover:text-gray-100 md:mx-2">Mention
            Légales</a>
    </div>
    <img class="absolute block w-auto cursor-pointer  bottom-6 right-16 h-28" src="{{url('/images/logo.svg')}}"
         alt="logo"/>
</footer>
@livewireScripts
</body>
</html>
