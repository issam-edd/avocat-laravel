
{{-- @props(["files","sumExpenses","sumFees"]) --}}
{{-- <div class="row mt-5">
    <div class="col-12">
        <div class="card widget-inline">
            <div class="card-body p-0">
                <div class="row g-0">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card rounded-0 shadow-none m-0 border-start border-light">
                            <div class="card-body text-center">
                                <div class="dash-card rtl">
                                    <i class="  ri-file-mark-line text-muted font-24"></i>
                                    <div>
                                        <h3><span>{{ $files->count() }}</span></h3>
                                        <p class="text-muted font-15 mb-0">Nombre Total Files</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="card rounded-0 shadow-none m-0 border-start border-light">
                            <div class="card-body text-center">
                                <div class="dash-card rtl">
                                    <i class="  ri-funds-box-line text-muted font-24"></i>
                                    <div>
                                        <h3><span>{{ $sumFees }}</span></h3>
                                        <p class="text-muted font-15 mb-0">Nombre Total Fees</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="card rounded-0 shadow-none m-0 border-start border-light">
                            <div class="card-body text-center">
                                <div class="dash-card rtl">
                                    <i class="  ri-wallet-3-line text-muted font-24"></i>
                                    <div>
                                        <h3><span>{{ $sumExpenses }}</span></h3>
                                        <p class="text-muted font-15 mb-0">Nombre Total Expenses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div>
        </div> <!-- end card-box-->
    </div> <!-- end col-->
</div> --}}



<style>
    a.stretched-link,
a.stretched-link:hover {
  color: inherit;
}
</style>

<div class="row mt-5">

    <div class="col-lg-4 col-sm-6">
        <div class="card text-white bg-info">
            <div class="card-body text-center">
                <div class="dash-card rtl" >
                    <i class=" ri-question-answer-line text-muted font-24" style="color: #eee !important;font-size: 50px !important;"></i>
                    <div class="mt-1">
                        <h3>Message</h3>
                    </div>
                </div>
                <a href="{{ route('client.notification.index') }}" class="stretched-link"></a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-lg-4 col-sm-6">
        <div class="card text-white bg-warning">
            <div class="card-body text-center">
                <div class="dash-card rtl">
                    <i class=" ri-folder-shield-2-line text-muted font-24" style="color: #eee !important;font-size: 50px !important;"></i>
                    <div class="mt-1">
                        <h3>File</h3>
                    </div>
                </div>
                <a href="{{ route('files.index') }}" class="stretched-link"></a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-lg-4 col-sm-6">
        <div class="card text-white bg-danger">
            <div class="card-body text-center">
                <div class="dash-card rtl">
                    <i class="  ri-folder-open-line  text-muted font-24" style="color: #eee !important;font-size: 50px !important;"></i>
                    <div class="mt-1">
                        <h3>Info File</h3>
                    </div>
                </div>
                <a href="{{ route('client.infos.index') }}" class="stretched-link"></a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
