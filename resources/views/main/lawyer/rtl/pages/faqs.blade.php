<x-main.lawyer.rtl.layouts.main.index :data="['lawyer' => $lawyer, 'user' => $user, 'title' => 'أسئلة و أجوبة']">

    <x-main.lawyer.rtl.pages.faq.page-title :data="['lawyer' => $lawyer, 'user' => $user]" />
    
    <x-main.lawyer.rtl.pages.faq.faq-list :data="['lawyer' => $lawyer, 'user' => $user]" />

</x-main.lawyer.rtl.layouts.main.index>