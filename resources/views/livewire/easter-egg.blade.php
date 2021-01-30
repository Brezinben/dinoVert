<div>
    @if($routeName=='pages.home')
        <button wire:click="increment">
            <img class="block w-full h-12 cursor-pointer"
                 src="{{url('/images/logo.svg')}}" alt="logo"/>
        </button>
    @else
        <a href="/">
            <img class="block w-full h-12 cursor-pointer"
                 src="{{url('/images/logo.svg')}}" alt="logo"/>
        </a>
    @endif
</div>

