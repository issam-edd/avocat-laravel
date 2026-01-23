<x-main.lawyer.ltr.layouts.main.index :data="['lawyer' => $lawyer, 'user' => $user, 'title' => 'Contactez-nous']">

    <x-main.lawyer.ltr.pages.contact.title />

    @if(!!$lawyer->google_maps_link)
        <x-main.lawyer.ltr.pages.contact.map :data="['lawyer' => $lawyer, 'user' => $user]" />
    @endif

    <x-main.lawyer.ltr.pages.contact.form :data="['lawyer' => $lawyer, 'user' => $user]" />

    <x-main.lawyer.ltr.pages.contact.information :data="['lawyer' => $lawyer, 'user' => $user]" />

</x-main.lawyer.ltr.layouts.main.index>
