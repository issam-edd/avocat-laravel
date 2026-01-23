<x-main.default.ltr.layouts.main.master title="Acceuil">

    <!-- Hero Section -->
    <x-main.default.ltr.pages.home.home-banner-eight />

    <!-- Lawyers Section -->
    <x-main.default.ltr.pages.home.lawyers-list :data="['lawyers' => $lawyers]" />

    @if ($faqs->count() > 0)
        <!-- Faq Section -->
        <x-main.default.ltr.pages.home.faq :data="['faqs' => $faqs]" />
    @endif

    @if ($blogs->count() > 0)
        <!-- Blogs Section -->
        <x-main.default.ltr.pages.home.blogs :data="['blogs' => $blogs]" />
    @endif


</x-main.default.ltr.layouts.main.master>
