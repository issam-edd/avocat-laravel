<x-dashboard.admin.master title="Modifier Avocat">


    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Avocat</a></li>
                            <li class="breadcrumb-item active">Modifier Avocat</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Modifier Avocat</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Modifier Avocat</h4>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="input-types-preview">
                                <form action="{{ route("admin.avocats.update", $avocat->id) }}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="last_name" class="form-label">Nom FR</label>
                                                    <input autocomplete="off" type="text" name="last_name"
                                                        id="last_name" value="{{ $avocat->last_name }}"
                                                        class="form-control @error('last_name') is-invalid @enderror">
                                                    @error('last_name')
                                                        <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="first_name" class="form-label">Prenom FR</label>
                                                    <input autocomplete="off" type="text" name="first_name"
                                                        id="first_name" value="{{ $avocat->first_name }}"
                                                        class="form-control @error('first_name') is-invalid @enderror">
                                                    @error('first_name')
                                                        <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="last_name_ar" class="form-label">Nom AR</label>
                                                    <input dir="rtl" autocomplete="off" type="text" name="last_name_ar"
                                                        id="last_name_ar" value="{{ $avocat->lawyerDetail->last_name_ar }}"
                                                        class="form-control @error('last_name_ar') is-invalid @enderror">
                                                    @error('last_name_ar')
                                                        <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="first_name_ar" class="form-label">Prenom AR</label>
                                                    <input dir="rtl" autocomplete="off" type="text" name="first_name_ar"
                                                        id="first_name_ar" value="{{ $avocat->lawyerDetail->first_name_ar }}"
                                                        class="form-control @error('first_name_ar') is-invalid @enderror">
                                                    @error('first_name_ar')
                                                        <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input autocomplete="off" type="text" name="email"
                                                        id="email" value="{{ $avocat->email }}"
                                                        class="form-control @error('email') is-invalid @enderror">
                                                    @error('email')
                                                        <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Mot de pass</label>
                                                    <div class="input-group input-group-merge">
                                                        <input autocomplete="off" type="password"
                                                            id="password" name="password" value="{{ old("password") }}"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            placeholder="Enter your password">
                                                        <div class="input-group-text" data-password="false">
                                                            <span class="password-eye"></span>
                                                        </div>
                                                    </div>
                                                    @error('password')
                                                        <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bio_fr" class="form-label">Bio FR</label>
                                                    <textarea class="form-control @error('bio_fr') is-invalid @enderror"
                                                    id="bio_fr" name="bio_fr" rows="5">{{ $avocat->lawyerDetail->bio_fr }}</textarea>
                                                    @error('bio_fr')
                                                        <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="bio_ar" class="form-label">Bio AR</label>
                                                    <textarea dir="rtl" class="form-control @error('bio_ar') is-invalid @enderror"
                                                    id="bio_ar" name="bio_ar" rows="5">{{ $avocat->lawyerDetail->bio_ar }}</textarea>
                                                    @error('bio_ar')
                                                        <div class="alert text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="switch4" class="form-label">Est premium</label>
                                                <div>
                                                    <input type="checkbox" name="is_premium"
                                                    {{ $avocat->lawyerDetail->is_premium === 1 ? "checked" : "" }}
                                                    id="is_premium" data-switch="info"/>
                                                    <label for="is_premium" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="address" class="form-label">Address</label>
                                                <input autocomplete="off" type="text" name="address" id="address"
                                                    class="form-control @error('address') is-invalid @enderror"
                                                    value="{{ $avocat->lawyerDetail->address }}"
                                                    >
                                                @error('address')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="phone_number" class="form-label">Numero Tele</label>
                                                <input autocomplete="off" type="text" name="phone_number" id="phone_number"
                                                    class="form-control @error('phone_number') is-invalid @enderror"
                                                    value="{{ $avocat->lawyerDetail->phone_number }}"
                                                    >
                                                @error('phone_number')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="google_maps_link" class="form-label">Google maps link</label>
                                                <input autocomplete="off" type="text"
                                                    id="google_maps_link" name="google_maps_link"
                                                    value="{{ $avocat->lawyerDetail->google_maps_link }}"
                                                    class="form-control @error('google_maps_link') is-invalid @enderror" >
                                                @error('google_maps_link')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="whatsapp_link" class="form-label">Whatsapp link</label>
                                                <input autocomplete="off" type="text"
                                                    value="{{ $avocat->lawyerDetail->whatsapp_link }}"
                                                    id="whatsapp_link" name="whatsapp_link"
                                                    class="form-control @error('whatsapp_link') is-invalid @enderror" >
                                                @error('whatsapp_link')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="linkedin_link" class="form-label">Linkedin link</label>
                                                <input autocomplete="off" type="text"
                                                    value="{{ $avocat->lawyerDetail->linkedin_link }}"
                                                    id="linkedin_link" name="linkedin_link"
                                                    class="form-control @error('linkedin_link') is-invalid @enderror" >
                                                @error('linkedin_link')
                                                    <div class="alert text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>


                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row-->
                                    <div class="justify-content-end row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-info">Modifier</button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- end preview-->


                        </div> <!-- end tab-content-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->




    </div> <!-- container -->

    </x-dashboard.admin.master>
