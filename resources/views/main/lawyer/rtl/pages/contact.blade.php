<x-main.lawyer.rtl.layouts.main.index :data="['lawyer' => $lawyer, 'user' => $user, 'title' => 'تواصل معنا']">

    <x-main.lawyer.rtl.pages.contact.title />

    @if(!!$lawyer->google_maps_link)
        <x-main.lawyer.rtl.pages.contact.map :data="['lawyer' => $lawyer, 'user' => $user]" />
    @endif

    <x-main.lawyer.rtl.pages.contact.form :data="['lawyer' => $lawyer, 'user' => $user]" />

    <x-main.lawyer.rtl.pages.contact.information :data="['lawyer' => $lawyer, 'user' => $user]" />

</x-main.lawyer.rtl.layouts.main.index>
