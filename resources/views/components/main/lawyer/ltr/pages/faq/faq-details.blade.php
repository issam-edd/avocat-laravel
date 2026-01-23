@props(['data'])

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container text-left">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <!-- Block Detail -->
                <div class="blog-detail">
                    <div class="inner-box">
                        <h3>{!! $data['faq']->question_fr !!}</h3>
                        <div class="lower-content">
                            {!! $data['faq']->answer_fr !!}
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
