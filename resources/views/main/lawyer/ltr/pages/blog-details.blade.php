<x-main.lawyer.ltr.layouts.main.index :data="['lawyer' => $lawyer, 'user' => $user, 'title' => $title]">

    <x-main.lawyer.ltr.pages.blogs.blog-title :data="['title' => $title ]" />

    <x-main.lawyer.ltr.pages.blogs.blog-content :data="['lawyer' => $lawyer, 'user' => $user, 'blog' => $blog]" />

</x-main.lawyer.ltr.layouts.main.index>
