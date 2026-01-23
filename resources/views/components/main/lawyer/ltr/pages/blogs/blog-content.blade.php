<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container text-left">
        <div class="row clearfix">

            <x-main.lawyer.ltr.pages.blogs.blog-details :data="['lawyer' => $lawyer, 'user' => $user, 'blog' => $blog]" />
            <x-main.lawyer.ltr.pages.blogs.side-bar-side :data="['lawyer' => $lawyer, 'user' => $user, 'blog' => $blog]" />



        </div>
    </div>
</div>
