<x-main.lawyer.rtl.layouts.main.index :data="['lawyer' => $lawyer, 'user' => $user, 'title' => $faq->question_ar ?? $faq->question_fr]">

    <x-main.lawyer.rtl.pages.faq.faq-title :data="['title' => $faq->question_ar ?? $faq->question_fr, 'faq' => $faq]" />

    <x-main.lawyer.rtl.pages.faq.faq-details :data="['lawyer' => $lawyer, 'user' => $user, 'faq' => $faq]" />

</x-main.lawyer.rtl.layouts.main.index>
