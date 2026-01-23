@props(['data'])

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div dir="rtl" class="auto-container text-right">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <!-- Block Detail -->
                <div class="blog-detail">
                    <div class="inner-box">
                        <h3>{!! $data['faq']->question_ar !!}</h3>
                        <div class="lower-content">
                            {!! $data['faq']->answer_ar !!}
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
