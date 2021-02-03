<x-app-layout>
    <x-slot name="header">

        <h2 class="text-2xl font-bold leading-tight text-dino-500">
            {{ __('Contacter nous !') }}
        </h2>
    </x-slot>
    <div class="container mx-auto">
        <section class="text-gray-600 body-font relative">
            <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
                <div
                    class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                    <iframe class="absolute inset-0" style="filter: grayscale(0) contrast(1.0) opacity(0.8);"
                            title="map" marginheight="0" marginwidth="0" scrolling="no"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d91421.73326530763!2d-79.61518662056852!3d43.805550007753745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3649ab19d43e40de!2sIsla%20Nublar!5e1!3m2!1sfr!2sfr!4v1612185755563!5m2!1sfr!2sfr"
                            width="100%" height="100%" frameborder="0"></iframe>

                    <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                        <div class="lg:w-1/2 px-6">
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESSE</h2>
                            <p class="mt-1">6 Place Jacques Favrot, 72 666 Isla Nublar sur Sarthe, France</p>
                        </div>
                        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                            <a class="text-dino-500 leading-relaxed">dino-vert@superDino.fr</a>
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">
                                TELEPHONE</h2>
                            <p class="leading-relaxed">06 66 66 66 66</p>
                        </div>
                    </div>
                </div>

                <form action="{{route('pages.storeContact')}}" method="post"
                      id="storeContactForm"
                      class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0 px-6 rounded-lg shadow">
                    @csrf
                    @method('POST')
                    <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                    <p class="leading-relaxed mb-5 text-gray-600">Vous voulez nous faire part d'un remarque allez-y !
                        Nos dinosaures sont à vos soins.</p>
                    <div class="relative mb-4">
                        <label for="name" class="leading-7 text-sm text-gray-600">Prénom</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required
                               class="w-full bg-white rounded border border-gray-300 focus:border-dino-500 focus:ring-2 focus:ring-dino-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        @error('name')
                        <div x-data="{ openError: true }"
                             x-show="openError"
                             class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg"
                             role="alert">
                            <p>{{ $message }}</p>
                            <span class="absolute inset-y-0 right-0 flex items-center mr-4"
                                  @click="openError = !openError">
                     <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path
                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                             clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </span>
                        </div>
                        @enderror
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                               class="w-full bg-white rounded border border-gray-300 focus:border-dino-500 focus:ring-2 focus:ring-dino-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        @error('email')
                        <div x-data="{ openError: true }"
                             x-show="openError"
                             class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg"
                             role="alert">
                            <p>{{ $message }}</p>
                            <span class="absolute inset-y-0 right-0 flex items-center mr-4"
                                  @click="openError = !openError">
                     <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path
                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                             clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </span>
                        </div>
                        @enderror
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                        <textarea id="message" name="message" required
                                  class="w-full bg-white rounded border border-gray-300 focus:border-dino-500 focus:ring-2 focus:ring-dino-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ old('message') }}</textarea>
                        @error('message')
                        <div x-data="{ openError: true }"
                             x-show="openError"
                             class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg"
                             role="alert">
                            <p>{{ $message }}</p>
                            <span class="absolute inset-y-0 right-0 flex items-center mr-4"
                                  @click="openError = !openError">
                     <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path
                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                             clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </span>
                        </div>
                        @enderror
                    </div>

                    <div class="flex space-x-10 items-center mb-4">
                        <div
                            class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                            <input type="checkbox" name="CGU" id="CGU" required

                                   class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                            <label for="CGU"
                                   class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                        </div>
                        <label for="CGU" class="text-sm text-gray-700">J'accepte les CGU</label>
                    </div>

                    <div class="flex space-x-10 items-center mb-4">
                        <div
                            class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                            <input type="checkbox" name="wantNewsletter" id="wantNewsletter"
                                   class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                            <label for="wantNewsletter"
                                   class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                        </div>
                        <label for="wantNewsletter" class="text-sm text-gray-700">S'abonner à la newsletter</label>
                    </div>
                    @error('CGU')
                    <div x-data="{ openError: true }"
                         x-show="openError"
                         class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg"
                         role="alert">
                        <p>{{ $message }}</p>
                        <span class="absolute inset-y-0 right-0 flex items-center mr-4" @click="openError = !openError">
                     <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path
                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                             clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </span>
                    </div>
                    @enderror

                    <button
                        type="submit"
                        onclick="event.preventDefault();document.getElementById('storeContactForm').submit();"
                        class="text-white bg-dino-500 border-0 py-2 px-6 focus:outline-none hover:bg-dino-600 rounded text-lg">
                        Envoyer votre message
                    </button>
                    <p class=" text-gray-500 mt-3">Nous essayerons de vous répondre le plus rapidement possible.</p>
                </form>

            </div>
        </section>
    </div>
</x-app-layout>
