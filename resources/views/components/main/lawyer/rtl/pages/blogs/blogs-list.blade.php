<div dir="rtl" class="sidebar-page-container text-right">
    <div class="auto-container">
        @if($blogs->count() > 0)
            <div class="row clearfix">
                @foreach($blogs as $blog)
                    <x-main.lawyer.rtl.pages.blogs.blog-post :data="['blog' => $blog, 'lawyer' => $lawyer]" />
                @endforeach
            </div>

            @if($blogs->hasPages())
                <x-main.lawyer.rtl.pages.blogs.pagination :data="['links' => $blogs]" />
            @endif
        @else
            <div class="">
            لا يوجد مقالات في الوقت الحالي  
            </div>
        @endif
    </div>
</div>