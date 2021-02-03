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
