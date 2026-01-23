<x-dashboard.client.master title="{{ __('client.AddInfo') }}">


    <div class=" {{ session()->get('locale') === 'ar' ? 'text-right' : 'text-left' }}"
        dir="{{ session()->get('locale') === 'ar' ? 'rtl' : 'ltr' }}">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{ __('client.AddInfoClient') }} </h4>
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
                                            {{ __('client.AddInfoClient') }} : <span
                                            class="text-muted"></span>{{ __('client.File') }}
                                        </h4>
                                        <form method="POST" action="{{ route('client.infos.store') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row" id="row">
                                                <div class="mb-3 input-group col-10 col-md-10 col-10">
                                                    <input class="form-control @error('date') is-invalid @enderror"
                                                    type="file" name="file_array[]"
                                                    aria-label="Example text with button addon" aria-describedby="button-addon1"
                                                    />
                                                    <button class="btn btn-outline-primary" type="button" onclick="addFile()" id="button-addon1">{{ __('client.Add') }}</button>
                                                </div>
                                                @error("file_array")
                                                    <div class="alert text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>



                                            <div class="row mt-4">
                                                <div class="col-sm-6">
                                                    <a href="{{ route('client.index') }}"
                                                        class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                        <i class="mdi mdi-arrow-right"></i> {{ __('lawyer.back_home') }}
                                                    </a>
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
    <script>
        function addFile() {
            const row = document.getElementById("row");
            let html = `
                        <div class="row" id="row">
                            <div class="mb-3 input-group col-10 col-md-10 col-10">
                                <input class="form-control"
                                        type="file" name="file_array[]"
                                aria-label="Example text with button addon" aria-describedby="button-addon1"
                                />
                                <button  type="button" onclick="deleteFile(this)" class="btn btn-danger">{{ __('button.Delete') }}</button>
                            </div>
                        </div>
                        `;
            row.insertAdjacentHTML("afterend", html);
        }

        function deleteFile(file) {
            file.parentNode.parentNode?.remove();
        }
    </script>


    </x-dashboard.client.master>
