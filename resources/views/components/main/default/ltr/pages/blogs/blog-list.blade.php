@props(['data'])

<x-main.default.ltr.pages.search.search-box :data="['term' => '']" />

<section class="middle">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center">
                    <h2 class="ft-bold pt-3 theme-cl-s tw-text-2xl">المقالات</h2>
                </div>
            </div>
        </div>

        <div class="row">
			<!-- Blogs List -->
            @foreach($data['blogs'] as $blog)

                <x-main.default.ltr.pages.blogs.blog-post :data="[ 'blog' => $blog ]" />

            @endforeach

        </div>

		@if(true)
        	<x-main.default.ltr.global.pagination :data="[ 'links' => $data['blogs'] ]" />
		@endif


    </div>
</section>
<!-- ======================= Blog Start ============================ -->
