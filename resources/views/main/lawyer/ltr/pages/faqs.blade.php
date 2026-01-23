<x-main.lawyer.ltr.layouts.main.index :data="['lawyer' => $lawyer, 'user' => $user, 'title' => 'Questions et Réponses']">

    <x-main.lawyer.ltr.pages.faq.page-title :data="['lawyer' => $lawyer, 'user' => $user]" />

    <x-main.lawyer.ltr.pages.faq.faq-list :data="['lawyer' => $lawyer, 'user' => $user]" />

</x-main.lawyer.ltr.layouts.main.index>
