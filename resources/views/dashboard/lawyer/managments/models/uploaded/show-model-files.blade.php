<x-dashboard.lawyer.master title="{{ __('model.AllModels') }}">


    <!-- Start Content-->
    <div >

        <!-- start page title -->
        <div class="row" >
            <div class="col-12" >
                <div class="page-title-box" >
                    <h4 class="page-title text-right font-weight-normal">
                        {{ __("model.AllModels") }} : {{ $modelFiles->first()->modelCategorie->name }}
                    </h4>
                </div>
            </div>
        </div>
        {{-- {{ print_r($modelFiles) }} --}}
        <div class="card category-card px-2 p-3 pb-1">
            <div class="container">
                <div class="row justify-content-end">

                    @foreach ($modelFiles as $modelFile )
                        @php
                            $a=array("success","danger","primary","secondary","info");
                            $random_keys=array_rand($a);
                            $bg = $a[$random_keys]
                        @endphp
                        <div class="col-sm-6 col-lg-4 shadow-none m-0  tw-relative">
                            <button onclick="deleteModel({{ $modelFiles->first()->modelCategorie->id}},{{$modelFile->id }} )" type="submit" style="z-index: 1;cursor: pointer;" class="tw-bg-white tw-p-1 tw-rounded-bl-lg tw-border-none tw-absolute tw-right-3 tw-top-0 ">
                                <img src="{{ asset('images/icons/delete-model.svg') }}" class="tw-w-[28px] tw-rounded-lg tw-pointer-events-none" />
                            </button>
                            <a href="{{ route("lawyer.models.create.uploaded", $modelFile->id) }}" style="text-decoration: none">
                            <div class="card bg-{{ $bg }} text-white">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                    <h4 class="font-weight-normal">{{ $modelFile->name }}</h4>
                                    <span class="font-weight-bold">
                                    </span>
                                </div>
                            </div>
                            </a>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
        <div class="modal fade" id="deleteModelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        function deleteModel(category,modelFile) {
            $('#deleteModelModal').modal('toggle'); // taffichage modal
            $('#deleteModelForm').attr('action', '/lawyer/models/delete/' + category + '/' + modelFile + '/model'); //nhd id fl form #deleteStudentForm
        }
        // "/models/delete/{category}/{modelFile}/model
    </script>


</x-dashboard.lawyer.master>
