<div dir="rtl" class="sidebar-page-container text-right" style="background: #f6faff">
    <div class="auto-container">
        @if($faqs->count() > 0)
            <div class="row clearfix">
                @foreach($faqs as $faq)
                    <x-main.lawyer.rtl.pages.faq.faq-card :data="['faq' => $faq, 'lawyer' => $lawyer]" />
                @endforeach
            </div>

            @if($faqs->hasPages())
                <x-main.lawyer.rtl.pages.faq.pagination :data="['links' => $faqs]" />
            @endif
        @else
            <div class="">
            لا يوجد اي سؤال في الوقت الحالي
            </div>
        @endif
    </div>
</div>
