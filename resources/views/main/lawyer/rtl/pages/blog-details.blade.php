<x-main.lawyer.rtl.layouts.main.index :data="['lawyer' => $lawyer, 'user' => $user, 'title' => $blog->title_ar ?? $blog->title]">

    <x-main.lawyer.rtl.pages.blogs.blog-title :data="['title' => $title , 'blog' => $blog]" />

    <x-main.lawyer.rtl.pages.blogs.blog-content :data="['lawyer' => $lawyer, 'user' => $user, 'blog' => $blog]" />

</x-main.lawyer.rtl.layouts.main.index>
