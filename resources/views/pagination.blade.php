@if ($paginator->hasPages())
    <ul class="flex  justify-center pager">

        @if ($paginator->onFirstPage())
            <li class="btn-pagination disabled cursor-not-allowed  ">
                <span>← Previous</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}"
                   class="btn-pagination"
                   rel="prev">← Previous</a></li>
        @endif

        @foreach ($elements as $element)

            @if (is_string($element))
                <li class="btn-pagination disabled"><span>{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class=" py-2 px-3 mx-1 text-gray-200 bg-white rounded-md dark:bg-punch-600 bg-dino-600 dark:text-gray-200 hover:bg-dino-600 disabled cursor-not-allowed dark:hover:bg-punch-500 hover:text-white dark:hover:text-gray-200">
                            <span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}"
                               class="btn-pagination disabled">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}"
                   class="btn-pagination"
                   rel="next">Next →</a></li>
        @else
            <li class="btn-pagination disabled
"><span>Next →</span></li>
        @endif
    </ul>
@endif
