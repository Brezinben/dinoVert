<nav
    class="relative top-0 z-10 flex flex-wrap items-center justify-between w-full p-4 bg-cover lg:flex-nowrap"
    x-data="{ isOpen: false }"
    @keydown.escape="isOpen = false"
    :class="{ 'shadow-lg bg-indigo-900' : isOpen , 'bg-gray-800' : !isOpen}"
>
    <!--Logo etc-->
    <div class="flex items-center flex-shrink-0 mr-6 text-white">
        @livewire('easter-egg', ['routeName' => Route::currentRouteName()])
    </div>
    <!--Toggle button (hidden on large screens)-->
    <button
        @click="isOpen = !isOpen"
        type="button"
        class="block px-2 text-gray-100 lg:hidden hover:text-white focus:outline-none focus:text-white"
        :class="{ 'transition transform-180': isOpen }"
    >
        <svg
            class="w-6 h-6 fill-current"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
        >
            <path
                x-show="isOpen"
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"
            />
            <path
                x-show="!isOpen"
                fill-rule="evenodd"
                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
            />
        </svg>
    </button>

    <!--Menu-->
    <div
        class="flex-grow w-full lg:flex lg:items-center lg:w-auto"
        :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }"
        @click.away="isOpen = false"
        x-show.transition="true"
    >
        <ul
            class="items-center justify-center flex-1 pt-6 text-white lg:pt-0 list-reset lg:flex lg:text-dino-500 dark:text-gray-900 font-montserrat"
        >
            <li class="mr-3">
                <a href="{{route('properties.index')}}"
                   class="flex items-center px-2 py-1 space-x-2 text-lg font-semibold rounded w-max hover:bg-dino-900 hover:text-gray-100 md:ml-2">
                    <div>Bien à vendre</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8" viewBox="0 0 48 35.963">
                        <g id="fence" transform="translate(0 -51.81)">
                            <g id="Groupe_16" data-name="Groupe 16" transform="translate(1.181 52.988)">
                                <path id="Tracé_188" data-name="Tracé 188" d="M112.56,265.471h9.53v5.9h-9.53Z"
                                      transform="translate(-101.209 -243.011)" fill="#d4a77f"/>
                                <path id="Tracé_189" data-name="Tracé 189" d="M112.56,132.831h9.53v5.9h-9.53Z"
                                      transform="translate(-101.209 -124.855)" fill="#d4a77f"/>
                                <path id="Tracé_190" data-name="Tracé 190" d="M8,132.831h6.732v5.9H8Z"
                                      transform="translate(-8 -124.855)" fill="#d4a77f"/>
                                <path id="Tracé_191" data-name="Tracé 191" d="M8,265.471h6.732v5.9H8Z"
                                      transform="translate(-8 -243.011)" fill="#d4a77f"/>
                                <path id="Tracé_192" data-name="Tracé 192"
                                      d="M53.6,93.439V62.919l4.358-3.048L62.3,62.919v30.52H53.6Z"
                                      transform="translate(-46.868 -59.859)" fill="#d4a77f"/>
                                <path id="Tracé_193" data-name="Tracé 193"
                                      d="M177.12,93.371V62.849l4.358-3.058,4.358,3.058V93.371H177.12Zm4.358-7.956a.208.208,0,1,0,.26.2.236.236,0,0,0-.26-.2Zm0-15.179a.208.208,0,1,0,.26.2.236.236,0,0,0-.26-.2Z"
                                      transform="translate(-158.653 -59.791)" fill="#d4a77f"/>
                                <path id="Tracé_194" data-name="Tracé 194" d="M236.16,265.471h9.53v5.9h-9.53Z"
                                      transform="translate(-211.391 -243.011)" fill="#d4a77f"/>
                                <path id="Tracé_195" data-name="Tracé 195" d="M359.68,132.831h6.732v5.9H359.68Z"
                                      transform="translate(-320.762 -124.855)" fill="#d4a77f"/>
                                <path id="Tracé_196" data-name="Tracé 196"
                                      d="M300.72,93.439V62.919l4.358-3.048,4.346,3.048v30.52h-8.7Zm4.358-7.955a.208.208,0,1,0,.26.2.236.236,0,0,0-.26-.2h0Zm0-15.178a.208.208,0,1,0,.26.2.236.236,0,0,0-.26-.2h0Z"
                                      transform="translate(-270.505 -59.859)" fill="#d4a77f"/>
                                <path id="Tracé_197" data-name="Tracé 197" d="M359.68,265.471h6.732v5.9H359.68Z"
                                      transform="translate(-320.762 -243.011)" fill="#d4a77f"/>
                                <path id="Tracé_198" data-name="Tracé 198" d="M236.16,132.831h9.53v5.9h-9.53Z"
                                      transform="translate(-211.391 -124.855)" fill="#d4a77f"/>
                            </g>
                            <g id="Groupe_17" data-name="Groupe 17" transform="translate(7.273 53.248)">
                                <path id="Tracé_199" data-name="Tracé 199"
                                      d="M84.088,62.035l-.968-.484v33.32h4.346V64.4Z"
                                      transform="translate(-83.12 -61.551)" fill="#c78e5b"/>
                                <path id="Tracé_200" data-name="Tracé 200"
                                      d="M207.608,62.035l-.968-.484v33.32H211V64.4Z"
                                      transform="translate(-191.906 -61.551)" fill="#c78e5b"/>
                                <path id="Tracé_201" data-name="Tracé 201"
                                      d="M331.14,62.035l-.98-.484v33.32h4.358V64.4Z"
                                      transform="translate(-300.692 -61.551)" fill="#c78e5b"/>
                            </g>
                            <g id="Groupe_18" data-name="Groupe 18" transform="translate(0 51.81)">
                                <path id="Tracé_202" data-name="Tracé 202"
                                      d="M47.08,60.293H42.712V55.841a.929.929,0,0,0-.307-.688l-3.429-3.1a.929.929,0,0,0-1.245,0l-3.429,3.1a.929.929,0,0,0-.307.688v4.451H28.363V55.841a.929.929,0,0,0-.307-.688l-3.429-3.1a.929.929,0,0,0-1.245,0l-3.429,3.1a.929.929,0,0,0-.307.688v4.451H14.005V55.841a.929.929,0,0,0-.307-.688l-3.429-3.1a.929.929,0,0,0-1.245,0L5.6,55.144a.929.929,0,0,0-.307.688v4.451H.929A.929.929,0,0,0,0,61.213v4.647a.929.929,0,0,0,.929.929H5.3v8.9H.929A.929.929,0,0,0,0,76.621v4.647a.929.929,0,0,0,.929.929H5.3v4.647a.929.929,0,0,0,.929.929h6.849a.929.929,0,0,0,.929-.929V82.2h5.641v4.647a.929.929,0,0,0,.929.929h6.849a.929.929,0,0,0,.929-.929V82.2h5.641v4.647a.929.929,0,0,0,.929.929h6.849a.929.929,0,0,0,.929-.929V82.2h4.368A.929.929,0,0,0,48,81.268V76.621a.929.929,0,0,0-.929-.929H42.7V66.8h4.368A.929.929,0,0,0,48,65.869V61.222a.929.929,0,0,0-.92-.929ZM5.26,80.357h-3.4V77.569H5.3Zm0-15.408h-3.4V62.161H5.3Zm6.849-3.717V85.9H7.156V56.25l2.5-2.268,2.5,2.258Zm7.5,19.135h-5.6V77.578h5.641Zm0-4.647h-5.6V66.8h5.641Zm0-10.762h-5.6V62.17h5.641Zm6.849-3.717V85.9H21.5V56.25L24,53.982l2.5,2.258Zm7.5,19.135H28.363V77.587H34Zm0-4.647H28.363V66.8H34Zm0-10.762H28.363V62.179H34Zm6.849-3.717V85.9H35.863V56.25l2.491-2.268,2.5,2.258Zm5.3,16.338v2.788H42.666V77.587Zm0-12.62H42.666V62.179H46.1Z"
                                      transform="translate(0 -51.81)" fill="#4c160f"/>
                                <circle id="Ellipse_10" data-name="Ellipse 10" cx="1.441" cy="1.441" r="1.441"
                                        transform="translate(8.408 10.408)" fill="#4c160f"/>
                                <circle id="Ellipse_11" data-name="Ellipse 11" cx="1.441" cy="1.441" r="1.441"
                                        transform="translate(8.408 25.536)" fill="#4c160f"/>
                                <circle id="Ellipse_12" data-name="Ellipse 12" cx="1.441" cy="1.441" r="1.441"
                                        transform="translate(22.564 10.408)" fill="#4c160f"/>
                                <circle id="Ellipse_13" data-name="Ellipse 13" cx="1.441" cy="1.441" r="1.441"
                                        transform="translate(22.564 25.536)" fill="#4c160f"/>
                                <circle id="Ellipse_14" data-name="Ellipse 14" cx="1.441" cy="1.441" r="1.441"
                                        transform="translate(36.72 10.408)" fill="#4c160f"/>
                                <circle id="Ellipse_15" data-name="Ellipse 15" cx="1.441" cy="1.441" r="1.441"
                                        transform="translate(36.72 25.536)" fill="#4c160f"/>
                            </g>
                        </g>
                    </svg>
                </a>
            </li>
            <li class="mr-3">
                <a href="{{route('posts.index')}}"
                   class="flex items-center px-2 py-1 space-x-2 text-lg font-semibold rounded w-max hover:bg-dino-900 hover:text-gray-100 md:mx-2">
                    <div>Actualité</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8" viewBox="0 0 52.033 55.285">
                        <g id="megaphone" transform="matrix(0.978, -0.208, 0.208, 0.978, -30.048, -8.994)">
                            <path id="Tracé_203" data-name="Tracé 203"
                                  d="M35.592,102.212,31.119,73.018H43.073s3.541,23.939,4.386,30.51a1.31,1.31,0,0,1-1.431,1.466l-7.561-.686c-1.819-.165-2.707-1-2.875-2.1Z"
                                  transform="translate(0 -32.671)" fill="#575b6d"/>
                            <path id="Tracé_204" data-name="Tracé 204"
                                  d="M77.812,25.635,48.293,36.554V53.541L77.812,64.46Z" transform="translate(-14.898 0)"
                                  fill="#eeefee"/>
                            <path id="Tracé_205" data-name="Tracé 205"
                                  d="M28.279,45.454A4.173,4.173,0,0,0,24.1,49.629V72.111a4.173,4.173,0,0,0,4.175,4.174H48.293V45.454Z"
                                  transform="translate(0 -14.337)" fill="#ef5261"/>
                            <path id="Tracé_206" data-name="Tracé 206"
                                  d="M90.6,23c-2.146,0-3.885.989-3.885,2.209V63.858c0,1.22,1.739,2.209,3.885,2.209s3.885-.989,3.885-2.209V25.209c0-1.22-1.739-2.209-3.885-2.209Z"
                                  transform="translate(-29.538)" fill="#ef5261"/>
                            <path id="Tracé_207" data-name="Tracé 207"
                                  d="M94.487,51.461V70.278a9.409,9.409,0,1,0,0-18.818Z"
                                  transform="translate(-31.791 -14.717)" fill="#eeefee"/>
                        </g>
                    </svg>
                </a>
            </li>
            <li class="mr-3">
                <a href="{{route('pages.whoAreWe')}}"
                   class="flex items-center px-2 py-1 space-x-2 text-lg font-semibold rounded w-max hover:bg-dino-900 hover:text-gray-100 md:mx-2">
                    <div>Qui sommes nous</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8" viewBox="0 0 48 50.902">
                        <g id="question" transform="translate(-14.14 0)">
                            <path id="Tracé_218" data-name="Tracé 218"
                                  d="M51.961,312l9.265,1.478a8.075,8.075,0,0,1,6.7,6.142l2.133,9.695H24l2.133-9.7a8.075,8.075,0,0,1,6.7-6.142L42.091,312Z"
                                  transform="translate(-8.886 -279.199)" fill="#ececec"/>
                            <g id="Groupe_23" data-name="Groupe 23" transform="translate(29.688 32.801)">
                                <path id="Tracé_219" data-name="Tracé 219"
                                      d="M257.44,312.787l-3.148,9.444-6.3-5.509L252.718,312Z"
                                      transform="translate(-238.552 -312)" fill="#b6c1ce"/>
                                <path id="Tracé_220" data-name="Tracé 220"
                                      d="M302.163,329.315H306.1l-2.041-9.7a7.871,7.871,0,0,0-6.407-6.142L288.783,312H288l9.87,5.264a4.723,4.723,0,0,1,2.395,3.177Z"
                                      transform="translate(-274.616 -312)" fill="#b6c1ce"/>
                                <path id="Tracé_221" data-name="Tracé 221"
                                      d="M152,312.787l3.148,9.444,6.3-5.509L156.718,312Z"
                                      transform="translate(-151.996 -312)" fill="#b6c1ce"/>
                            </g>
                            <path id="Tracé_222" data-name="Tracé 222"
                                  d="M209.44,280v3.148l-4.722,4.722L200,283.148V280Z"
                                  transform="translate(-166.579 -251.036)" fill="#f9e0a6"/>
                            <path id="Tracé_223" data-name="Tracé 223"
                                  d="M202.284,363.935l2.923,3.148-1.574,5.509h6.3l-1.574-5.509,2.923-3.148-4.5-3.935Z"
                                  transform="translate(-168.641 -322.477)" fill="#fb5968"/>
                            <ellipse id="Ellipse_18" data-name="Ellipse 18" cx="15.16" cy="14.167" rx="15.16"
                                     ry="14.167" transform="translate(22.98 0.787)" fill="#92e0c0"/>
                            <path id="Tracé_224" data-name="Tracé 224"
                                  d="M237.177,8c-.4,0-.79.028-1.181.06a14.155,14.155,0,0,1,0,28.213c.39.032.782.06,1.181.06a14.167,14.167,0,1,0,0-28.333Z"
                                  transform="translate(-198.616 -7.213)" fill="#48c397"/>
                            <circle id="Ellipse_19" data-name="Ellipse 19" cx="1.574" cy="1.574" r="1.574"
                                    transform="translate(36.566 22.23)" fill="#ececec"/>
                            <path id="Tracé_225" data-name="Tracé 225"
                                  d="M59.8,39.8a8.977,8.977,0,0,0-7.353-7.048l-8.562-1.428V30.087a15.6,15.6,0,1,0-11.494,0v1.236l-8.563,1.428A8.978,8.978,0,0,0,16.477,39.8L14.14,50.9h48Zm-1.607.338,1.921,9.123H55.294l-.74-6.658-1.631.181.719,6.477h-11.6L40.683,44.5l1.919-2.56L45.1,44.123l3.452-10.358,3.63.605A7.344,7.344,0,0,1,58.2,40.137ZM36.938,36.9,31.96,41.261,29.37,33.492l3.562-.594ZM43.347,32.9l3.562.594-2.589,7.769L39.341,36.9ZM38.1,38.069l.037.037.037-.037,3.186,2.788-2.484,3.31,1.456,5.093H35.943L37.4,44.168l-2.484-3.31ZM24.183,15.6A13.957,13.957,0,1,1,38.14,29.556,13.973,13.973,0,0,1,24.183,15.6ZM38.14,31.2a15.505,15.505,0,0,0,4.105-.566v1.048L38.14,35.784l-4.105-4.105V30.632A15.505,15.505,0,0,0,38.14,31.2ZM18.084,40.137A7.345,7.345,0,0,1,24.1,34.371l3.63-.605,3.452,10.358,2.494-2.182L35.6,44.5l-1.36,4.759h-11.6l.72-6.478L21.725,42.6l-.741,6.659H16.163Z"
                                  transform="translate(0 0)"/>
                            <path id="Tracé_226" data-name="Tracé 226"
                                  d="M204.325,49.574a2.758,2.758,0,0,1,2.755,2.755v.5a2.741,2.741,0,0,1-.807,1.949l-2.341,2.341V61.38h1.574V57.77l1.881-1.88a4.3,4.3,0,0,0,1.267-3.062v-.5a4.329,4.329,0,1,0-8.657,0v.394h1.574v-.394A2.758,2.758,0,0,1,204.325,49.574Z"
                                  transform="translate(-166.6 -43.278)"/>
                            <path id="Tracé_227" data-name="Tracé 227"
                                  d="M228.718,210.361a2.361,2.361,0,1,0-2.361,2.361A2.364,2.364,0,0,0,228.718,210.361Zm-3.148,0a.787.787,0,1,1,.787.787A.788.788,0,0,1,225.57,210.361Z"
                                  transform="translate(-188.218 -186.559)"/>
                        </g>
                    </svg>
                </a>
            </li>
            @auth()
                <li class="mr-3">
                    <a href="{{route('admin.dashboard')}}" @click="showMenu = !showMenu "
                       class="flex items-center px-2 py-1 space-x-2 text-lg font-semibold rounded w-max hover:bg-dino-900 hover:text-gray-100 md:mx-2">
                        <div>Administration</div>


                        <svg version="1.1" class="w-8 h-8" id="Capa_1" 
                            x="0px" y="0px"
                             viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;"
                             xml:space="preserve">
                                            <path style="fill:#5CB38E;" d="M292.48,307.968L292.48,307.968c-17.703-26.771-47.658-42.875-79.753-42.875h-39.453
                                        c-56.091,0-101.561,45.471-101.561,101.561v46.694c0,50.341,40.809,91.15,91.15,91.15h209.14c37.712,0,68.283-30.571,68.283-68.283
                                        v-31.779c0-37.712-30.571-68.283-68.283-68.283H344.91C323.811,336.155,304.118,325.568,292.48,307.968z"/>
                            <path style="fill:#495059;" d="M378.637,450.94c0-15.11-7.833-27.36-20.148-27.36s-20.148,12.249-20.148,27.36
                                        c0,15.11,9.02,22.067,20.148,22.067S378.637,466.05,378.637,450.94z"/>
                            <g style="opacity:0.1;">
                                <circle cx="126.88" cy="435.54" r="6.99"/>
                                <circle cx="176.57" cy="446.21" r="6.99"/>
                                <circle cx="148.14" cy="470.05" r="6.99"/>
                            </g>
                            <g>
                                <ellipse style="fill:#FFA8CB;" cx="137.51" cy="339.96" rx="17.617" ry="9.04"/>
                                <ellipse style="fill:#FFA8CB;" cx="255.78" cy="339.96" rx="17.617" ry="9.04"/>
                            </g>
                            <path style="opacity:0.05;enable-background:new    ;" d="M150.712,267.613c-45.231,10.261-78.999,50.706-78.999,99.042v46.694
                                        c0,50.341,40.809,91.15,91.15,91.15h55.31C137.622,457.632,123.968,328.8,150.712,267.613z"/>
                            <path style="fill:#FAE17C;" d="M219.361,167.658c0-26.663,27.075-29.615,27.075-70.088c0-31.582-25.602-57.184-57.184-57.184
                                        s-57.184,25.602-57.184,57.184c0,40.474,27.075,43.425,27.075,70.088H219.361z"/>
                            <circle style="fill:#495059;" cx="189.25" cy="218.68" r="25.18"/>
                            <path style="opacity:0.05;enable-background:new    ;" d="M187.645,193.545c-12.62,0.783-22.858,11.112-23.539,23.738
                                        c-0.799,14.821,11.225,27.04,25.978,26.564c0.002-0.006,0.001-0.002,0.003-0.008c-4.706-3.999-8.407-9.598-9.87-14.266
                                        c-0.607-1.937,0.865-3.902,2.895-3.902h30.33c0.641-2.221,0.992-4.566,0.992-6.994C214.435,204.238,202.281,192.636,187.645,193.545
                                        z"/>
                            <path style="fill:#959BA0;" d="M222.946,167.658h-67.389c-4.741,0-8.585,3.844-8.585,8.585v33.85c0,4.741,3.844,8.585,8.585,8.585
                                        h67.389c4.741,0,8.585-3.844,8.585-8.585v-33.85C231.531,171.501,227.688,167.658,222.946,167.658z"/>
                            <path style="opacity:0.05;enable-background:new    ;" d="M155.557,167.658c-4.741,0-8.585,3.844-8.585,8.585v33.85
                                        c0,4.741,3.844,8.585,8.585,8.585h23.981c-10.595-10.559-13.741-31.809-9.228-51.02L155.557,167.658L155.557,167.658z"/>
                            <rect x="146.97" y="185.67" style="opacity:0.1;enable-background:new    ;" width="84.56"
                                  height="15"/>
                            <path style="opacity:0.05;enable-background:new    ;" d="M164.069,124.096c-21.142-22.551-14.31-64.052,7.155-80.793
                                        c-22.745,7.553-39.156,28.986-39.156,54.267c0,40.473,27.075,43.425,27.075,70.088h22.792
                                        C182.04,154.152,179.076,140.102,164.069,124.096z"/>
                            <path d="M141.727,145.116c4.23,5.593,7.59,10.051,9.078,15.76c-6.557,2.031-11.333,8.151-11.333,15.367v33.851
                                        c0,8.869,7.216,16.085,16.085,16.085h1.89c3.4,14.417,16.364,25.183,31.804,25.183s28.405-10.766,31.805-25.183h1.89
                                        c8.869,0,16.085-7.216,16.085-16.085v-33.851c0-7.212-4.771-13.329-11.323-15.364c0.782-2.969,2.13-5.849,4.209-9.036
                                        c2.264-3.469,1.287-8.116-2.182-10.38c-3.467-2.263-8.115-1.286-10.379,2.183c-2.64,4.045-5.571,9.36-6.845,16.513h-46.508
                                        c-1.801-10.188-7.128-17.235-12.312-24.09c-7.263-9.604-14.123-18.675-14.123-38.499c0-27.396,22.288-49.684,49.684-49.684
                                        s49.684,22.288,49.684,49.684c0,7.02-0.874,13.12-2.67,18.65c-1.28,3.939,0.876,8.171,4.815,9.45
                                        c3.939,1.277,8.171-0.876,9.45-4.815c2.291-7.051,3.404-14.668,3.404-23.285c0-35.667-29.017-64.684-64.684-64.684
                                        s-64.684,29.017-64.684,64.684C124.568,122.427,134.082,135.008,141.727,145.116z M189.252,236.36
                                        c-7.067,0-13.161-4.177-15.99-10.183h31.98C202.413,232.184,196.319,236.36,189.252,236.36z M154.472,176.242
                                        c0-0.598,0.487-1.084,1.085-1.084h67.389c0.598,0,1.085,0.486,1.085,1.084v33.851c0,0.599-0.487,1.085-1.085,1.085h-67.389
                                        c-0.598,0-1.085-0.486-1.085-1.085V176.242z M129.907,48.831c1.464,1.465,3.384,2.197,5.303,2.197c1.919,0,3.839-0.732,5.303-2.196
                                        c2.929-2.929,2.929-7.678,0-10.606l-9.647-9.648c-2.928-2.929-7.677-2.93-10.606-0.001s-2.929,7.678,0,10.607L129.907,48.831z
                                         M189.252,28.644c4.142,0,7.5-3.358,7.5-7.5V7.5c0-4.143-3.358-7.5-7.5-7.5s-7.5,3.357-7.5,7.5v13.644
                                        C181.752,25.286,185.11,28.644,189.252,28.644z M258.178,97.569c0,4.143,3.357,7.5,7.5,7.5h13.644c4.143,0,7.5-3.357,7.5-7.5
                                        c0-4.142-3.357-7.5-7.5-7.5h-13.644C261.536,90.069,258.178,93.427,258.178,97.569z M243.294,51.028
                                        c1.919,0,3.839-0.732,5.303-2.197l9.647-9.647c2.929-2.929,2.929-7.678,0-10.607c-2.929-2.928-7.678-2.929-10.606,0.001
                                        l-9.647,9.648c-2.929,2.929-2.929,7.678,0,10.606C239.455,50.296,241.374,51.028,243.294,51.028z M372.004,328.654h-27.093
                                        c-18.635,0-35.896-9.279-46.175-24.822c-19.146-28.953-51.298-46.238-86.009-46.238h-39.453
                                        c-60.137,0-109.062,48.925-109.062,109.061v46.694c0,24.891,9.297,48.66,26.178,66.931c16.783,18.165,39.55,29.306,64.107,31.369
                                        c4.139,0.335,7.754-2.719,8.102-6.846c0.347-4.127-2.718-7.755-6.846-8.102c-20.812-1.749-40.112-11.196-54.346-26.602
                                        c-14.313-15.49-22.195-35.645-22.195-56.751v-46.694c0-51.865,42.196-94.061,94.062-94.061h39.453
                                        c29.661,0,57.137,14.77,73.497,39.512c13.064,19.755,35.003,31.549,58.687,31.549h27.093c33.516,0,60.783,27.268,60.783,60.783
                                        v31.779c0,33.516-27.268,60.783-60.783,60.783H190.925c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h181.079
                                        c41.787,0,75.783-33.996,75.783-75.783v-31.779C447.787,362.65,413.791,328.654,372.004,328.654z M99.182,105.069h13.643
                                        c4.142,0,7.5-3.357,7.5-7.5c0-4.142-3.358-7.5-7.5-7.5H99.182c-4.142,0-7.5,3.358-7.5,7.5
                                        C91.682,101.712,95.04,105.069,99.182,105.069z M336.218,364.832c-3.86,0-6.99,3.129-6.99,6.99c0,3.86,3.129,6.99,6.99,6.99
                                        c3.86,0,6.99-3.129,6.99-6.99C343.207,367.961,340.078,364.832,336.218,364.832z M330.842,450.94
                                        c0,17.685,11.111,29.568,27.648,29.568s27.647-11.883,27.647-29.568c0-20.199-11.627-34.859-27.647-34.859
                                        S330.842,430.74,330.842,450.94z M371.137,450.94c0,9.53-4.373,14.568-12.647,14.568s-12.648-5.038-12.648-14.568
                                        c0-9.869,4.345-19.859,12.648-19.859C366.793,431.08,371.137,441.07,371.137,450.94z M387.751,371.822c0-3.86-3.129-6.99-6.99-6.99
                                        c-3.86,0-6.99,3.129-6.99,6.99c0,3.86,3.129,6.99,6.99,6.99C384.622,378.811,387.751,375.682,387.751,371.822z M240.932,322.037
                                        v-8.779c0-4.143-3.358-7.5-7.5-7.5s-7.5,3.357-7.5,7.5v8.779c0,4.143,3.358,7.5,7.5,7.5S240.932,326.18,240.932,322.037z
                                         M159.858,305.758c-4.142,0-7.5,3.357-7.5,7.5v8.779c0,4.143,3.358,7.5,7.5,7.5s7.5-3.357,7.5-7.5v-8.779
                                        C167.358,309.115,164,305.758,159.858,305.758z"/>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                                    </svg>

                    </a>
                </li>
                <li class="mr-3">
                    <a href=""
                       class="flex items-center px-2 py-1 space-x-2 text-lg font-semibold rounded w-max hover:bg-dino-900 hover:text-gray-100 dark:hover:text-gray-100  md:mx-2"
                       onclick="event.preventDefault();document.getElementById('formLogout').submit();"
                    >
                        <div>Log out</div>
                        <svg class="w-8 h-8 " viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                            <polyline points="10 17 15 12 10 7"/>
                            <line x1="15" y1="12" x2="3" y2="12"/>
                        </svg>
                    </a>
                </li>
                <!--           Formulaire qui est envoyer pour la déconnection du user-->
                <form id="formLogout" action="{{route('logout')}}" method="POST" class="hidden">@csrf</form>
            @endauth
        </ul>
        <div x-data="{light:true}" class="cursor-pointer">
            <div x-show="!light" @click="light=!light" class="absolute  bottom-5  lg:top-5 right-5"
                 onclick="removeDarkTheme()">
                <svg class="w-10 h-10" fill="white" stroke="yellow" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
            </div>

            <div x-show="light" @click="light=!light" class="absolute  bottom-5  lg:top-5 right-5"
                 onclick="addDarkTheme()">
                <svg class="w-10 h-10" fill="light-gray" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                </svg>
            </div>
        </div>

    </div>
</nav>
