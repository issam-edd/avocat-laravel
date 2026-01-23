<x-dashboard.lawyer.master title="{{ __('lawyer.inbox') }}">
    <!-- Start Content-->
    <div class=" {{ session()->get('locale') === 'ar' ? 'text-right' : 'text-left' }}" dir="{{ session()->get('locale') === 'ar' ? 'rtl' : 'ltr' }}">

        <!-- start page email-title -->
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{ __('lawyer.inbox') }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <!-- end page email-title -->

        <div class="row">

            <!-- Right Sidebar -->
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Left sidebar -->

                        <!-- End Left sidebar -->
                        @php
                            $search_val = isset($search) ? $search : "";
                        @endphp

                        <div class="col-12">

                            <div class="row mb-3">
                                <div class="search"> <i class="fa fa-search"></i>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" id="input_search" value="{{ $search_val ?? '' }}"
                                                    name="search" class="form-control col-6"
                                                    placeholder="{{ __('lawyer.search') }}" autocomplete="off">
                                            </div>
                                            <div class="col-sm-6">
                                                <button type="submit" id="btn_search" class="btn btn-primary">{{ __('lawyer.search') }}</button>
                                                @if(!empty($search_val))
                                                    <a href="{{ route('lawyer.mails') }}"
                                                        class="btn btn-secondary" id="btn_close">{{ __("button.Annuler") }}</a>
                                                @endif
                                            </div>
                                        </div>
                                </div>

                                <div class="mt-3">
                                    @if (count($mails) > 0)
                                        <ul class="email-list"> {{-- change => email-sender-info --}}
                                            @foreach ($mails as $mail)
                                                <li class="{{ !$mail->is_read ? 'unread' : '' }}"> {{-- unread  --}}
                                                    <div class="email-sender-info">
                                                        <div class="checkbox-wrapper-mail">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="mail5">
                                                                <label class="form-check-label" for="mail5"></label>
                                                            </div>
                                                        </div>
                                                        <span
                                                            class="star-toggle mdi mdi-star-outline {{ !$mail->is_read ? 'text-warning' : '' }}"></span>
                                                        {{-- class => text-warning --}}
                                                        <a href="javascript: void(0);"
                                                            class="email-title">{{ Str::limit($mail->user->first_name . ' ' . $mail->user->last_name, 10, '...') }}</a>
                                                    </div>
                                                    <div class="email-content">
                                                        <p class="email-subject">
                                                            {{ Str::limit($mail->body, 20, '...') }}
                                                        </p>
                                                        <div class="email-date">
                                                            {{ !!$mail->created_at ? $mail->created_at->format('d-m-Y') : ''  }}
                                                        </div>
                                                    </div>
                                                    <div class="email-action-icons">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <a onclick="deleteMail({{ $mail->mail_id }})"
                                                                    style="cursor: pointer"><i
                                                                        class="mdi mdi-delete email-action-icons-item"></i></a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="{{ route('lawyer.mails.show', $mail->mail_id) }}"><i
                                                                        class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <p>
                                            {{ __('lawyer.no_mails') }}
                                        </p>
                                    @endif
                                </div>
                                <!-- end .mt-4 -->

                                <div class="row">
                                    <div class="col-7 mt-1">
                                    </div>
                                    <div class="col-5">
                                        {{ $mails->links() }}
                                    </div>
                                </div>
                                <!-- end row-->
                            </div>
                            <!-- end inbox-rightbar-->
                        </div>
                        <div class="modal fade" id="deleteMailModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Supprimer Mail</h5>

                                        <button type="button" class="btn btn-close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Voulez-vous vraiment supprimer cet mail ?</p>
                                        <small class="font-weight-bold" style="color:#edb200;">
                                            <i class="fas fa-exclamation-triangle"></i>
                                            Cette action ne peut pas être annulée !
                                        </small>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Annuler</button>

                                            <form id="deleteMailForm" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Supprimer" class="btn btn-danger">
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
        </div> <!-- container -->

        <script>
            function deleteMail(id) {
                $('#deleteMailModal').modal('toggle');
                $('#deleteMailForm').attr('action', '/lawyer/mails/delete/' + id);
            }

            document.getElementById("btn_search")
                .addEventListener("click", function(e) {
                    e.preventDefault();
                    var val_input = document.getElementById("input_search").value;

                    window.location.href = '/lawyer/mails/' + val_input;
            });
        </script>
</x-dashboard.lawyer.master>
