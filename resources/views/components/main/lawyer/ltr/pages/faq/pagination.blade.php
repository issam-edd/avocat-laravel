@props(['data'])

@php

    $links = $data['links'];

@endphp


<!--Post Share Options-->
<div dir="rtl" class="styled-pagination text-right">
    <ul class="clearfix">
        @if(!!$links->previousPageUrl())
            <li class="prev">
                <a href="{{ $links->previousPageUrl() }}"><span class="flaticon-next-1"></span> </a>
            </li>
        @endif

        @for($i = 1; $i <= $links->lastPage(); $i++)
            <li class="{{ $i === $links->currentPage() ? 'active' : '' }}">
                <a href="{{ $links->url($i) }}">{{ $i }}</a>
            </li>
        @endfor

        @if(!!$links->nextPageUrl())
            <li class="next">
                <a href="{{ $links->nextPageUrl() }}"><span class="flaticon-back"></span> </a>
            </li>
        @endif
    </ul>
</div>
