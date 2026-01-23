<x-dashboard.lawyer.master title="{{ __('model.CreateModel') }}">

    <div>

        <!-- start page title -->
        <div class="row">
            <div class="col-12" >
                <div class="page-title-box d-flex justify-content-between">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ __("model.Models") }} </a></li>
                            <li class="breadcrumb-item active">{{ __("model.CreateModel") }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __("model.CreateModel") }}</h4>
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
                                            <h4 style="border-bottom: 1px solid #eee;" class="mt-2 pb-2 text-center mb-3">{{-- __("model.CreateModel") --}}{{ $model->name }}</h4>
                                            <form dir="rtl" method="POST" action="{{ route("lawyer.models.store.uploaded") }}" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="model_file_id" value="{{ $model->id }}" required>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="name" class="form-label"> اسم النموذج<span class="text-danger">*</span></label>
                                                            <input type="text"
                                                            class="form-control" required
                                                            name="name" placeholder=" اسم النموذج">
                                                            @error("name")
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    @foreach ($model->options as $option)


                                                        <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="{{ $option["option_variable"] }}" class="form-label">{{ $option["option_name"] }}<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="{{ $option["type"] }}"
                                                                name="{{ $option["option_variable"] }}" required
                                                                placeholder="{{ $option["option_name"] }}"
                                                                id="{{ $option["option_variable"] }}" />

                                                            @error($option["option_variable"])
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    @endforeach

                                                </div> <!-- end row -->

                                                <div class="row mt-6 ">
                                                    <div class="col-sm-6 d-flex align-items-center">
                                                        <!-- <a href="{{ route("lawyer.index") }}" class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                            {{ __("model.ReturnMainPage") }} </a>
                                                            <i class="mdi mdi-arrow-left"></i>  -->
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="text-sm-end d-flex justify-content-end">
                                                            <button type="submit" class="btn btn-success">
                                                                <i class="mdi mdi-content-save-outline me-1"></i> {{ __("model.CreateModel") }}
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
</x-dashboard.lawyer.master>
