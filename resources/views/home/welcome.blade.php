<x-app-layout>
    <x-slot name="header">
        <h2 class="header-title">{{'Accueil'}}</h2>

    </x-slot>
    <div class="container mx-auto">
        <div class="text-dino-500 dark:text-gray-50 font-montserrat mb-5">
            {!!$text!!}
        </div>
        @include('home.content-welcome')
    </div>
</x-app-layout>
