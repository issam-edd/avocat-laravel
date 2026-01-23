<x-dashboard.lawyer.master title="{{ __('client.expenseList') }}">

    <!-- Start Content-->
    @php
    $dir = session()->get('locale') === 'ar' ? 'rtl' : 'ltr';
@endphp

        <!-- start page title -->
        <div class="row" dir="{{ $dir }}">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{ __('client.expenseList') }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title" dir="{{ $dir }}">{{ __('client.expenseList') }}</h4>

                        <div class="tab-content  table-responsive">
                            <div class="tab-pane show active" id="buttons-table-preview">
                                <table id="datatable-buttons" class="table table-centered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>{{ __('client.ClientName') }}</th>
                                            <th>{{ __('client.AvocacyDivision') }}</th>
                                            <th>{{ __('client.TotalExpense') }}</th>
                                            <th>{{ __('client.priceGiven') }}</th>
                                            <th>{{ __('client.Rest') }}</th>
                                            <th id="hide">{{ __("model.Actions") }}</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $dir = session()->get('locale') === 'ar' ? 'rtl' : 'ltr';
                                    @endphp

                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($files as $file)
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>

                                            <td>{{ $file->client->client_name }}</td>
                                            <td dir="{{ $dir }}">{{ $file->avocacy_division }}</td>

                                            {{-- <td>{{ !!$file->amount ? $file->amount : 0 }} {{ __('client.Dh') }}</td> --}}
                                            @php
                                                $total_expense = 0;
                                                foreach ($file->expensesFiles as $expense) {
                                                    $total_expense += $expense->expense;
                                                }
                                            @endphp

                                            <td
                                            dir="{{ $dir }}"
                                            >{{ $total_expense }} {{ __('client.Dh') }}</td>

                                            @php
                                            $total_price_client = 0;
                                            foreach ($file->expensesFiles as $expense) {
                                                $total_price_client += $expense->amount;
                                            }
                                            $total = $total_price_client + $file->paid;
                                            @endphp
                                            <td>{{ $total }} {{ __('client.Dh') }}</td>


                                            @php
                                                $rest = $total_expense - $total;
                                            @endphp
                                            <td
                                            dir="{{ $dir }}" class="text-{{ $rest >= 0 ? 'primary' : 'danger' }}"
                                            >{{ $rest }} {{ __('client.Dh') }}</td>

                                            <td class="table-action" id="hide">
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route("lawyer.expenses.increment.create",$expense->id) }}" class="btn btn-sm btn-primary ms-2 d-flex align-items-center justify-content-center">
                                                        <i class="mdi mdi-pencil-plus"></i> <span class="ms-1">Add Prix Donner</span>
                                                    </a>

                                                    @if ($file->expensesFiles->count() > 0)
                                                    <a href="{{ route("lawyer.expenses.all",$file->id) }}" class="btn btn-sm btn-info ms-2 d-flex align-items-center justify-content-center">
                                                        <i class="mdi mdi-eye-outline"></i> <span class="ms-1">{{ __('client.ShowExpense') }}</span>
                                                    </a>
                                                    @endif
                                                    <a href="{{ route("lawyer.expenses.create",$file->id) }}" class="btn btn-sm btn-primary ms-2 d-flex align-items-center justify-content-center">
                                                        <i class="mdi mdi-pencil-plus"></i> <span class="ms-1">{{ __('client.AddExpense') }}</span>
                                                    </a>
                                                    {{-- <a href="{{ route("lawyer.files.edit", $file->id) }}" class="btn btn-sm btn-warning ms-2 d-flex align-items-center justify-content-center">
                                                        <i class="mdi mdi-square-edit-outline"></i> <span class="ms-1">{{ __("button.Edit") }}</span>
                                                    </a> --}}

                                                    <a onclick="deletefile({{ $file->id }})" class="btn btn-sm btn-danger ms-2 d-flex align-items-center justify-content-center">
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
