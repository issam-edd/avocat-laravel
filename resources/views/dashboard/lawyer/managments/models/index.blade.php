<x-dashboard.lawyer.master title="النماذج">


    <!-- Start Content-->
    <div @if (session()->get("locale") === "ar") dir="rtl"  @endif>

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box text-right">
                    <h4 class="page-title"> {{ __("model.CreateModel") }} </h4>
                </div>
            </div>
        </div>
        <div class="card p-3 pb-1 px-2 category-card">
            <div class="container">
                <div class="row justify-content-end">

                    @foreach ($categories as $category )
                        @php
                            $a=array("success","danger","primary","secondary","info");
                            $random_keys=array_rand($a);
                            $bg = $a[$random_keys]
                        @endphp
                        <div class="col-sm-6 col-lg-4 shadow-none m-0">
                            <a href="{{ route("lawyer.models.fiels.show", $category->id) }}" style="text-decoration: none">
                            <div class="card bg-{{ $bg }} text-white">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                    <h4>{{ $category->name }}</h4>
                                    <span class="font-weight-bold fs-4">
                                        عدد ملفات النموذج
                                        {{
                                            // $category->modelFiles->where('model_category_id', $category->id)->first()->models->count()
                                            $category->modelFiles->where('model_category_id', $category->id)->where("lawyer_id",NULL)->count()
                                        }}
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
