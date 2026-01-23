<x-dashboard.admin.master title="Blogs">

    <!-- Start Content-->
    {{-- {{ print_r($blogs)}} --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h4 class="mb-4">Blogs</h4>
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        @php
            $search_val = isset($search) ? $search : "";
        @endphp

        <div class="row mb-3">
            <div class="search">
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
                                <a  href="{{ route("admin.blogs") }}" id="btn_search" class="btn btn-secondary">Annuler</a>
                            @endunless
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @if(count($blogs) > 0 )
                @foreach ($blogs as $blog)
                    <div class="col-md-4 col-xxl-3">
                        <div class="card d-block">
                            <img class="card-img-top" src="{{ asset($blog->image_link) }}" height="250" alt="Card image cap">
                            <div class="card-body">
                                <div class="mb-3">

                                    @if (!!$blog->user->profile_image)
                                        <img src="{{ asset($blog->user->profile_image) }}"
                                        class="d-inline-block avatar-md rounded-circle"
                                            alt="image">
                                    @else
                                        <img src="{{ asset('images/dashboard/users/profile_default.jpg') }}"
                                            alt="image" class="d-inline-block avatar-md rounded-circle">
                                    @endif
                                    <a href="{{ route('admin.avocats.show', $blog->user->id) }}" class="d-inline-block">
                                        <h4 class="mt-1 ms-2 mb-1 text-muted">{{ $blog->user->first_name }}</h4>
                                    </a>
                                </div>
                                <h5 class="card-title">{{ $blog->title }}</h5>
                                <p class="card-text">{!! Str::limit($blog->body, 50, '...') !!}</p>
                                <p class="card-text">
                                    <small class="text-muted">publier le : {{ $blog->created_at }}</small>
                                </p>
                                <div class="justify-content-end row">
                                    <div class="col-12">
                                        @if ($blog->is_approved)
                                            <a href="{{ route('admin.blogs.desactive', $blog->id) }}"
                                                class="btn btn-danger">
                                                Desactive
                                            </a>
                                        @else
                                            <a href="{{ route('admin.blogs.active', $blog->id) }}" class="btn btn-success">
                                                Active
                                            </a>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>
                    Aucun blog trouver !!
                </p>
            @endif
        </div>

        <!-- end row -->
        <div class="row">
            {{ $blogs->links() }}
        </div>

    </div>
    <!-- container -->

    <script>
        document.getElementById("btn_search")
        .addEventListener("click", function() {
            var val_input = document.getElementById("input_search").value;

            window.location.href = '/admin/blogs/' + val_input;
        });
    </script>

</x-dashboard.admin.master>
