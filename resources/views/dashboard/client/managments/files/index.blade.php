<x-dashboard.client.master title="{{ __('client.ListFiles') }}">

    <!-- Start Content-->

    @php
        $dir = session()->get('locale') === 'ar' ? 'rtl' : 'ltr';
    @endphp
        <!-- start page title -->
        <div class="row" dir="{{ $dir }}">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{ __('client.ListFiles') }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        {{-- ------------------------------------------ --}}
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title" dir="{{ $dir }}">{{ __('client.ListFiles') }}</h4>


                        {{-- <div class="tab-content  table-responsive"> --}}
                        <div class="tab-content  table-responsive">
                            <div class="tab-pane show active" id="buttons-table-preview">
                                <table id="datatable-buttons" class="table table-centered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>{{ __('client.AvocacyDivision') }}</th>
                                            <th>{{ __('client.FileReference') }}</th>
                                            <th>{{ __('client.Amount') }}</th>
                                            <th>{{ __('client.advance') }}</th>
                                            <th>{{ __('client.Rest') }}</th>
                                            <th>{{ __('client.Parties') }}</th>
                                            <th id="hide">{{ __("model.Actions") }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            $i = 1;
                                            $dir = session()->get('locale') === 'ar' ? 'rtl' : 'ltr';
                                        @endphp
                                        @foreach ($files as $file)
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>

                                            <td>{{ $file->avocacy_division }}</td>
                                            <td>{{ $file->file_reference }}</td>

                                            @php
                                                $advance = 0;
                                                foreach ($file->fileFees as $fees) {
                                                    $advance += $fees->advance;
                                                }
                                            @endphp
                                            <td dir="{{ $dir }}">{{ !!$file->amount ? $file->amount : 0 }} {{ __('client.Dh') }}</td>
                                            <td dir="{{ $dir }}">{{ $advance }} {{ __('client.Dh') }}</td>
                                            @php
                                                $rest = $file->amount - $advance;
                                            @endphp
                                            <td
                                                dir="{{ $dir }}" class="text-{{ $rest >= 0 ? 'primary' : 'danger' }}"
                                            >{{ $rest }} {{ __('client.Dh') }}</td>
                                            <td>{{ $file->parties }}</td>

                                            <td class="table-action" id="hide">
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('client.fees.index',$file->id) }}" class="btn btn-sm btn-danger ms-2 d-flex align-items-center justify-content-center">
                                                        <i class="mdi mdi-eye-outline"></i> <span class="ms-1">{{ __('client.ShowFees') }}</span>
                                                    </a>
                                                    <a href="{{ route('client.expenses.index',$file->id) }}" class="btn btn-sm btn-success ms-2 d-flex align-items-center justify-content-center">
                                                        <i class="mdi mdi-eye-outline"></i> <span class="ms-1">{{ __('client.ShowExpense') }}</span>
                                                    </a>
                                                </div>
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


        <div class="modal fade" id="deletefileModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ __('client.DeleteOf') }} {{ __('client.File') }}</h5>

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

                            <form id="deletefileForm" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="{{ __('button.Delete') }}" class="btn btn-danger">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script>
            function deletefile(id) {
                $('#deletefileModal').modal('toggle'); // taffichage modal
                $('#deletefileForm').attr('action', '/lawyer/files/delete/' + id); //nhd id fl form #deleteStudentForm
            }
        </script>

</x-dashboard.lawyer.master>
