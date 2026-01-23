@props(['data'])

<x-main.default.rtl.pages.search.search-box :data="['term' => $data['term']]" />


@if($data['blogs']->count() == 0)

    <x-main.default.rtl.pages.search.not-found :data="['term' => $data['term'] ]" />

@else
    <x-main.default.rtl.pages.search.blogs.list-blogs :data="['term' => $data['term'], 'blogs' => $data['blogs'] ]" />
@endif
