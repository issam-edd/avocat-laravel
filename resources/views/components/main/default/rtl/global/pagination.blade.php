@props(['data'])

@php

    $links = $data['links'];
    $range = 3; // Number of pages to show before and after the current page
    $start = $links->currentPage() - $range;
    $end = $links->currentPage() + $range;
    $lastPage = $links->lastPage();

@endphp

<div class="row justify-content-start">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <ul class="pagination">
                <li class="page-item">
                    @if(!!$links->previousPageUrl())
                        <a class="page-link theme-cl-s" href="{{ $links->previousPageUrl() }}" aria-label="Previous">
                        <span class="fas fa-arrow-circle-left"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                    @endif
                </li>


                <!-- Page links -->
                @for($i = 1; $i <= $lastPage; $i++)
                    @if ($i == 1 || $i == $lastPage || ($i >= $start && $i <= $end))
                        <li class="page-item {{ $links->currentPage() == $i ? 'active theme-cl' : 'theme-cl-s' }}">
                            <a class="page-link {{ $links->currentPage() == $i ? 'active theme-cl' : 'theme-cl-s' }}" href="{{ $links->url($i) }}">{{ $i }}</a>
                        </li>
                    @elseif(($i == ($start - 1) && $i > 1) || ($i == ($end + 1) && $i < $lastPage))
                        <li class="page-item disabled">
                            <a class="page-link" href="#">...</a>
                        </li>
                    @endif
                @endfor

                <li class="page-item">
                    @if(!!$links->nextPageUrl())
                        <a class="page-link theme-cl-s" href="{{ $links->nextPageUrl() }}" aria-label="Next">
                        <span class="fas fa-arrow-circle-right"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    @endif
                </li>

            </ul>
        </div>
    </div>
</div>
