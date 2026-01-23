<x-dashboard.lawyer.master title="Home">
    <!-- Start Content-->
    <div>

        <!-- start page eFees-title -->
        <!-- start page title -->
        {{-- <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">EFees</a></li>
                            <li class="breadcrumb-item active">Inbox</li>
                        </ol>
                    </div>
                    <h4 class="page-title">
                        Fees pour client : <span class="text-muted">{{ $expenseFile->file->client->client_name }}</span>
                        Tele de client : {{ $expenseFile->file->client->phone_number }}
                    </h4>
                </div>
            </div>
        </div> --}}
        <div class="row" dir="{{ session()->get('locale') === 'ar' ? "rtl" : "ltr"}}">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title row" >
                        <div class="col-12 col-md-12 col-sm-12">
                            {{ __('client.FeesClient') }} : <span class="text-muted">{{ $expenseFile->file->client->client_name }}</span>
                        </div>
                        <div class="col-12 col-md-12 col-sm-12 mt-0">
                            {{ __('client.PhoneNumber') }} : <span class="text-muted">{{ $expenseFile->file->client->phone_number }}</span>
                        </div>
                    </h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <!-- end page eFees-title -->

        <div class="row">
            <div class="col-md-12 mx-auto mb-4">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group" dir="{{ session()->get('locale') === 'ar' ? "rtl" : "ltr"}}">
                            @if(!!$expenseFile->expense)
                                <li class="list-group-item">
                                    <span class="fs-4  fw-bold"> {{ __('client.expense') }} : <span class="ms-2 text-muted">{{ $expenseFile->expense }} {{ __('client.Dh') }}</span> </span>
                                </li>
                            @endif

                            @if(!!$expenseFile->amount)
                                <li class="list-group-item">
                                    <span class="fs-4  fw-bold"> {{ __('client.Amount') }} : <span class="ms-2 text-muted">{{ $expenseFile->amount }} {{ __('client.Dh') }}</span> </span>
                                </li>
                            @endif
                            @if(!!$expenseFile->description)
                                <li class="list-group-item">
                                    <span class="fs-4  fw-bold"> {{ __('client.description') }} : <span class="ms-2 text-muted">{{ $expenseFile->description }}</span> </span>
                                </li>
                            @endif

                            @if (!!$expenseFile->image_expense)
                                <li class="list-group-item">
                                    <span class="fs-4  fw-bold"> {{ __('client.imageExpense') }} :
                                        <span class="ms-2 text-muted">
                                            <img class="avatar-xl" src="{{ asset("storage/". $expenseFile->image_expense) }}" alt="">
                                        </span>
                                    </span>
                                </li>
                            @endif

                            @if (!!$expenseFile->virement)
                                <li class="list-group-item">
                                    <h3 class="text-muted">{{ __('client.InfoVirement') }} :</h3>
                                    <hr>
                                    <span class="fs-4  fw-bold"> {{ __('client.ImageVirement') }} :
                                        <span class="ms-2 text-muted">
                                            <img class="avatar-xl" src="{{ asset("storage/". $expenseFile->virement->image) }}" alt="">
                                        </span>
                                    </span>
                                </li>
                            @elseif (!!$expenseFile->check)
                                <li class="list-group-item">
                                    <h3 class="text-muted">{{ __('client.InfoCheck') }} :</h3>
                                    <hr>

                                    <span class="fs-4  fw-bold"> {{ __('client.NumeroCheck') }} :
                                        <span class="ms-2 text-muted">
                                            {{ $expenseFile->check->numero }}
                                        </span>
                                    </span>
                                    <hr>
                                    <span class="fs-4  fw-bold"> {{ __('client.ImageCheck') }} :
                                        <span class="ms-2 text-muted">
                                            <img class="avatar-xl" src="{{ asset("storage/". $expenseFile->check->image) }}" alt="">
                                        </span>
                                    </span>

                                </li>
                            @endif

                            <li class="list-group-item row" id="hide">
                                <a onclick="window.print()" class="col-5 col-lg-3 btn btn-outline-primary rounded-pill">
                                    <i class="mdi mdi-printer-outline  me-1"></i> {{ __('button.Imprimer') }}
                                </a>
                                <a class="btn btn-outline-danger mx-2 rounded-pill col-md-3  col-lg-3  col-5" onclick="deleteFees({{ $expenseFile->id }})" style="cursor: pointer"><i
                                    class="mdi mdi-delete eFees-action-icons-item ms-1"></i> {{ __('button.Delete') }}</a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="modal fade" id="deleteFeesModal" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Supprimer Fees</h5>

                                    <button type="button" class="btn btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Voulez-vous vraiment supprimer cet Fees ?</p>
                                    <small class="font-weight-bold" style="color:#edb200;">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        Cette action ne peut pas être annulée !
                                    </small>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Annuler</button>

                                        <form id="deleteFeesForm" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Supprimer" class="btn btn-danger">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end card-body -->
                    <div class="clearfix"></div>
            </div>

            <!-- Right Sidebar -->
            {{-- <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Left sidebar -->

                        <!-- End Left sidebar -->

                        <div class="col-12">
                            <div class="mt-3">
                                <h5 class="font-15">Fees pour client : <span class="text-muted">{{ $expenseFile->file->client->client_name }}</span>
                                </h5>
                                <h5 class="font-15">Tele de client : {{ $expenseFile->file->client->phone_number }} </h5>

                                <hr/>

                                <div class="m-2">
                                    <p class="font-15">
                                        <span class="text-muted"> Expense :</span> {{ $expenseFile->expense }}
                                    </p>
                                    <p class="font-15">
                                        <span class="text-muted"> Amount :</span> {{ $expenseFile->amount }}
                                    </p>
                                    <p class="font-15">
                                        <span class="text-muted"> Description :</span> {{ $expenseFile->description }}
                                    </p>

                                    <div>
                                        <img class="avatar-xl" src="{{ asset("storage/". $expenseFile->image_expense) }}" alt="">
                                    </div>
                                    <p class="font-15">
                                        @if (!!$expenseFile->virement)
                                            <h3 class="text-muted">Info de Virement :</h3>
                                            <div>
                                                <span class="text-muted"> Image :</span>
                                                <img class="avatar-xl" src="{{ asset("storage/". $expenseFile->virement->image) }}" alt="">
                                            </div>
                                        @elseif (!!$expenseFile->check)
                                            <span class="text-muted"> Check :</span>
                                            <div>
                                                <span class="text-muted"> Numero :</span> {{ $expenseFile->check->numero }}
                                            </div>
                                            <div>
                                                <span class="text-muted"> Image :</span>
                                                <img class="avatar-xl" src="{{ asset("storage/". $expenseFile->check->image) }}" alt="">
                                            </div>
                                        @endif
                                    </p>

                                </div>

                                <hr/>
                                <!-- end row-->

                                <div class="mt-5" id="hide">
                                    <a onclick="window.print()" class="btn btn-outline-primary rounded-pill">
                                        <i class="mdi mdi-printer-outline  me-1"></i> Imprimer
                                    </a>
                                    <a class="btn btn-outline-danger rounded-pill" onclick="deleteFees({{ $expenseFile->id }})" style="cursor: pointer"><i
                                        class="mdi mdi-delete eFees-action-icons-item ms-1"></i> Supprimer</a>
                                </div>
                                <!-- end .mt-4 -->

                            </div>
                            <!-- end .mt-4 -->
                            <!-- end row-->
                        </div>
                        <!-- end inbox-rightbar-->
                    </div>
                    <div class="modal fade" id="deleteFeesModal" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Supprimer Fees</h5>

                                    <button type="button" class="btn btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Voulez-vous vraiment supprimer cet Fees ?</p>
                                    <small class="font-weight-bold" style="color:#edb200;">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        Cette action ne peut pas être annulée !
                                    </small>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Annuler</button>

                                        <form id="deleteFeesForm" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Supprimer" class="btn btn-danger">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end card-body -->
                    <div class="clearfix"></div>
                </div> <!-- end card-box -->

            </div> <!-- end Col --> --}}
        </div><!-- End row -->
    </div> <!-- container -->

    <script>
        function deleteFees(id) {
            $('#deleteFeesModal').modal('toggle');
            $('#deleteFeesForm').attr('action', '/lawyer/expenses/delete/' + id);
        }
    </script>
</x-dashboard.lawyer.master>
