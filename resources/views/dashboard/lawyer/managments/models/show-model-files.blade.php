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
                        <div class="col-sm-6 col-lg-4 shadow-none m-0">
                            <a href="{{ route("lawyer.models.create", $modelFile->id) }}" style="text-decoration: none">
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

    </div>


</x-dashboard.lawyer.master>
