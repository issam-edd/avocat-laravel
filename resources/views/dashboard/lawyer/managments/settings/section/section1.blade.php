<x-dashboard.lawyer.master title="{{ __('lawyerLanding.ModifyFirstSection') }}">


        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ __('settings.Setting') }}</a>
                            </li>
                            <li class="breadcrumb-item active">{{ __('lawyerLanding.ModifyFirstSection') }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('lawyerLanding.ModifyFirstSection') }}</h4>
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
                                    <div class="col-lg-12" @if (session()->get('locale') === 'ar') dir="rtl" @endif>
                                        <h4 style="border-bottom: 1px solid #eee;" class="mt-2 pb-2 text-center mb-3">
                                            @if( $sectionOne ?? false) {{ __('lawyerLanding.modifySlide') }} @else {{ __('lawyerLanding.addSlide') }} @endif
                                        </h4>
                                        <form action="
                                            {{( $sectionOne ?? false) ?
                                                route('lawyer.settings.landing.page.section.one.update', $sectionOne->id)
                                                :
                                                route('lawyer.settings.landing.page.section.one.add')
                                            }}"
                                            enctype="multipart/form-data" method="POST">

                                            @if( $sectionOne ?? false)
                                                @method('PUT')
                                            @else
                                                @method('POST')
                                            @endif

                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="sub_title" class="form-label">
                                                            {{ __('lawyerLanding.subTitle') }}<span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text"
                                                            value="{{ $sectionOne->sub_title ?? '' }}" name="sub_title"
                                                            placeholder="{{ __('lawyerLanding.subTitle') }}" id="sub_title">
                                                        @error('sub_title')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">
                                                            {{ __('lawyerLanding.title') }}<span class="text-danger">*</span></label>
                                                        <input class="form-control"
                                                            value="{{ $sectionOne->title ?? '' }}" type="text"
                                                            name="title" placeholder="{{ __('lawyerLanding.title') }}" id="title">
                                                        @error('title')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="sub_title_ar" class="form-label">
                                                            {{ __('lawyerLanding.subTitleAr') }}<span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text"
                                                            value="{{ $sectionOne->sub_title_ar ?? '' }}" name="sub_title_ar"
                                                            placeholder="{{ __('lawyerLanding.subTitleAr') }}" id="sub_title_ar">
                                                        @error('sub_title_ar')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">
                                                            {{ __('lawyerLanding.titleAr') }}<span class="text-danger">*</span></label>
                                                        <input class="form-control"
                                                            value="{{ $sectionOne->title_ar ?? '' }}" type="text"
                                                            name="title_ar" placeholder="{{ __('lawyerLanding.titleAr') }}" id="title_ar">
                                                        @error('title_ar')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="button_text" class="form-label">
                                                            {{ __('lawyerLanding.textButton') }}<span
                                                                class="text-danger">*</span></label>
                                                        <input class="form-control" type="text"
                                                            value="{{ $sectionOne->button_text ?? '' }}"
                                                            name="button_text"
                                                            placeholder="{{ __('lawyerLanding.textButton') }}"
                                                            id="button_text" />
                                                        @error('button_text')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="button_text_ar" class="form-label">
                                                            {{ __('lawyerLanding.textButtonAr') }}<span
                                                                class="text-danger">*</span></label>
                                                        <input class="form-control" type="text"
                                                            value="{{ $sectionOne->button_text_ar ?? '' }}"
                                                            name="button_text_ar"
                                                            placeholder="{{ __('lawyerLanding.textButtonAr') }}"
                                                            id="button_text_ar" />
                                                        @error('button_text_ar')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="button_link" class="form-label">
                                                            {{ __('lawyerLanding.linkButton') }}<span
                                                                class="text-danger">*</span></label>
                                                        <input class="form-control" type="text"
                                                            value="{{ $sectionOne->button_link ?? '' }}"
                                                            name="button_link"
                                                            placeholder="{{ __('lawyerLanding.linkButton') }}"
                                                            id="button_link" />
                                                        @error('button_link')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="description" class="form-label">
                                                            {{ __('lawyerLanding.DescriptionLawyer') }}<span
                                                                class="text-danger">*</span></label>
                                                        <textarea rows="5" class="form-control" type="text" name="description"
                                                            placeholder="{{ __('lawyerLanding.DescriptionLawyer') }}" id="description">{{ $sectionOne->description ?? '' }}</textarea>
                                                        @error('description')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="description_ar" class="form-label">
                                                            {{ __('lawyerLanding.DescriptionLawyerAr') }}<span
                                                                class="text-danger">*</span></label>
                                                        <textarea rows="5" class="form-control" type="text" name="description_ar"
                                                            placeholder="{{ __('lawyerLanding.DescriptionLawyerAr') }}" id="description_ar">{{ $sectionOne->description_ar ?? '' }}</textarea>
                                                        @error('description_ar')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="image_link" class="form-label">@if( $sectionOne ?? false) {{ __('lawyerLanding.modifyImage') }} @else {{ __('lawyer.image') }} @endif</label>
                                                    <input class="form-control @error('image_link') is-invalid @enderror"
                                                        name="image" type="file" id="image_blog" />
                                                    @error('image_link')
                                                        <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                    @if( $sectionOne ?? false)
                                                        <div class="m-2 img_area_blog" id="img_area_blog">
                                                            <img class="avatar-xl"
                                                            src="{{ asset($sectionOne->image) }}"
                                                            alt="">
                                                        </div>
                                                    @else
                                                        <div class="m-2 img_area_blog" id="img_area_blog">
                                                        </div>
                                                    @endif
                                                    @error('image')
                                                        <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="image_link" class="form-label">@if( $sectionOne ?? false) {{ __('lawyerLanding.modifyImage') }} @else {{ __('lawyer.image') }} @endif BG</label>
                                                    <input class="form-control @error('image_link') is-invalid @enderror"
                                                        name="background" type="file" id="image_bg" />
                                                    @error('image_link')
                                                        <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                    @if( $sectionOne ?? false)
                                                        <div class="m-2 img_area_bg" id="img_area_bg">
                                                            <img class="avatar-xl"
                                                            src="{{ asset($sectionOne->background) }}"
                                                            alt="">
                                                        </div>
                                                    @else
                                                        <div class="m-2 img_area_bg" id="img_area_bg">
                                                        </div>
                                                    @endif
                                                    @error('background')
                                                        <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="switch4" class="form-label">{{ __('lawyer.publier') }}</label>
                                                        <div>
                                                            <input type="checkbox" name="is_published"
                                                            {{ ($sectionOne->is_published ?? false ) ? $sectionOne->is_published === 1 ? "checked" : "" : ""  }}
                                                            id="is_published" data-switch="info"/>
                                                            <label for="is_published" data-on-label="On" data-off-label="Off"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end row-->
                                                <div class="row mt-4">
                                                    <div class="col-sm-6">
                                                        <a href="{{ route('lawyer.index') }}"
                                                            class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                            <i class="mdi mdi-arrow-right"></i>
                                                            {{ __('lawyer.back_home') }} </a>
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="text-sm-end d-flex justify-content-end">
                                                            @if ($sectionOne ?? false)
                                                                <a href="{{ route("lawyer.settings.landing.page.section.one.show") }}" class="btn btn-secondary mx-2">
                                                                    {{ __("button.Annuler") }}
                                                                </a>
                                                                <button type="submit" class="btn btn-success">
                                                                    <i class="mdi mdi-content-save-outline me-1"></i>
                                                                    {{ __('lawyer.update') }}
                                                                </button>
                                                            @else
                                                                <button type="submit" class="btn btn-primary">
                                                                    <i class="mdi mdi-content-save-outline me-1"></i>
                                                                    {{ __('lawyer.create') }}
                                                                </button>
                                                            @endif
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->
                                            </div>
                                        </form>
                                    </div>
                                </div> <!-- end row-->
                            </div>
                            <!-- End Billing Information Content-->
                        </div> <!-- end tab content-->

                        <div class="tab-content  table-responsive mt-3" >
                            <div class="tab-pane show active" id="buttons-table-preview">
                                <table
                                @if (session()->get("locale") === "ar") dir="rtl"  @endif
                                id="datatable-buttons" class="table table-centered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>BG</th>
                                        <th>{{ __('lawyerLanding.image') }}</th>
                                        <th>{{ __('lawyerLanding.subTitle') }}</th>
                                        <th>{{ __('lawyerLanding.title') }}</th>
                                        <th>{{ __('lawyerLanding.DescriptionLawyer') }}</th>
                                        <th>{{ __('lawyerLanding.textButton') }}</th>
                                        <th>{{ __('lawyerLanding.linkButton') }}</th>
                                        <th>{{ __('lawyerLanding.DescriptionLawyer') }}</th>
                                        <th>{{ __('lawyerLanding.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($allSectionOne as $section )
                                    @php
                                        $i++;
                                    @endphp
                                        <tr class="table-active">
                                            <td>{{ $section->id }}</td>
                                            <td>
                                                <img src="{{ asset($section->background) }}" alt="image" class="img-fluid avatar-xl">
                                            </td>
                                            <td>
                                                <img src="{{ asset($section->image) }}" alt="image" class="img-fluid avatar-xl">
                                            </td>
                                            <td>{{ $section->sub_title }}</td>
                                            <td>{{ $section->title }}</td>
                                            <td>{{ Str::limit($section->description, 50, '...') }}</td>
                                            <td>{{ $section->button_text }}</td>
                                            <td>{{ $section->button_link }}</td>
                                            <td>
                                                <!-- Switch-->
                                                <div>
                                                    <input type="checkbox" name="is_published" onchange="changeStatus({{ $section->id }})"
                                                            {{ ($section->is_published ?? false ) ? $section->is_published == 1 ? "checked" : "" : ""  }}
                                                            id="is_published{{ $i }}" data-switch="info"/>
                                                    <label for="is_published{{ $i }}" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </td>
                                            <td class="table-action" id="hide">
                                                <div class="d-flex justify-content-center">

                                                    <a href="{{ route("lawyer.settings.landing.page.section.one.show",$section->id) }}" class="btn btn-sm btn-warning ms-2 d-flex align-items-center justify-content-center">
                                                        <i class="mdi mdi-square-edit-outline"></i> <span class="ms-1">{{ __("button.Edit") }}</span>
                                                    </a>

                                                    <a onclick="deleteSection({{ $section->id }})" class="btn btn-sm btn-danger ms-2 d-flex align-items-center justify-content-center">
                                                        <i class="mdi mdi-delete"></i>{{ __("button.Delete") }}
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div> <!-- end preview-->

                        </div> <!-- end tab-content-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
            <div class="modal fade" id="deleteSectionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 @if (session()->get("locale") === "ar") dir="rtl"  @endif class="modal-title" id="exampleModalLabel">{{ __("model.DeleteSection") }}</h5>

                            <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close" @if (session()->get("locale") === "ar") dir="rtl"  @endif>
                            </button>
                        </div>
                        <div @if (session()->get("locale") === "ar") dir="rtl"  @endif class="modal-body">
                            <p>{{ __("model.textConfirmDelete") }}</p>
                            <small class="font-weight-bold" style="color:#edb200;">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                                {{ __("model.textConfirmAction") }}
                            </small>
                            <div class="modal-footer" @if (session()->get("locale") === "ar") dir="rtl"  @endif>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    {{ __("button.Annuler") }}
                                </button>

                                <form id="deleteSectionForm" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="{{ __("button.Delete") }}" class="btn btn-danger">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <script>
            function deleteSection(id) {
                $('#deleteSectionModal').modal('toggle'); // taffichage modal
                $('#deleteSectionForm').attr('action', '/lawyer/settings/landing-page/section-one/delete/' + id); //nhd id fl form #deleteStudentForm
            }

            function changeStatus(id) {
                window.location.href = `{{URL::to('/lawyer/settings/landing-page/section-one/published/${id}')}}`;
            }
        </script>

</x-dashboard.lawyer.master>
