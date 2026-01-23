{{-- {{ print_r($file) }} --}}


<x-dashboard.lawyer.master title="{{ __('client.InfosClient') }}">

    <!-- Start Content-->
    @php
        $dir = session()->get('locale') === 'ar' ? 'rtl' : 'ltr';
    @endphp

        <!-- start page title -->
        <div class="row" dir="{{ $dir }}">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{ __('client.InfosClient') }} : {{ $file->client->client_name }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        {{-- ------------------------------------------ --}}
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h4 dir="{{ $dir }}" class="header-title">{{ __('client.InfosClient') }} : {{ $file->client->client_name }} {{ __('client.File') }} : {{ $file->avocacy_division }}</h4>


                        {{-- <div class="tab-content  table-responsive"> --}}
                        <div class="tab-content  table-responsive">
                            <div class="tab-pane show active" id="buttons-table-preview">
                                <table id="datatable-buttons" class="table table-centered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name File</th>
                                            <th>{{ __('client.typeFile') }}</th>
                                            <th>{{ __('client.dateCreation') }}</th>
                                            {{-- <th>Télécharger</th> --}}
                                            <th id="hide">{{ __("model.Actions") }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($file->fileInfo as $info)
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            @php
                                                $f = $file->id;

                                                $fileName = $info->path_file;
                                                $fileNameParts = explode('.', $fileName);
                                                $ext = end($fileNameParts);
                                            @endphp
                                            <td>
                                                {{ $info->name_file }}
                                            </td>
                                            <td>
                                                {{ __('client.FileType') }} {{ $ext }}
                                            </td>
                                            <td>
                                                {{ $info->created_at->format('Y-m-d') }}
                                            </td>

                                            <td class="table-action" id="hide">
                                                <div class="d-flex justify-content-center">
                                                    <button type="button" onclick="downloadFile('{{ $info->id }}', '{{ $f }}')" class="btn btn-success ms-2 d-flex align-items-center justify-content-center">
                                                        <i class="mdi mdi-cloud-download-outline"></i><span class="ms-1">{{ __('client.download') }}</span>
                                                    </button>

                                                    <a onclick="deleteInfo({{ $info->id }})" class="btn btn-sm btn-danger ms-2 d-flex align-items-center justify-content-center">
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


        <div class="modal fade" id="deleteInfoModal" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{ __('client.DeleteOf') }} {{ __('client.FileInfos') }}</h5>

                                    <button type="button" class="btn btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body"
                                    dir="{{ session()->get('locale') === 'ar' ? 'rtl' : 'ltr' }}"
                                >
                                    <p>{{ __('client.ConfDeleteOf') }} {{ __('client.FileInfos') }}</p>
                                    <small class="font-weight-bold" style="color:#edb200;">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        {{ __('client.ConfDeleteOf') }} {{ __('client.FileInfos') }}
                                    </small>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">{{ __('button.Annuler') }}</button>

                                        <form id="deleteInfoForm" method="POST">
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
        function deleteInfo(id) {
            $('#deleteInfoModal').modal('toggle');
            $('#deleteInfoForm').attr('action', '/lawyer/infos/delete/' + id);
        }

        function downloadFile(path, file) {
            // alert(path );
            window.location.href = '/lawyer/infos/download/' + path + '/' + file;
        }
    </script>

</x-dashboard.lawyer.master>
