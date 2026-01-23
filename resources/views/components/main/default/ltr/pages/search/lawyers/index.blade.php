@props(['data'])

<x-main.default.ltr.pages.search.search-box :data="['term' => $data['term']]" />


@if($data['users']->count() == 0)

    <x-main.default.ltr.pages.search.not-found :data="['term' => $data['term'] ]" />

@else
    <x-main.default.ltr.pages.search.lawyers.list-lawyers :data="['term' => $data['term'], 'users' => $data['users'] ]" />
@endif
