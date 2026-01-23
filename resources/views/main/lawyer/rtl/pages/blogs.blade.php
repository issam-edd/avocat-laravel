<x-main.lawyer.rtl.layouts.main.index :data="['lawyer' => $lawyer, 'user' => $user, 'title' => 'المقالات']">

    <x-main.lawyer.rtl.pages.blogs.header :data="['lawyer' => $lawyer, 'user' => $user]" />
    
    <x-main.lawyer.rtl.pages.blogs.blogs-list :data="['lawyer' => $lawyer, 'user' => $user]" />

</x-main.lawyer.rtl.layouts.main.index>