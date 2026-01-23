
<x-dashboard.lawyer.master title="{{ __('client.AddExpense') }}">


    <div class=" {{ session()->get('locale') === 'ar' ? 'text-right' : 'text-left' }}" dir="{{ session()->get('locale') === 'ar' ? 'rtl' : 'ltr' }}">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{ __('client.AddExpense') }}</h4>
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
                                                {{ __('client.AddExpenseClient') }} : {{ $file->client->client_name }}
                                            </h4>

                                            <form method="POST" action="{{ route("lawyer.expenses.store",$file->id) }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="expense" class="form-label">{{ __('client.expense') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('expense') is-invalid @enderror"
                                                                type="number" maxlength="10"
                                                                name="expense" value="{{ old("expense") }}" placeholder="{{ __('client.expense') }}"
                                                                id="expense" />
                                                            @error('expense')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="amount" class="form-label">{{ __('client.advance') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('amount') is-invalid @enderror"
                                                                type="number" maxlength="10"
                                                                name="amount" value="{{ old("amount") }}" placeholder="{{ __('client.advance') }}"
                                                                id="amount" />
                                                            @error('amount')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="description" class="form-label">{{ __('client.description') }}<span class="text-danger">*</span></label>
                                                            <textarea class="form-control  @error('description') is-invalid @enderror"
                                                                name="description" placeholder="{{ __('client.description') }}"
                                                                id="description">{{ old("description") }}</textarea>
                                                            @error('description')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="image_expense" class="form-label">{{ __('client.imageExpense') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('image_expense') is-invalid @enderror"
                                                                type="file"
                                                                name="image_expense" value="{{ old("image_expense") }}"
                                                                id="image_expense" />
                                                            @error('image_expense')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="date" class="form-label">{{ __('client.date') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('date') is-invalid @enderror"
                                                                type="date"
                                                                name="date" value="{{ old("date") }}" placeholder="{{ __('client.date') }}"
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
                                                                <option {{ old("type") == 1 ? "selected" : ""}} value="1">Check</option>
                                                                <option  value="2">Virement</option>
                                                                <option {{ old("type") == 3 ? "selected" : ""}} value="3">Cash</option>
                                                            </select>
                                                            @error('type')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->

                                                {{-- Form payment --}}
                                                <div id="form_payment" class="{{ old("type") == 1 ? "show-form" : "hide-form"}}">
                                                    <h4 style="border-bottom: 1px solid #eee;" class="header-title mt-2 pb-2 text-center mb-3" id="h4">
                                                        {{ __('client.addInfoCheck') }}
                                                    </h4>
                                                    <div class="col-md-12" id="input_numero" >
                                                        <div class="mb-3">
                                                            <label for="numero" class="form-label" id="label_numero">{{ __('client.addNumeroCheck') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('numero') is-invalid @enderror"
                                                                type="text"
                                                                name="numero" value="{{ old("numero") }}" placeholder="{{ __('client.addNumeroCheck') }}"
                                                                id="numero" />
                                                            @error('numero')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="image" class="form-label" id="label_image">{{ __('client.addImageCheck') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('image') is-invalid @enderror"
                                                                type="file"
                                                                name="image" value="{{ old("image") }}"
                                                                id="image" />
                                                            @error('image')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
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

            if(id == 1) {
                form_payment.classList.remove('hide-form');
                form_payment.classList.add('show-form');

                h4.innerHTML = "{{ __('client.addInfoCheck') }}" ;
                label_numero.innerHTML = "{{ __('client.addNumeroCheck') }}" ;
                label_image.innerHTML = "{{ __('client.addImageCheck') }}" ;

                input_numero.classList.remove('hide-form');
                input_numero.classList.add('show-form');
            }else if(id == 2) {

                input_numero.classList.remove('show-form');
                input_numero.classList.add('hide-form');

                form_payment.classList.remove('hide-form');
                form_payment.classList.add('show-form');

                h4.innerHTML = "{{ __('client.addInfoVirement') }}" ;
                label_numero.innerHTML = "Ajouter numero de virement" ;
                label_image.innerHTML = "{{ __('client.addImageVirement') }}" ;
            }else{
                form_payment.classList.remove('show-form');
                form_payment.classList.add('hide-form');
            }
        }

    </script>
</x-dashboard.admin.master >
