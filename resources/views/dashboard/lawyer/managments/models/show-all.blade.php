<x-dashboard.lawyer.master title="قائمة النماذج">


    <!-- Start Content-->
    <div>

        <!-- start page title -->
        <div class="row" @if (session()->get("locale") === "ar") dir="rtl"  @endif>
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{ __("model.ListModels") }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        {{-- ------------------------------------------ --}}
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h3 class="header-title fs-4 text-center">{{ __("model.ListModels") }}</h3>
                        {{-- <div class="tab-content  table-responsive"> --}}
                        <div class="tab-content  table-responsive">
                            <div class="tab-pane show active" id="buttons-table-preview">
                                <table
                                @if (session()->get("locale") === "ar") dir="rtl"  @endif
                                id="datatable-buttons" class="table table-centered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>{{ __("model.FichierName") }}</th>
                                            <th>{{ __("model.NameArticle") }}</th>
                                            <th style="width: 85px;" id="hide">{{ __("model.Actions") }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        {{-- {{ print_r($modelFiles->models->toArray()) }} --}}
                                        @foreach ($models as $model)
                                            <tr>
                                                <td>
                                                    {{ $model->id }}
                                                </td>
                                                <td>
                                                    {{ $model['name'] }}
                                                </td>
                                                <td>
                                                    {{ $model->modelFile->name }}
                                                </td>

                                                <td class="table-action" id="hide">
                                                    <div class="d-flex justify-content-center">
                                                        <a target="_blank" href="{{ route('download.file', $model['path']) }}" class="btn btn-sm btn-success ms-2 d-flex align-items-center justify-content-center">
                                                            <i class="mdi mdi-cloud-download-outline"></i><span class="ms-1">WORD</span>
                                                            {{-- {{ __("model.DownloadWord") }} --}}
                                                        </a>
                                                        <a  href="{{ route("download.pdf",$model['id']) }}" class="btn ms-2 btn-sm btn-secondary ms-2 d-flex align-items-center justify-content-center">
                                                            <i class="mdi mdi-file-download"></i> <span class="ms-1">PDF</span>
                                                        </a>

                                                        <a href="{{ route('lawyer.models.edit', $model['id']) }}" class="btn btn-sm btn-warning ms-2 d-flex align-items-center justify-content-center">
                                                            <i class="mdi mdi-square-edit-outline"></i> <span class="ms-1">{{ __("button.Edit") }}</span>
                                                        </a>

                                                        <a onclick="deleteModel({{ $model['id'] }})" class="btn btn-sm btn-danger ms-2 d-flex align-items-center justify-content-center">
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


        <div class="modal fade"

        id="deleteModelModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 @if (session()->get("locale") === "ar") dir="rtl"  @endif class="modal-title" id="exampleModalLabel">{{ __("model.DeleteModel") }}</h5>

                        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close" @if (session()->get("locale") === "ar") dir="rtl"  @endif>
                        </button>
                    </div>
                    <div @if (session()->get("locale") === "ar") dir="rtl"  @endif class="modal-body">
                        <p>{{ __("model.textConfirmDelete") }}</p>
                        <small class="font-weight-bold" style="color:#edb200;">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            {{ __("model.textConfirmAction") }}
                        </small>
                        <div class="modal-footer" @if (session()->get("locale") === "ar") dir="rtl"  @endif>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                {{ __("button.Annuler") }}
                            </button>

                            <form id="deleteModelForm" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="{{ __("button.Delete") }}" class="btn btn-danger">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script>
        function deleteModel(id) {
            $('#deleteModelModal').modal('toggle'); // taffichage modal
            $('#deleteModelForm').attr('action', '/lawyer/models/delete/' + id); //nhd id fl form #deleteStudentForm
        }
    </script>

</x-dashboard.lawyer.master>
