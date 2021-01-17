<nav class="bg-white shadow dark:bg-gray-800">
    <div class="container px-6 py-3 mx-auto md:flex">
        <div class="flex items-center justify-between">
            <div>
                <a class="text-xl font-bold text-gray-800 dark:text-white md:text-2xl hover:text-gray-700 dark:hover:text-gray-300"
                   href="#">Brand</a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex md:hidden">
                <button type="button"
                        class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                        aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                        <path fill-rule="evenodd"
                              d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div class="hidden w-full md:flex md:items-center md:justify-between">
            <div class="flex flex-col px-2 py-3 -mx-4 md:flex-row md:mx-0 md:py-0">
                <a href="#"
                   class="px-2 py-1 text-sm font-medium text-gray-700 rounded dark:text-gray-200 hover:bg-gray-900 hover:text-gray-100 md:mx-2">Home</a>
                <a href="#"
                   class="px-2 py-1 text-sm font-medium text-gray-700 rounded dark:text-gray-200 hover:bg-gray-900 hover:text-gray-100 md:mx-2">About</a>
                <a href="#"
                   class="px-2 py-1 text-sm font-medium text-gray-700 rounded dark:text-gray-200 hover:bg-gray-900 hover:text-gray-100 md:mx-2">Contact</a>
            </div>

            <div>
                <input type="text"
                       class="w-full px-4 py-3 text-sm leading-tight text-gray-700 placeholder-gray-500 bg-gray-200 border border-transparent rounded-md lg:w-64 dark:text-gray-200 dark:bg-gray-900 dark:placeholder-gray-200 focus:outline-none focus:bg-white focus:ring focus:border-blue-400"
                       placeholder="Search" aria-label="Search">
            </div>
        </div>
    </div>
</nav>
