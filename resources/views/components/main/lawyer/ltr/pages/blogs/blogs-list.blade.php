<div dir="ltr" class="sidebar-page-container text-right">
    <div class="auto-container">
        @if($blogs->count() > 0)
            <div class="row clearfix">
                @foreach($blogs as $blog)
                    <x-main.lawyer.ltr.pages.blogs.blog-post :data="['blog' => $blog, 'lawyer' => $lawyer]" />
                @endforeach
            </div>

            @if($blogs->hasPages())
                <x-main.lawyer.ltr.pages.blogs.pagination :data="['links' => $blogs]" />
            @endif
        @else
            <div class="">
                D'autres articles seront ajoutés prochainement
            </div>
        @endif
    </div>
</div>
