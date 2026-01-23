<x-dashboard.lawyer.master title="{{ __('client.Clients') }}">

    <!-- Start Content-->
    @php
        $dir = session()->get('locale') === 'ar' ? 'rtl' : 'ltr';
    @endphp

        <!-- start page title -->
        <div class="row" dir="{{ $dir }}">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{ __('client.Clients') }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        {{-- ------------------------------------------ --}}
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title" dir="{{ $dir }}">{{ __('client.ListClients') }}</h4>


                        {{-- <div class="tab-content  table-responsive"> --}}
                        <div class="tab-content  table-responsive">
                            <div class="tab-pane show active" id="buttons-table-preview">
                                <table id="datatable-buttons" class="table table-centered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>{{ __('client.ClientName') }}</th>
                                            <th>{{ __('client.PhoneNumber') }}</th>
                                            <th style="width: 85px;">{{ __("model.Actions") }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($clients as $client)

                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>

                                            <td>{{ $client->client_name }}</td>
                                            <td>{{ $client->phone_number }}</td>
                                            <td class="table-action">
                                                {{-- <a href="" class="action-icon"> <i
                                                        class="mdi mdi-eye"></i></a> --}}
                                                <a href="{{ route("lawyer.clients.edit", $client->id) }}"
                                                class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" onclick="deleteclient({{ $client->id }})" class="action-icon"> <i
                                                        class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- end preview-->

                        </div> <!-- end tab-content-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div> <!-- end row-->


        <div
        class="modal fade" id="deleteclientModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ __('client.DeleteOf') }} {{ __('client.Client') }}</h5>

                        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body"
                        dir="{{ session()->get('locale') === 'ar' ? 'rtl' : 'ltr' }}"
                    >
                        <p>{{ __('client.ConfDeleteOf') }} {{ __('client.Client') }}</p>
                        <small class="font-weight-bold" style="color:#edb200;">
                            <i class="fas fa-exclamation-triangle"></i>
                            {{ __('client.ConfDeleteOf') }} {{ __('client.Client') }}
                        </small>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('button.Annuler') }}</button>

                            <form id="deleteclientForm" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Supprimer" class="btn btn-danger">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script>
            function deleteclient(id) {
                $('#deleteclientModal').modal('toggle'); // taffichage modal
                $('#deleteclientForm').attr('action', '/lawyer/clients/delete/' + id); //nhd id fl form #deleteStudentForm
            }
        </script>

</x-dashboard.lawyer.master>
