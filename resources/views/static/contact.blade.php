<x-app-layout>
    <x-slot name="header">

        <h2 class="text-2xl font-bold leading-tight text-dino-500">
            {{ __('Contacter nous !') }}
        </h2>
    </x-slot>
    <div class="container mx-auto">
        <section class="relative text-gray-600 body-font">
            <div class="container flex flex-wrap px-5 py-24 mx-auto sm:flex-nowrap">
                <div
                    class="relative flex items-end justify-start p-10 overflow-hidden bg-gray-300 rounded-lg lg:w-2/3 md:w-1/2 sm:mr-10">
                    <iframe class="absolute inset-0" style="filter: grayscale(0) contrast(1.0) opacity(0.8);"
                            title="map" marginheight="0" marginwidth="0" scrolling="no"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d91421.73326530763!2d-79.61518662056852!3d43.805550007753745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3649ab19d43e40de!2sIsla%20Nublar!5e1!3m2!1sfr!2sfr!4v1612185755563!5m2!1sfr!2sfr"
                            width="100%" height="100%" frameborder="0"></iframe>

                    <div class="relative flex flex-wrap py-6 bg-white rounded shadow-md">
                        <div class="px-6 lg:w-1/2">
                            <h2 class="text-xs font-semibold tracking-widest text-gray-900 title-font">ADDRESSE</h2>
                            <p class="mt-1">6 Place Jacques Favrot, 72 666 Isla Nublar sur Sarthe, France</p>
                        </div>
                        <div class="px-6 mt-4 lg:w-1/2 lg:mt-0">
                            <h2 class="text-xs font-semibold tracking-widest text-gray-900 title-font">EMAIL</h2>
                            <a class="leading-relaxed text-dino-500">dino-vert@superDino.fr</a>
                            <h2 class="mt-4 text-xs font-semibold tracking-widest text-gray-900 title-font">
                                TELEPHONE</h2>
                            <p class="leading-relaxed">06 66 66 66 66</p>
                        </div>
                    </div>
                </div>

                <form action="{{route('pages.storeContact')}}" method="post"
                      id="storeContactForm"
                      class="flex flex-col w-full px-6 mt-8 bg-white rounded-lg shadow lg:w-1/3 md:w-1/2 md:ml-auto md:py-8 md:mt-0">
                    @csrf
                    @method('POST')
                    <h2 class="mb-1 text-lg font-medium text-gray-900 title-font">Feedback</h2>
                    <p class="mb-5 leading-relaxed text-gray-600">Vous voulez nous faire part d'un remarque allez-y !
                        Nos dinosaures sont à vos soins.</p>
                    <div class="relative mb-4">
                        <label for="name" class="text-sm leading-7 text-gray-600">Prénom</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required
                               class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-dino-500 focus:ring-2 focus:ring-dino-200">
                        <x-error-form input="name"></x-error-form>
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="text-sm leading-7 text-gray-600">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                               class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-dino-500 focus:ring-2 focus:ring-dino-200">
                        <x-error-form input="email"></x-error-form>
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="text-sm leading-7 text-gray-600">Message</label>
                        <textarea id="message" name="message" required
                                  class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none resize-none focus:border-dino-500 focus:ring-2 focus:ring-dino-200">{{ old('message') }}</textarea>
                        <x-error-form input="message"></x-error-form>
                    </div>

                    <div class="flex items-center mb-4 space-x-10">
                        <div
                            class="relative inline-block w-10 mr-2 align-middle transition duration-200 ease-in select-none">
                            <input type="checkbox" name="CGU" id="CGU" required

                                   class="absolute block w-6 h-6 bg-white border-4 rounded-full appearance-none cursor-pointer toggle-checkbox"/>
                            <label for="CGU"
                                   class="block h-6 overflow-hidden bg-gray-300 rounded-full cursor-pointer toggle-label"></label>
                        </div>
                        <label for="CGU" class="text-sm text-gray-700">J'accepte les CGU</label>
                    </div>

                    <div class="flex items-center mb-4 space-x-10">
                        <div
                            class="relative inline-block w-10 mr-2 align-middle transition duration-200 ease-in select-none">
                            <input type="checkbox" name="wantNewsletter" id="wantNewsletter"
                                   class="absolute block w-6 h-6 bg-white border-4 rounded-full appearance-none cursor-pointer toggle-checkbox"/>
                            <label for="wantNewsletter"
                                   class="block h-6 overflow-hidden bg-gray-300 rounded-full cursor-pointer toggle-label"></label>
                        </div>
                        <label for="wantNewsletter" class="text-sm text-gray-700">S'abonner à la newsletter</label>
                    </div>
                    <x-error-form input="CGU"></x-error-form>

                    <button
                        type="submit"
                        onclick="event.preventDefault();document.getElementById('storeContactForm').submit();"
                        class="px-6 py-2 text-lg text-white border-0 rounded bg-dino-500 focus:outline-none hover:bg-dino-600">
                        Envoyer votre message
                    </button>
                    <p class="mt-3 text-gray-500 ">Nous essayerons de vous répondre le plus rapidement possible.</p>
                </form>

            </div>
        </section>
    </div>
</x-app-layout>
