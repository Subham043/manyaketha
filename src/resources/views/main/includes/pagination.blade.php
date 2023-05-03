@if ($paginator->hasPages())
    <div class="pagination-wrapper text-center">
        <ul class="post-pagination mt-70 mb-30">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li>
                    <a class="next" href="#"><i class="far fa-angle-left"></i></a>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" aria-disabled="true" class="disabled">
                        <i class="far fa-angle-left"></i>
                    </a>
                </li>
            @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li><span class="current">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li><span class="current">{{ $page }}</span></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" aria-disabled="true" class="disabled">
                        <i class="far fa-angle-right"></i>
                    </a>
                </li>
            @else
                <li>
                    <a class="next" href="#"><i class="far fa-angle-right"></i></a>
                </li>
            @endif
        </ul>
    </div>
@endif

