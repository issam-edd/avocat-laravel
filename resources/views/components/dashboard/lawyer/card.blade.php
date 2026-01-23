
@props(["faqs", "blogs", "mails"])
<div class="row mt-5">
    <div class="col-12">
        <div class="card widget-inline">
            <div class="card-body p-0">
                <div class="row g-0">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card rounded-0 shadow-none m-0 border-start border-light">
                            <div class="card-body text-center">
                                <div class="dash-card rtl">
                                    <i class=" ri-message-2-line text-muted font-24"></i>
                                    <div>
                                        <h3><span>{{ $blogs->count() }}</span></h3>
                                        <p class="text-muted font-15 mb-0">{{ __("pageLawyer.totalBlogs") }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="card rounded-0 shadow-none m-0 border-start border-light">
                            <div class="card-body text-center">
                                <div class="dash-card rtl">
                                    <i class=" ri-question-answer-fill text-muted font-24"></i>
                                    <div>
                                        <h3><span>{{ $faqs->count() }}</span></h3>
                                        <p class="text-muted font-15 mb-0">{{ __("pageLawyer.totalFAQ") }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="card rounded-0 shadow-none m-0 border-start border-light">
                            <div class="card-body text-center">
                                <div class="dash-card rtl">
                                    <i class=" ri-mail-send-line  text-muted font-24"></i>
                                    <div>
                                        <h3><span>{{ $mails->count() }}</span> </h3>
                                        <p class="text-muted font-15 mb-0">{{ __("pageLawyer.totalMails") }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div>
        </div> <!-- end card-box-->
    </div> <!-- end col-->
</div>
