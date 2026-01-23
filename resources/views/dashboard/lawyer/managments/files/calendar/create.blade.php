<x-dashboard.lawyer.master title="{{ __('client.addEvent') }}">

    <div class=" {{ session()->get('locale') === 'ar' ? 'text-right' : 'text-left' }}" dir="{{ session()->get('locale') === 'ar' ? 'rtl' : 'ltr' }}">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{ __('client.addEvent') }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="tab-content">
                    <!-- Billing Content-->
                    <div class="tab-pane show active" id="billing-information">
                        <div class="card">
                            <div class="card-header m-1 bg-dark text-white">
                                <h5 class="card-title text-center p-0 m-0">{{ __('client.addEvent') }}</h5>
                            </div>
                            <form action="{{route('lawyer.calendar.info.store')}}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="row px-3">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-3">
                                                <label for="title" class="form-label">{{ __('client.title') }}<span class="text-danger">*</span></label>
                                                <input class="form-control @error('title') is-invalid @enderror"
                                                    type="text"
                                                    name="title" value="{{ old("title") }}" placeholder="{{ __('client.title') }}"
                                                    id="title" />
                                                @error('title')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-3">
                                                <label for="color" class="form-label">{{ __('client.selectColor') }}<span class="text-danger">*</span></label>
                                                <select class="form-control"
                                                    name="color"
                                                    id="color" >
                                                    <option value="" selected disabled>{{ __('client.selectColor') }}</option>
                                                    <option {{ old('color') == "#FC2947" ? "selected" : "" }} value="#FC2947">{{ __('client.Red') }}</option>
                                                    <option {{ old('color') == "#FFF323" ? "selected" : "" }} value="#FFF323">{{ __('client.Yellow') }}</option>
                                                    <option {{ old('color') == "#0E7CF4" ? "selected" : "" }} value="#0E7CF4">{{ __('client.Blue') }}</option>
                                                    <option {{ old('color') == "#79D70F" ? "selected" : "" }} value="#79D70F">{{ __('client.Green') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-3">
                                                <label for="date_debut" class="form-label">{{ __('client.startDate') }}<span class="text-danger">*</span></label>
                                                <input class="form-control @error('date_debut') is-invalid @enderror"
                                                    type="datetime-local"
                                                    name="date_debut" value="{{ old("date_debut") }}" placeholder="{{ __('client.startDate') }}"
                                                    id="date_debut" />
                                                @error('date_debut')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="mb-3">
                                                <label for="date_fin" class="form-label">{{ __('client.endDate') }}<span class="text-danger">*</span></label>
                                                <input class="form-control @error('date_fin') is-invalid @enderror"
                                                    type="datetime-local"
                                                    name="date_fin" value="{{ old("date_fin") }}" placeholder="{{ __('client.endDate') }}"
                                                    id="date_fin" />
                                                @error('date_fin')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-3">
                                                <label for="avocacy_division" class="form-label">{{ __('client.selectAvocacyDivision') }}<span class="text-danger">*</span></label>
                                                <select class="form-control @error('avocacy_division') is-invalid @enderror"
                                                    name="avocacy_division" value="{{ old("avocacy_division") }}"
                                                    id="avocacy_division" >
                                                    <option value="" selected disabled>{{ __('client.selectAvocacyDivision') }}</option>
                                                    <option value="avocacy_division1">avocacy_division1</option>
                                                    <option value="avocacy_division2">avocacy_division2</option>
                                                    <option value="avocacy_division3">avocacy_division3</option>
                                                </select>
                                                @error('avocacy_division')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-3">
                                                <label for="file_reference" class="form-label">{{ __('client.FileReference') }}<span class="text-danger">*</span></label>
                                                <input class="form-control @error('file_reference') is-invalid @enderror"
                                                    type="text"
                                                    name="file_reference" value="{{ old("file_reference") }}" placeholder="{{ __('client.FileReference') }}"
                                                    id="file_reference" />
                                                @error('file_reference')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="mb-3">
                                                <label for="client_name" class="form-label">{{ __('client.ClientName') }}<span class="text-danger">*</span></label>
                                                <input class="form-control @error('client_name') is-invalid @enderror"
                                                    type="text"
                                                    name="client_name" value="{{ old("client_name") }}" placeholder="{{ __('client.ClientName') }}"
                                                    id="client_name" />
                                                @error('client_name')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-3">
                                                <label for="phone_number" class="form-label">{{ __('client.PhoneNumber') }}<span class="text-danger">*</span></label>
                                                <input class="form-control @error('phone_number') is-invalid @enderror"
                                                    type="text"
                                                    name="phone_number" value="{{ old("phone_number") }}" placeholder="{{ __('client.PhoneNumber') }}"
                                                    id="phone_number" />

                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="mb-3">
                                                <label for="procedure_description" class="form-label">{{ __('client.description') }}<span class="text-danger">*</span></label>
                                                <textarea
                                                    rows="3"
                                                    class="form-control @error('procedure_description') is-invalid @enderror"
                                                    type="text" name="procedure_description" placeholder="{{ __('client.description') }}"
                                                    id="procedure_description" >{{ old("procedure_description") }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-3">
                                                <label for="procedure_result" class="form-label">{{ __('client.result') }}<span class="text-danger">*</span></label>
                                                <textarea
                                                    rows="3"
                                                    class="form-control @error('procedure_result') is-invalid @enderror"
                                                    type="text"
                                                    name="procedure_result" placeholder="{{ __('client.result') }}"
                                                    id="procedure_result" >{{ old("procedure_result") }}</textarea>
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
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Billing Information Content-->
                </div>
            </div><!-- end col -->
        </div><!-- end row -->

    </div>

</x-dashboard.lawyer.master>
