<x-dashboard.admin.master title="FAQ">

    <!-- Start Content-->
    {{-- {{ print_r($blogs)}} --}}

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <h4 class="mb-4">FAQ</h4>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        @php
        $search_val = isset($search) ? $search : "";
        @endphp

        <div class="row mb-3">
            <div class="search">
                {{-- <form action="{{ route("admin.find.faqs") }}" method="POST">
                    {{ csrf_field() }} --}}
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" id="input_search"
                                value="{{ $search_val ?? "" }}"
                                name="search" class="form-control col-6" placeholder="Search Member" autocomplete="off">
                            </div>
                            <div class="col-sm-6">
                                    <button type="submit" class=" btn btn-primary"
                                    id="btn_search"
                                    >Search</button>
                                    @unless (empty($search_val))
                                        <a  href="{{ route("admin.faqs") }}" class="btn btn-secondary">Annuler</a>
                                    @endunless
                            </div>
                        </div>
                {{-- </form> --}}
            </div>
        </div>

        <div class="row">
            @if (count($faqs) > 0)
                @foreach ($faqs as $faq)
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-4">
                                    @if (!!$faq->user->profile_image)
                                        <img src="{{ asset($faq->user->profile_image) }}" class="card-img"
                                            alt="image">
                                    @else
                                        <img src="{{ asset('images/dashboard/users/profile_default.jpg') }}"
                                            alt="image" class="card-img">
                                    @endif
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $faq->user->first_name . ' ' . $faq->user->last_name }}</h5>
                                        <p class="card-text"><b>Question:</b> {{ Str::limit($faq->question_fr, 50) }}... </p>
                                        <hr>
                                        <p class="card-text"><b>Reponse:</b> {{ Str::limit($faq->answer_fr, 50) }}... </p>
                                        <p class="card-text"><small class="text-muted">Publier le: {{ $faq->created_at }}</small></p>
                                        <div>
                                            <a href="{{ route("admin.faqs.show", $faq->id ) }}" class="btn btn-outline-primary rounded-pill">
                                                <i class="mdi mdi-open-in-new"></i> detail
                                            </a>
                                            @if ($faq->is_published)
                                                <a href="{{ route("admin.faqs.desactive", $faq->id ) }}" class="btn btn-outline-danger rounded-pill">
                                                    <i class="mdi mdi-eye-off-outline"></i> Desactive
                                                </a>
                                            @else
                                                <a href="{{ route("admin.faqs.active", $faq->id ) }}" class="btn btn-outline-success rounded-pill">
                                                    <i class="mdi mdi-eye"></i> Active
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>
                    Aucun FAQ est trouver !!
                </p>
            @endif

        </div>

        <!-- end row -->
        <div class="row">
            {{ $faqs->links() }}
        </div>
        <!-- end row -->
    </div>

    <script>
        document.getElementById("btn_search")
        .addEventListener("click", function() {
            var val_input = document.getElementById("input_search").value;

            window.location.href = '/admin/faqs/' + val_input;
        });
    </script>

</x-dashboard.admin.master>
