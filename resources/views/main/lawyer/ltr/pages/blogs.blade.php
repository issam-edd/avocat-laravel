<x-main.lawyer.ltr.layouts.main.index :data="['lawyer' => $lawyer, 'user' => $user, 'title' => 'Blogs']">

    <x-main.lawyer.ltr.pages.blogs.header :data="['lawyer' => $lawyer, 'user' => $user]" />

    <x-main.lawyer.ltr.pages.blogs.blogs-list :data="['lawyer' => $lawyer, 'user' => $user]" />

</x-main.lawyer.ltr.layouts.main.index>
