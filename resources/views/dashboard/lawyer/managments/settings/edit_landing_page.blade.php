<x-dashboard.lawyer.master title="Modification de Compétence">


    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
                            <li class="breadcrumb-item active">Settings Website</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Settings Website</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Settings Website </h4>


                        <!-- Steps Information -->
                        <div class="tab-content">
                            {{-- {{ print_r($faqs) }} --}}
                            <!-- Billing Content-->
                            <div class="tab-pane show active" id="billing-information">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mt-2">Website information</h4>
                                        <form action="{{ route('lawyer.settings.landing.page.update',$landing->id) }}"
                                            enctype="multipart/form-data" method="POST">
                                            @method('PUT')
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="siteweb_name_fr" class="form-label">hero
                                                            description<span class="text-danger">*</span></label>
                                                        <textarea rows="5" class="form-control" type="text" name="hero_description"
                                                            placeholder="Change siteweb name fr" id="hero_description">{{ $landing->hero_description }}</textarea>
                                                        @error('hero_description')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="hero_button_text" class="form-label">hero button
                                                            text<span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text"
                                                            value="{{ $landing->hero_button_text }}"
                                                            name="hero_button_text" placeholder="hero button text"
                                                            id="hero_button_text" />
                                                        @error('hero_button_text')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <hr>

                                                    <div class="mb-3">
                                                        <label for="service_one_title" class="form-label">service one
                                                            title<span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text"
                                                            value="{{ $landing->service_one_title }}"
                                                            name="service_one_title" placeholder="Change addresse 1"
                                                            id="service_one_title" />
                                                        @error('service_one_title')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="service_one_description" class="form-label">service
                                                            one description<span class="text-danger">*</span></label>
                                                        <textarea rows="5" class="form-control" type="text" name="service_one_description"
                                                            placeholder="Change siteweb name fr" id="service_one_description">{{ $landing->service_one_description }}</textarea>
                                                        @error('service_one_description')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <hr>

                                                    <div class="mb-3">
                                                        <label for="service_two_title" class="form-label">service two
                                                            title<span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text"
                                                            value="{{ $landing->service_two_title }}"
                                                            name="service_two_title" placeholder="Change addresse 1"
                                                            id="service_two_title" />
                                                        @error('service_two_title')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="service_two_description" class="form-label">service
                                                            two description<span class="text-danger">*</span></label>
                                                        <textarea rows="5" class="form-control" type="text" name="service_two_description"
                                                            placeholder="service two description" id="service_two_description">{{ $landing->service_two_description }}</textarea>
                                                        @error('service_two_description')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <hr>

                                                    <div class="mb-3">
                                                        <label for="service_three_title" class="form-label">service
                                                            three title<span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text"
                                                            value="{{ $landing->service_three_title }}"
                                                            name="service_three_title"
                                                            placeholder="service three title"
                                                            id="service_three_title" />
                                                        @error('service_three_title')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="service_three_description"
                                                            class="form-label">service three description<span
                                                                class="text-danger">*</span></label>
                                                        <textarea rows="5" class="form-control" type="text" name="service_three_description"
                                                            placeholder="service three description" id="service_three_description">{{ $landing->service_three_description }}</textarea>
                                                        @error('service_three_description')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <hr>

                                                    <div class="mb-3">
                                                        <label for="service_four_title" class="form-label">service
                                                            four title<span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text"
                                                            value="{{ $landing->service_four_title }}"
                                                            name="service_four_title" placeholder="Change addresse 1"
                                                            id="service_four_title" />
                                                        @error('service_four_title')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="service_four_description"
                                                            class="form-label">service four description<span
                                                                class="text-danger">*</span></label>
                                                        <textarea rows="5" class="form-control" type="text" name="service_four_description"
                                                            placeholder="Change siteweb name fr" id="service_four_description">{{ $landing->service_four_description }}</textarea>
                                                        @error('service_four_description')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="about_me_text" class="form-label">texte à propos de moi<span class="text-danger">*</span></label>
                                                        <textarea rows="5" class="form-control" type="text" name="about_me_text"
                                                            placeholder="Change about_me_text" id="about_me_text">{{ $landing->about_me_text }}</textarea>
                                                        @error('about_me_text')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <hr>
                                                    <div class="mb-3">
                                                        <label for="faq_id_one" class="form-label">Faq One <span class="text-danger">*</span></label>
                                                        <select class="form-control"  name="faq_id_one">
                                                            @foreach ($faqs as $faq )
                                                                <option
                                                                @if ($faq->id === $landing->faq_id_one)
                                                                    selected
                                                                @endif
                                                                value="{{ $faq->id }}">
                                                                    <p>
                                                                        {{ $faq->question_fr }}
                                                                    </p>
                                                                    <p dir="rtl">
                                                                        {{ $faq->question_ar }}
                                                                    </p>
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('faq_id_one')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="faq_id_two" class="form-label">Faq Two <span class="text-danger">*</span></label>
                                                        <select class="form-control"  name="faq_id_two">
                                                            @foreach ($faqs as $faq )
                                                                <option
                                                                    @if ($faq->id === $landing->faq_id_two)
                                                                        selected
                                                                    @endif
                                                                    value="{{ $faq->id }}">
                                                                    <p>
                                                                        {{ $faq->question_fr }}
                                                                    </p>
                                                                    <p dir="rtl">
                                                                        {{ $faq->question_ar }}
                                                                    </p>
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('faq_id_two')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="faq_id_three" class="form-label">Faq Three <span class="text-danger">*</span></label>
                                                        <select class="form-control"  name="faq_id_three">
                                                            @foreach ($faqs as $faq )
                                                                <option
                                                                    @if ($faq->id === $landing->faq_id_three)
                                                                        selected
                                                                    @endif
                                                                    value="{{ $faq->id }}">
                                                                    <p>
                                                                        {{ $faq->question_fr }}
                                                                    </p>
                                                                    <p dir="rtl">
                                                                        {{ $faq->question_ar }}
                                                                    </p>
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('faq_id_three')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="counter_years_experience"
                                                            class="form-label">counter years experience<span
                                                                class="text-danger">*</span></label>
                                                        <input class="form-control" type="number"
                                                            name="counter_years_experience"
                                                            value="{{ $landing->counter_years_experience }}"
                                                            placeholder="Change counter_years_experience"
                                                            id="counter_years_experience" />
                                                        @error('counter_years_experience')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="counter_clients"
                                                            class="form-label">counter clients<span
                                                                class="text-danger">*</span></label>
                                                        <input class="form-control" type="number"
                                                            name="counter_clients"
                                                            value="{{ $landing->counter_clients }}"
                                                            placeholder="Change counter_clients"
                                                            id="counter_clients" />
                                                        @error('counter_clients')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="counter_cases"
                                                            class="form-label">counter cases<span
                                                                class="text-danger">*</span></label>
                                                        <input class="form-control" type="number"
                                                            name="counter_cases"
                                                            value="{{ $landing->counter_cases }}"
                                                            placeholder="Change counter_cases" id="counter_cases" />
                                                        @error('counter_cases')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="counter_partners"
                                                            class="form-label">counter partners<span
                                                                class="text-danger">*</span></label>
                                                        <input class="form-control" type="number"
                                                            name="counter_partners"
                                                            value="{{ $landing->counter_partners }}"
                                                            placeholder="Change counter_partners"
                                                            id="counter_partners" />
                                                        @error('counter_partners')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="about_me_image" class="form-label">about me image</label>
                                                        <input class="form-control"
                                                        type="file"  id="about_me_image" name="about_me_image" />
                                                        @error('about_me_image')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                        <div class="m-2 img_area_about_me_image" id="display_about_me_image">
                                                            <img class="avatar-xl" src="{{ asset($landing->about_me_image) }}" alt="">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="hero_background" class="form-label">hero backround</label>
                                                        <input class="form-control" name="hero_background" type="file" id="hero_background" />
                                                        @error('hero_background')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                        <div class="m-2 img_area_hero_background" id="display_hero_background">
                                                            <img class="avatar-xl" src="{{ asset($landing->hero_background) }}" alt="">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-sm-6">
                                                    <a href="{{ route('admin.index') }}"
                                                        class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                        <i class="mdi mdi-arrow-left"></i> Return to Home Page </a>
                                                </div> <!-- end col -->
                                                <div class="col-sm-6">
                                                    <div class="text-sm-end">
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="mdi mdi-content-save-outline me-1"></i>
                                                            Sauvegarder Change
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
