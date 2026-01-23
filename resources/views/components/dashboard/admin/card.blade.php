
@props(["faqs", "blogs","avocats", "mails","avocatsPremium"])
<div class="row">
    <div class="col-12">
        <div class="card widget-inline">
            <div class="card-body p-0">
                <div class="row g-0">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card rounded-0 shadow-none m-0">
                            <div class="card-body text-center">
                                <i class="ri-user-2-fill text-muted font-24"></i>
                                <h3><span>{{ $avocats->count() }}</span></h3>
                                <p class="text-muted font-15 mb-0">Total Avocats</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="card rounded-0 shadow-none m-0">
                            <div class="card-body text-center">
                                <i class="ri-user-2-fill text-muted font-24"></i>
                                <h3><span>{{ $avocatsPremium->count() }}</span></h3>
                                <p class="text-muted font-15 mb-0">Total Avocats Premium</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="card rounded-0 shadow-none m-0 border-start border-light">
                            <div class="card-body text-center">
                                <i class=" ri-message-2-line text-muted font-24"></i>
                                <h3><span>{{ $blogs->count() }}</span></h3>
                                <p class="text-muted font-15 mb-0">Total Blogs</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="card rounded-0 shadow-none m-0 border-start border-light">
                            <div class="card-body text-center">
                                <i class=" ri-question-answer-fill text-muted font-24"></i>
                                <h3><span>{{ $faqs->count() }}</span></h3>
                                <p class="text-muted font-15 mb-0">Total FAQ</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="card rounded-0 shadow-none m-0 border-start border-light">
                            <div class="card-body text-center">
                                <i class=" ri-mail-send-line  text-muted font-24"></i>
                                <h3><span>{{ $mails->count() }}</span> </h3>
                                <p class="text-muted font-15 mb-0">Total Mails</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div>
        </div> <!-- end card-box-->
    </div> <!-- end col-->
</div>
