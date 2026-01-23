@props(['data'])

<x-main.default.ltr.pages.search.search-box :data="['term' => $data['term']]" />


@if($data['faqs']->count() == 0)

    <x-main.default.ltr.pages.search.not-found :data="['term' => $data['term'] ]" />

@else
    <x-main.default.ltr.pages.search.faq.list-faq :data="['term' => $data['term'], 'faqs' => $data['faqs'] ]" />
@endif
