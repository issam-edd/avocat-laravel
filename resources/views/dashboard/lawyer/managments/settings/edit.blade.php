<x-dashboard.lawyer.master title="Modifier Profile">


    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ __('settings.Setting') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('settings.ModifyProfile') }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('settings.ModifyProfile') }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body" @if (session()->get("locale") === "ar") dir="rtl"  @endif>
                        <h4 style="border-bottom: 1px solid #eee;" class="header-title mt-2 pb-2 text-center mb-3" >{{ __('settings.ModifyProfile') }}</h4>

                        <div class="tab-content">
                            <div class="tab-pane show active" id="input-types-preview">
                                <form action="{{ route("lawyer.settings.update") }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="last_name" class="form-label">{{ __('settings.NomFR') }}</label>
                                                    <input autocomplete="off" type="text" name="last_name"
                                                        id="last_name" value="{{ old('last_name', $lawyer->user->last_name) }}"
                                                        class="form-control @error('last_name') is-invalid @enderror">
                                                    @error('last_name')
                                                        <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="first_name" class="form-label">{{ __('settings.PrenomFR') }}</label>
                                                    <input autocomplete="off" type="text" name="first_name"
                                                        id="first_name" value="{{ old('first_name',$lawyer->user->first_name) }}"
                                                        class="form-control @error('first_name') is-invalid @enderror">
                                                    @error('first_name')
                                                        <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="nom_ar" class="form-label">{{ __('settings.NomAR') }}</label>
                                                    <input dir="rtl" autocomplete="off" type="text" name="first_name_ar"
                                                        id="nom_ar" value="{{ old('first_name_ar',$lawyer->first_name_ar) }}"
                                                        class="form-control @error('nom_ar') is-invalid @enderror">
                                                    @error('first_name_ar')
                                                        <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="prenom_ar" class="form-label">{{ __('settings.PrenomAR') }}</label>
                                                    <input dir="rtl" autocomplete="off" type="text" name="last_name_ar"
                                                        id="prenom_ar" value="{{ old('last_name_ar',$lawyer->last_name_ar) }}"
                                                        class="form-control @error('prenom_ar') is-invalid @enderror">
                                                    @error('last_name_ar')
                                                        <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="old_password" class="form-label">{{ __('settings.OldPass') }}</label>
                                                    <div class="input-group input-group-merge">
                                                        <input autocomplete="off" type="password"
                                                            id="old_password" name="old_password" value="{{ old('old_password') }}"
                                                            class="form-control @error('old_password') is-invalid @enderror"
                                                            placeholder="Enter Ancien mot de passe">
                                                        <div class="input-group-text" data-password="false">
                                                            <span class="password-eye"></span>
                                                        </div>
                                                    </div>
                                                    @error('password')
                                                        <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="new_password" class="form-label">{{ __('settings.NewPass') }}</label>
                                                    <div class="input-group input-group-merge">
                                                        <input autocomplete="off" type="password"
                                                            id="new_password" name="new_password" value="{{ old('new_password') }}"
                                                            class="form-control @error('new_password') is-invalid @enderror"
                                                            placeholder="Enter Nouveau mot de passe">
                                                        <div class="input-group-text" data-password="false">
                                                            <span class="password-eye"></span>
                                                        </div>
                                                    </div>
                                                    @error('password')
                                                        <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="c_password" class="form-label">{{ __('settings.ConfPass') }}</label>
                                                    <div class="input-group input-group-merge">
                                                        <input autocomplete="off" type="password"
                                                            id="c_password" name="c_password" value="{{ old('c_password') }}"
                                                            class="form-control @error('c_password') is-invalid @enderror"
                                                            placeholder="Enter la Confirmation">
                                                        <div class="input-group-text" data-password="false">
                                                            <span class="password-eye"></span>
                                                        </div>
                                                    </div>
                                                    @error('password')
                                                        <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                    <div class="mb-3">
                                                        <label for="profile_image" class="form-label">{{ __('settings.SelectImg') }}</label>
                                                        <input class="form-control @error('profile_image') is-invalid @enderror"
                                                            name="profile_image" type="file" id="image_blog" />
                                                        @error('profile_image')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                        <div class="m-2 img_area_blog" id="img_area_blog">
                                                            <img class="avatar-xl" src="{{ asset($lawyer->user->profile_image)}}" alt="image blog" />
                                                        </div>
                                                    </div>

                                                    {{-- <input name="profile_image" type="file"  /> --}}
                                        </div> <!-- end col -->

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="bio_fr" class="form-label">{{ __('settings.BioFR') }}</label>
                                                <textarea class="form-control @error('bio_fr') is-invalid @enderror"
                                                id="bio_fr" name="bio_fr" rows="5">{{ old('bio_fr',$lawyer->bio_fr) }}</textarea>
                                                @error('bio_fr')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="bio_ar" class="form-label">{{ __('settings.BioAR') }}</label>
                                                <textarea dir="rtl" class="form-control @error('bio_ar') is-invalid @enderror"
                                                id="bio_ar" name="bio_ar" rows="5">{{ old('bio_ar',$lawyer->bio_ar) }}</textarea>
                                                @error('bio_ar')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="phone_number" class="form-label">{{ __('settings.NumTel') }}</label>
                                                <input autocomplete="off" type="text" name="phone_number" id="phone_number"
                                                    class="form-control @error('phone_number') is-invalid @enderror"
                                                    value="{{ old('phone_number',$lawyer->phone_number) }}"
                                                    >
                                                @error('phone_number')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="address" class="form-label">{{ __('settings.Address') }}</label>
                                                <input autocomplete="off" type="text" name="address" id="address"
                                                    class="form-control @error('address') is-invalid @enderror"
                                                    value="{{ old('address',$lawyer->address) }}"
                                                    >
                                                @error('address')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            {{-- Slug --}}
                                            <div class="mb-3">
                                                <label for="slug" class="form-label">Slug</label>
                                                <input autocomplete="off" type="text" name="slug" id="slug"
                                                    class="form-control @error('slug') is-invalid @enderror"
                                                    value="{{ old('slug',$lawyer->slug) }}"
                                                    >
                                                @error('slug')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            {{-- End Slug --}}
                                            <div class="mb-3">
                                                <label for="google_maps_link" class="form-label">{{ __('settings.LienGoogleMaps') }}</label>
                                                <input autocomplete="off" type="text"
                                                    id="google_maps_link" name="google_maps_link"
                                                    value="{{ old('google_maps_link',$lawyer->google_maps_link) }}"
                                                    class="form-control @error('google_maps_link') is-invalid @enderror" >
                                                @error('google_maps_link')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="whatsapp_link" class="form-label">{{ __('settings.LienWhats') }}</label>
                                                <input autocomplete="off" type="text"
                                                    value="{{ old('whatsapp_link',$lawyer->whatsapp_link) }}"
                                                    id="whatsapp_link" name="whatsapp_link"
                                                    class="form-control @error('whatsapp_link') is-invalid @enderror" >
                                                @error('whatsapp_link')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="linkedin_link" class="form-label">{{ __('settings.LienLinkedIn') }}</label>
                                                <input autocomplete="off" type="text"
                                                    value="{{ old('linkedin_link',$lawyer->linkedin_link) }}"
                                                    id="linkedin_link" name="linkedin_link"
                                                    class="form-control @error('linkedin_link') is-invalid @enderror" >
                                                @error('linkedin_link')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row-->
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
                            </div> <!-- end preview-->


                        </div> <!-- end tab-content-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->




    </div> <!-- container -->

    </x-dashboard.lawyer.master>
