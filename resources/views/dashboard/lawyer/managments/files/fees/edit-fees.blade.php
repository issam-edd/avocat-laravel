
<x-dashboard.lawyer.master title="{{ __('client.ModifyFeesClient') }}">


    <div class=" {{ session()->get('locale') === 'ar' ? 'text-right' : 'text-left' }}" dir="{{ session()->get('locale') === 'ar' ? 'rtl' : 'ltr' }}">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{ __('client.ModifyFeesClient') }} : {{ $fileFees->file->client->client_name }} {{ __('client.File') }} : {{ $fileFees->file->avocacy_division }}</h4>
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
                                                {{ __('client.ModifyFeesClient') }} : {{ $fileFees->file->client->client_name }}
                                            </h4>
                                            <form method="POST" action="{{ route("lawyer.fees.update",$fileFees->id) }}" enctype="multipart/form-data">
                                                @csrf
                                                @method("PUT")
                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="advance" class="form-label">{{ __('client.advance') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('advance') is-invalid @enderror"
                                                                type="number" maxlength="10"
                                                                name="advance" value="{{ old("advance",$fileFees->advance) }}" placeholder="{{ __('client.advance') }}"
                                                                id="advance" />
                                                            @error('advance')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="description" class="form-label">{{ __('client.description') }}<span class="text-danger">*</span></label>
                                                            <textarea class="form-control  @error('description') is-invalid @enderror"
                                                                name="description" placeholder="{{ __('client.description') }}"
                                                                id="description">{{ old("description",$fileFees->description) }}</textarea>
                                                            @error('description')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="date" class="form-label">{{ __('client.date') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('date') is-invalid @enderror"
                                                                type="date"
                                                                name="date" value="{{ old("date",$fileFees->date) }}" placeholder="date"
                                                                id="date" />
                                                            @error('date')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="type" class="form-label">{{ __('client.typePayment') }}<span class="text-danger">*</span></label>
                                                            <select onchange="changeForm(this.value)" class="form-control @error('type') is-invalid @enderror" name="type">
                                                                <option value="" disabled selected>{{ __('client.typePayment') }}</option>
                                                                <option {{ $fileFees->type  == "Check" ? "selected" : ""}} value="1">Check</option>
                                                                <option {{ $fileFees->type  == "Virement" ? "selected" : ""}} value="2">Virement</option>
                                                                <option {{ $fileFees->type  == "Cash" ? "selected" : ""}}  value="3">Cash</option>
                                                            </select>
                                                            @error('type')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->

                                                {{-- Form payment --}}
                                                {{-- <div id="form_payment" class="{{ in_array($fileFees->type, ["Virement", "Check"])  ? "show-form" : "hide-form"}}"> --}}
                                                <div id="form_payment" class="{{ $fileFees->type != "Cash"  ? "show-form" : "hide-form"}}">
                                                    <h4 style="border-bottom: 1px solid #eee;" class="header-title mt-2 pb-2 text-center mb-3" id="h4">
                                                        @if ($fileFees->type  == "Check" )
                                                        {{ __('client.addInfoCheck') }}
                                                        @else
                                                        {{ __('client.addInfoVirement')}}
                                                        @endif
                                                    </h4>
                                                    @php
                                                        $classNum = $fileFees->type  == "Check" ? "show-form" : "hide-form" ;
                                                    @endphp
                                                    <div class="col-md-12 {{ $classNum }}" id="input_numero"  >
                                                        <div class="mb-3">
                                                            <label for="numero" class="form-label" id="label_numero">{{ __('client.addNumeroCheck') }}<span class="text-danger">*</span></label>
                                                            @php
                                                                $numero = $fileFees->type  == "Check" ? $fileFees->check->numero : "";
                                                            @endphp

                                                            <input class="form-control @error('numero') is-invalid @enderror"
                                                                type="text"
                                                                name="numero" value="{{ old("numero", $numero  )}}" placeholder="{{ __('client.addNumeroCheck') }}"
                                                                id="numero" />
                                                            @error('numero')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="image" class="form-label">
                                                                <span id="label_image">
                                                                    @if ($fileFees->type  == "Check" )
                                                                    {{ __('client.addImageCheck') }}
                                                                    @else
                                                                    {{ __('client.addImageVirement')}}
                                                                    @endif
                                                                </span>
                                                                <span class="text-danger">*</span></label>
                                                            <input class="form-control @error('image') is-invalid @enderror"
                                                                type="file"
                                                                name="image" value="{{ old("image") }}"
                                                                id="image" />
                                                            @error('image')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                            @if (in_array($fileFees->type, ["Virement", "Check"]) )
                                                                <div class="m-2" >
                                                                    @php
                                                                        $path = $fileFees->type  == "Check" ? $fileFees->check->image : $fileFees->virement->image;
                                                                    @endphp
                                                                    <img class="avatar-xl" src="{{ asset("storage/" . $path ) }}" alt="image expense" />
                                                                </div>
                                                            @endif
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


    <script>
        function changeForm(id)
        {
            // alert(id);
            var form_payment = document.getElementById('form_payment');
            var h4 = document.getElementById('h4');
            var label_numero = document.getElementById('label_numero');
            var label_image = document.getElementById('label_image');

            var input_numero = document.getElementById('input_numero');

            // console.log(id);
            // console.log(typeof id);

            if(id == 1) {
                form_payment.classList.remove('hide-form');
                form_payment.classList.add('show-form');

                h4.innerHTML = "{{ __('client.addInfoCheck') }}" ;
                label_numero.innerHTML = "{{ __('client.addNumeroCheck') }}" ;
                label_image.innerHTML = "{{ __('client.addImageCheck') }}" ;

                input_numero.classList.remove('hide-form');
                input_numero.classList.add('show-form');
            }else if(id == 2) {
                form_payment.classList.remove('hide-form');
                form_payment.classList.add('show-form');

                h4.innerHTML = "{{ __('client.addInfoVirement') }}" ;
                label_image.innerHTML = "{{ __('client.addImageVirement') }}" ;

                input_numero.classList.remove('show-form');
                input_numero.classList.add('hide-form');
            }
            else if(id == 3){
                form_payment.classList.remove('show-form');
                form_payment.classList.add('hide-form');
            }
        }

    </script>
</x-dashboard.admin.master >
