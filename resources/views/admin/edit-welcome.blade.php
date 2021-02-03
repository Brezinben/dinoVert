<x-app-layout>
    <x-slot name="header">

        <div class="flex justify-between ">
            <h2 class="header-title">{{'Accueil'}}</h2>
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
                <x-error-form input="wysiwygTextHome"></x-error-form>
                @csrf
                <textarea id="wysiwygTextHome" name="wysiwygTextHome">
                          {{ $content->wysiwyg_text }}
                 </textarea>
            </form>
        </div>
        @include('content-welcome')
    </div>
    @include('layouts.script.tinymceScript')
</x-app-layout>
