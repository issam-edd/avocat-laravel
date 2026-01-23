{{-- {{ print_r($file) }} --}}


<x-dashboard.lawyer.master title="{{ __('client.expense') }}">

    <!-- Start Content-->
    @php
    $dir = session()->get('locale') === 'ar' ? 'rtl' : 'ltr';
@endphp

        <!-- start page title -->
        <div class="row" dir="{{ $dir }}">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{ __('client.ExpenseClient') }} : {{ $file->client->client_name }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        {{-- ------------------------------------------ --}}
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title" dir="{{ $dir }}">{{ __('client.ExpenseClient') }} : {{ $file->client->client_name }}</h4>


                        {{-- <div class="tab-content  table-responsive"> --}}
                        <div class="tab-content  table-responsive">
                            <div class="tab-pane show active" id="buttons-table-preview">
                                <table id="datatable-buttons" class="table table-centered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>{{ __('client.description') }}</th>
                                            <th>{{ __('client.typePayment') }}</th>
                                            <th>{{ __('client.expense') }}</th>
                                            <th>{{ __('client.priceGiven') }}</th>
                                            {{-- <th>rest</th> --}}
                                            <th id="hide">{{ __("model.Actions") }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($file->expensesFiles as $expense)
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>

                                            <td>{{ Str::limit($expense->description, 50, '...') }}</td>
                                            <td>{{ $expense->type }}</td>
                                            <td>{{ $expense->expense }}</td>
                                            <td>{{ $expense->amount }} Dh</td>

                                            <td class="table-action" id="hide">
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route("lawyer.expense.info.show",$expense->id) }}" class="btn btn-sm btn-info ms-2 d-flex align-items-center justify-content-center">
                                                        <i class="mdi mdi-eye-outline"></i> <span class="ms-1">{{ __('client.Show') }}</span>
                                                    </a>
                                                    <a href="{{ route("lawyer.expense.edit",$expense->id) }}" class="btn btn-sm btn-warning ms-2 d-flex align-items-center justify-content-center">
                                                        <i class="mdi mdi-square-edit-outline"></i> <span class="ms-1">{{ __("button.Edit") }}</span>
                                                    </a>
                                                    <a onclick="deleteExpense({{ $expense->id }})" class="btn btn-sm btn-danger ms-2 d-flex align-items-center justify-content-center">
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


        <div class="modal fade" id="deleteExpenseModal" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{ __('client.DeleteOf') }} {{ __('client.File') }}</h5>

                                    <button type="button" class="btn btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body"
                                    dir="{{ session()->get('locale') === 'ar' ? 'rtl' : 'ltr' }}"
                                >
                                    <p>{{ __('client.ConfDeleteOf') }} {{ __('client.expense') }}</p>
                                    <small class="font-weight-bold" style="color:#edb200;">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        {{ __('client.ConfDeleteOf') }} {{ __('client.expense') }}
                                    </small>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">{{ __('button.Annuler') }}</button>

                                        <form id="deleteExpenseForm" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="{{ __('button.Delete') }}" class="btn btn-danger">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end card-body -->
                    <div class="clearfix"></div>
                </div> <!-- end card-box -->

            </div> <!-- end Col -->
        </div><!-- End row -->

    <script>
        function deleteExpense(id) {
            $('#deleteExpenseModal').modal('toggle');
            $('#deleteExpenseForm').attr('action', '/lawyer/expenses/delete/' + id);
        }
    </script>

</x-dashboard.lawyer.master>
