@props(['data'])

@php

    $links = $data['links'];
    $range = 3; // Number of pages to show before and after the current page
    $start = $links->currentPage() - $range;
    $end = $links->currentPage() + $range;
    $lastPage = $links->lastPage();

@endphp


<!--Post Share Options-->
<div dir="rtl" class="styled-pagination text-right">
    <ul class="clearfix">
        @if(!!$links->previousPageUrl())
            <li class="prev">
                <a href="{{ $links->previousPageUrl() }}"><span class="flaticon-next-1"></span> </a>
            </li>
        @endif

         <!-- Page links -->
         @for($i = 1; $i <= $lastPage; $i++)
            @if ($i == 1 || $i == $lastPage || ($i >= $start && $i <= $end))
                <li class="{{ $links->currentPage() == $i ? 'active ' : '' }}">
                    <a href="{{ $links->url($i) }}">{{ $i }}</a>
                </li>
            @elseif(($i == ($start - 1) && $i > 1) || ($i == ($end + 1) && $i < $lastPage))
                <li class="disabled">
                    <a href="#">...</a>
                </li>
            @endif
        @endfor

        @if(!!$links->nextPageUrl())
            <li class="next">
                <a href="{{ $links->nextPageUrl() }}"><span class="flaticon-back"></span> </a>
            </li>
        @endif
    </ul>
</div>
