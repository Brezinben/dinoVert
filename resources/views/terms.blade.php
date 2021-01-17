<x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="flex flex-col items-center pt-6 min-h-screen sm:pt-0">
            <div>
                <x-jet-authentication-card-logo/>
            </div>

            <div class="overflow-hidden p-6 mt-6 w-full bg-white shadow-md prose sm:max-w-2xl sm:rounded-lg">
                {!! $terms !!}
            </div>
        </div>
    </div>
</x-guest-layout>
