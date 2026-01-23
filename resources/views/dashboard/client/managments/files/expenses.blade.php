{{-- {{ print_r($file) }} --}}


<x-dashboard.client.master title="{{ __('client.expense') }}">

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

                    <h4 class="header-title" dir="{{ $dir }}">{{ __('client.ExpenseClient') }} : </h4>


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
                                        <th id="hide">{{ __('model.Actions') }}</th>
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
                                                    {{-- {{ route("lawyer.expense.info.show",$expense->id) }} --}}
                                                    <a href="{{ route('client.expense.show',["id_file" => $file->id,"id_expense" => $expense->id]) }}"
                                                        class="btn btn-sm btn-info ms-2 d-flex align-items-center justify-content-center">
                                                        <i class="mdi mdi-eye-outline"></i> <span
                                                            class="ms-1">{{ __('client.Show') }}</span>
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

    <!-- end card-body -->
    <div class="clearfix"></div>
    </div> <!-- end card-box -->

    </div> <!-- end Col -->
    </div><!-- End row -->


</x-dashboard.client.master>
