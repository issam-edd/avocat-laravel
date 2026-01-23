
<x-dashboard.lawyer.master title="{{ __('lawyer.add_faq') }}">


    <div class=" {{ session()->get('locale') === 'ar' ? 'text-right' : 'text-left' }}" dir="{{ session()->get('locale') === 'ar' ? 'rtl' : 'ltr' }}">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Create Fees</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                            <!-- Steps Information -->
                            <div class="tab-content">

                                <!-- Billing Content-->
                                <div class="tab-pane show active" id="billing-information">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="mt-2">Modifier File Pour Client : {{ $file->client->client_name }} File : {{ $file->avocacy_division }}</h4>
                                            <form method="POST" action="{{ route("lawyer.fees.store",$file->id) }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="amount" class="form-label">amount<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('amount') is-invalid @enderror"
                                                                type="number" maxlength="10"
                                                                name="amount" value="{{ old("amount", $file->expensesFiles->first()->amount) }}" placeholder="amount"
                                                                id="amount" />
                                                            @error('amount')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col-sm-6">
                                                        <a href="{{ route("lawyer.index") }}" class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                            <i class="mdi mdi-arrow-right"></i> {{ __('lawyer.back_home') }} </a>
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="text-sm-end d-flex justify-content-end">
                                                            <button type="submit" class="btn btn-success">
                                                                <i class="mdi mdi-content-save-outline me-1"></i>
                                                                {{ __('lawyer.create') }}
                                                            </button>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->


                                            </form>
                                        </div>

                                    </div> <!-- end row-->
                                </div>
                                <!-- End Billing Information Content-->

                            </div> <!-- end tab content-->


                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->

    </div>
</x-dashboard.admin.master >
