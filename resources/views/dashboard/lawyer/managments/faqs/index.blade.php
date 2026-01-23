<x-dashboard.lawyer.master title="{{ __('lawyer.faqs') }}">

    <div class=" {{ session()->get('locale') === 'ar' ? 'text-right' : 'text-left' }}" dir="{{ session()->get('locale') === 'ar' ? 'rtl' : 'ltr' }}">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{ __('lawyer.faqs') }}</h4>
                </div>
            </div>
        </div>
        @php
            $search_val = isset($search) ? $search : "";
        @endphp

        <div class="row mb-3">
            <div class="search"> <i class="fa fa-search"></i>

                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" id="input_search"
                                    value="{{ $search_val ?? "" }}"
                                    name="search" class="form-control col-6"
                                    placeholder="{{ __('lawyer.faqs_search') }}"
                                    autocomplete="off">
                            </div>
                            <div class="col-sm-6">
                                    <button type="submit" id="btn_search" class=" btn btn-primary">{{ __('lawyer.search') }}</button>
                                    @if (!empty($search_val))
                                        <a  href="{{ route("lawyer.faqs") }}" class="btn btn-secondary">{{ __("button.Annuler") }}</a>
                                    @endif
                            </div>
                        </div>
                </form>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if (count($faqs) > 0)
                    <div class="accordion custom-accordion" id="custom-accordion-one">
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($faqs as $faq)
                            @php
                                $i++;
                            @endphp
                            <div class="card mb-0">

                                <div class="card-header" id="heading{{ $i }}">
                                    <h5 class="m-0">
                                        <a class="custom-accordion-title d-block py-1" data-bs-toggle="collapse"
                                            href="#collapse{{ $i }}" aria-expanded="false"
                                            aria-controls="collapse{{ $i }}">
                                            <p>
                                                <div class="row">
                                                    <p>Question : {{ $faq->question_fr }}</p>
                                                    <p dir="rtl">  السؤال :{{ $faq->question_ar }}</p>
                                                    <div class="text-start">
                                                        @if ($faq->is_published)
                                                            <span class="badge bg-success">Active</span>
                                                        @else
                                                            <span class="badge bg-danger">Inactive</span>
                                                        @endif
                                                    </div>
                                                </div>

                                            </p> <i class="mdi mdi-chevron-down accordion-arrow"></i>
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapse{{ $i }}" class="collapse hide" aria-labelledby="heading{{ $i }}"
                                    data-bs-parent="#custom-accordion-one">
                                    <div class="card-body">
                                        <p>
                                            <p>Réponse : {{ $faq->answer_fr }}</p>
                                            <p dir="rtl">  الجواب :{{ $faq->answer_ar }}</p>
                                        </p>
                                        <a href="{{ route("lawyer.faqs.edit",$faq->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="javascript:void(0)" onclick="deleteFaq({{ $faq->id }})" class="btn btn-sm btn-danger">Supprimer</a>
                                        <a href="" class="btn btn-sm btn-info">View</a>
                                        @if ($faq->is_published)
                                            <a href="{{ route("lawyer.faqs.desactive", $faq->id) }}" class="btn btn-sm  btn-secondary">Desactive</a>
                                        @else
                                            <a href="{{ route("lawyer.faqs.active", $faq->id) }}" class="btn btn-sm btn-success">Active</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @else
                <div class="p-3" >
                    <p>
                        {{ __("lawyer.no_faqs") }}
                    </p>
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            {{ $faqs->links() }}
        </div>
    </div>
    <div class="modal fade" id="deleteFaqModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('lawyer.faq_delete')}}</h5>

                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{ __('lawyer.faq_verify') }}</p>
                    <small class="font-weight-bold" style="color:#edb200;">
                        <i class="fas fa-exclamation-triangle"></i>
                        Cette action ne peut pas être annulée !
                    </small>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('lawyer.annuler') }}</button>

                        <form id="deleteFaqForm" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="{{ __('lawyer.delete') }}" class="btn btn-danger">
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
<!-- end row -->


</div>



<script>
function deleteFaq(id) {
    $('#deleteFaqModal').modal('toggle'); // taffichage modal
    $('#deleteFaqForm').attr('action', '/lawyer/faqs/delete/' + id); //nhd id fl form #deleteStudentForm
}

document.getElementById("btn_search")
.addEventListener("click", function() {
    var val_input = document.getElementById("input_search").value;

    window.location.href = '/lawyer/faqs/' + val_input;
});
</script>
</x-dashboard.lawyer.master>
