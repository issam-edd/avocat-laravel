<x-main.default.rtl.layouts.main.master title="الصفحة الرئيسية">

    <!-- Hero Section -->
    <x-main.default.rtl.pages.home.home-banner-eight />

    <!-- Lawyers Section -->
    <x-main.default.rtl.pages.home.lawyers-list :data="['lawyers' => $lawyers]" />

    @if ($faqs->count() > 0)
        <!-- Faq Section -->
        <x-main.default.rtl.pages.home.faq :data="['faqs' => $faqs]" />
    @endif

    @if ($blogs->count() > 0)
        <!-- Blogs Section -->
        <x-main.default.rtl.pages.home.blogs :data="['blogs' => $blogs]" />
    @endif


</x-main.default.rtl.layouts.main.master>
