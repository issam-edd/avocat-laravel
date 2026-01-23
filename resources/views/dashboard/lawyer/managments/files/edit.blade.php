
<x-dashboard.lawyer.master title="{{ __('client.ModifyFile') }}">


    <div class=" {{ session()->get('locale') === 'ar' ? 'text-right' : 'text-left' }}" dir="{{ session()->get('locale') === 'ar' ? 'rtl' : 'ltr' }}">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{ __('client.ModifyFile') }}</h4>
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
                                            <h4 class="mt-2">{{ __('client.ModifyFile') }}</h4>
                                            <form method="POST" action="{{ route("lawyer.files.update", $file->id) }}" enctype="multipart/form-data">
                                                @csrf
                                                @method("PUT")
                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="client_id" class="form-label">{{ __('client.ClientName') }}<span class="text-danger">*</span></label>
                                                            <select class="form-control @error('client_id') is-invalid @enderror"
                                                                name="client_id"
                                                                id="client_id" >
                                                                <option value="" selected disabled>{{ __('client.ClientName') }}</option>
                                                                @foreach ($clients as $client )
                                                                    <option
                                                                    {{ $file->client_id == $client->id ? "selected" : ""}}
                                                                    value="{{ $client->id }}">{{ $client->client_name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('client_id')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="avocacy_division" class="form-label">{{ __('client.selectAvocacyDivision') }}<span class="text-danger">*</span></label>
                                                            <select class="form-control"
                                                                name="avocacy_division"
                                                                id="avocacy_division" >
                                                                <option value="" selected disabled>{{ __('client.selectAvocacyDivision') }}</option>
                                                                @foreach ($avocacy as $a )
                                                                    <option
                                                                    {{ old("avocacy_division",$file->avocacy_division) == $a->title ? "selected" :"" }}
                                                                    value="{{ $a->title }}">{{ $a->title }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('avocacy_division')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="file_reference" class="form-label">{{ __('client.FileReference') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('file_reference') is-invalid @enderror"
                                                                type="text"
                                                                name="file_reference" value="{{ old("file_reference",$file->file_reference) }}" placeholder="{{ __('client.FileReference') }}"
                                                                id="file_reference" />
                                                            @error('file_reference')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="amount" class="form-label">{{ __('client.Amount') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('amount') is-invalid @enderror"
                                                                type="number" maxlength="10"
                                                                name="amount" value="{{ old("amount", $file->amount) }}" placeholder="{{ __('client.Amount') }}"
                                                                id="amount" />
                                                            @error('amount')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="parties" class="form-label">{{ __('client.Parties') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('parties') is-invalid @enderror"
                                                                type="text"
                                                                name="parties" value="{{ old("parties",$file->parties) }}" placeholder="{{ __('client.Parties') }}"
                                                                id="parties" />
                                                            @error('parties')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="parties_involved" class="form-label">{{ __('client.PartiesInvolved') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('parties_involved') is-invalid @enderror"
                                                                type="text"
                                                                name="parties_involved" value="{{ old("parties_involved",$file->parties_involved) }}" placeholder="{{ __('client.PartiesInvolved') }}"
                                                                id="parties_involved" />
                                                            @error('parties_involved')
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
                                                                {{ __('lawyer.update') }}
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
