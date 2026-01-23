
<x-dashboard.lawyer.master title="Add prix donner">


    <div class=" {{ session()->get('locale') === 'ar' ? 'text-right' : 'text-left' }}" dir="{{ session()->get('locale') === 'ar' ? 'rtl' : 'ltr' }}">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Add prix donner</h4>
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
                                            <h4 style="border-bottom: 1px solid #eee;" class="header-title mt-2 pb-2 text-center mb-3" >
                                                Add prix donner : {{ $file->client->client_name }}
                                            </h4>

                                            <form method="POST" action="{{ route("lawyer.expenses.increment.store",$file->id) }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="paid" class="form-label">{{ __('client.advance') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('paid') is-invalid @enderror"
                                                                type="number" 
                                                                name="paid" value="{{ old("paid") }}" placeholder="{{ __('client.advance') }}"
                                                                id="paid" />
                                                            @error('paid')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div> <!-- end row -->

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
