@props(['data'])


<x-main.default.ltr.pages.search.search-box :data="['term' => $data['term']]" />

@if ($data['users']->count() > 0)
    <x-main.default.ltr.pages.search.global.list-lawyers :data="['users' => $data['users'], 'term' => $data['term'] ]" />
@endif

@if ($data['blogs']->count() > 0)
    <x-main.default.ltr.pages.search.global.list-blogs :data="['blogs' => $data['blogs'], 'term' => $data['term'] ]" />
@endif

@if ($data['faqs']->count() > 0)
    <x-main.default.ltr.pages.search.global.list-faqs :data="['faqs' => $data['faqs'], 'term' => $data['term'] ]" />
@endif

@if(($data['users']->count() == 0) && ($data['blogs']->count() == 0) && ($data['faqs']->count() == 0))

<x-main.default.ltr.pages.search.not-found :data="['term' => $data['term'] ]" />

@endif
