<x-dashboard.lawyer.master title="{{ __('navLawyer.ListBlogs') }}">

    <!-- Start Content-->
    {{-- {{ print_r($blogs)}} --}}

    <div class="{{ session()->get('locale') === 'ar' ? 'text-right' : 'text-left' }}"  @if (session()->get("locale") === "ar") dir="rtl"  @else dir="ltr" @endif>
        <div class="row">
            <div class="col-12">
                <h4 class="mb-4">{{ __("navLawyer.ListBlogs") }}</h4>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        @php
            $search_val = isset($search) ? $search : "";
        @endphp

        <div class="row mb-3">
            <div class="search"> <i class="fa fa-search"></i>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text"
                                id="input_search" value="{{ $search_val ?? "" }}"
                                name="search" class="form-control col-6" placeholder="{{ __("pageLawyer.SearchMember") }}" autocomplete="off">
                            </div>
                            <div class="col-sm-6">
                                    <button type="button" id="btn_search" class=" btn btn-primary" >{{ __("button.Search") }}</button>
                                    @if (!empty($search_val))
                                        <a  href="{{route("lawyer.blogs") }}" class="btn btn-secondary">{{ __("button.Annuler") }}</a>
                                    @endif
                            </div>
                        </div>
                </form>
            </div>
        </div>

        <div class="row">
            @if(count($blogs) > 0 )
                @foreach ($blogs as $blog)
                    <div class="col-md-6 col-xxl-3">
                        <div class="card d-block">
                            <img class="card-img-top" src="{{ asset($blog->image_link)}}" height="300" alt="Card image cap">
                            <div class="card-body">
                                <div class="mb-3">
                                    <img src="{{ asset( $blog->user->profile_image) }}"
                                        class="d-inline-block avatar-md rounded-circle" alt="...">
                                    <a href="{{ route('admin.avocats.show', $blog->user->id) }}" class="d-inline-block">
                                        <h4 class="mt-1 ms-2 mb-1 text-muted">{{ $blog->user->first_name }}</h4>
                                    </a>
                                </div>
                                <h5 class="card-title">{{ $blog->title }}</h5>
                                <p class="card-text">{{ Str::limit(strip_tags($blog->body), 50 , '...') }}</p>
                                <p class="card-text"  @if (session()->get("locale") === "ar") dir="rtl"  @endif>
                                    <small class="text-muted">
                                        {{ __("pageLawyer.Poster") }} {{ $blog->created_at }}
                                    </small>
                                </p>
                                <div class="justify-content-end row">
                                    <div class="col-12">
                                        @if ($blog->is_published)
                                            <a href="{{ route('lawyer.blogs.desactive', $blog->id) }}"
                                                class="btn btn-sm  btn-secondary">
                                                {{ __("button.Disabled") }}
                                            </a>
                                        @else
                                            <a href="{{ route('lawyer.blogs.active', $blog->id) }}" class="btn btn-sm btn-success">
                                                {{ __("button.Enable") }}
                                            </a>
                                        @endif
                                        <a href="{{ route("lawyer.blogs.edit", $blog->id) }}" class="btn btn-sm btn-warning">{{ __("button.Edit") }}</a>
                                        <a href="javascript:void(0)" onclick="deleteBlog({{ $blog->id }})" class="btn btn-sm btn-danger">{{ __("button.Delete") }}</a>
                                        <a href="" class="btn btn-sm btn-info">{{ __("button.View") }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="card p-5 pt-3" >

                    <p>
                        {{ __("lawyer.no_blogs") }}
                    </p>
                </div>
            @endif
        </div>
        <div class="modal fade" id="deleteBlogModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Supprimer Blog</h5>

                        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Voulez-vous vraiment supprimer cet blog ?</p>
                        <small class="font-weight-bold" style="color:#edb200;">
                            <i class="fas fa-exclamation-triangle"></i>
                            Cette action ne peut pas être annulée !
                        </small>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>

                            <form id="deleteBlogForm" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Supprimer" class="btn btn-danger">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            {{ $blogs->links() }}
        </div>

    </div>



    <script>
        function deleteBlog(id) {
            $('#deleteBlogModal').modal('toggle'); // taffichage modal
            $('#deleteBlogForm').attr('action', '/lawyer/blogs/delete/' + id); //nhd id fl form #deleteStudentForm
        }

        document.getElementById("btn_search")
        .addEventListener("click", function() {
        var val_input = document.getElementById("input_search").value;

        window.location.href = '/lawyer/blogs/' + val_input;
        });
    </script>
</x-dashboard.lawyer.master>
