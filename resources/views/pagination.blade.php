<div class="pagination-wrapper centred">
@if ($paginator->hasPages())
    <ul class="pagination clearfix">
    {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <!-- <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="icon-4"></i></a></li>            -->

        @endif
{{-- Pagination Elements --}}
@foreach ($elements as $element)

    {{-- Array Of Links --}}
    @if (is_string($element))
            <li>{{ $element }}</li>
    @endif
    @if (is_array($element))
        @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                        <li><a href="{{ $url }}" class="current"  aria-label="Сейчас страница {{ $page }}">{{ $page }}</a>
                           
                        </li>
                @else
                        <li>
                            <a href="{{ $url }}"  aria-label="Перейти на {{ $page }} страницу">{{ $page }}</a>
                        </li>
                @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
             <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"   aria-label="Больше страниц"><i class="icon-4"></i></a></li>           
        @endif
       
    </ul>
    @endif

</div>