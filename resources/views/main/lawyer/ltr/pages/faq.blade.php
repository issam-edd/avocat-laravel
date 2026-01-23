<x-main.lawyer.ltr.layouts.main.index :data="['lawyer' => $lawyer, 'user' => $user, 'title' => $faq->question_fr ?? $faq->question_ar]">

    <x-main.lawyer.ltr.pages.faq.faq-title :data="['title' => $faq->question_fr ?? $faq->question_ar , 'faq' => $faq]" />

    <x-main.lawyer.ltr.pages.faq.faq-details :data="['lawyer' => $lawyer, 'user' => $user, 'faq' => $faq]" />

</x-main.lawyer.ltr.layouts.main.index>
