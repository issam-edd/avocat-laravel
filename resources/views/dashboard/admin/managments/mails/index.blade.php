<x-dashboard.admin.master title="Home">
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page email-title -->
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                            <li class="breadcrumb-item active">Inbox</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Inbox</h4>
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

                        <div class="col-12">

                            @php
                                $search_val = isset($search) ? $search : "";
                            @endphp

                            <div class="row mb-3">
                                <div class="search">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" id="input_search" value="{{ $search_val ?? '' }}"
                                                    name="search" class="form-control col-6"
                                                    placeholder="Search Member" autocomplete="off">
                                            </div>
                                            <div class="col-sm-6">
                                                <button type="submit" id="btn_search" class=" btn btn-primary">Search</button>
                                                @unless(empty($search_val))
                                                    <a href="{{ route('admin.mails') }}"
                                                        class="btn btn-secondary">Annuler</a>
                                                @endunless
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
                                                        <div class="email-date">{{ $mail->created_at->format('d-m-Y') }}
                                                        </div>
                                                    </div>
                                                    <div class="email-action-icons">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <a onclick="deleteMail({{ $mail->id }})"
                                                                    style="cursor: pointer"><i
                                                                        class="mdi mdi-delete email-action-icons-item"></i></a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="{{ route('admin.mails.show', $mail->id) }}"><i
                                                                        class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <p>
                                            Aucun mail Trouver !!
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
                $('#deleteMailForm').attr('action', '/admin/mails/delete/' + id);
            }
        </script>

        <script>
            document.getElementById("btn_search")
            .addEventListener("click", function() {
                var val_input = document.getElementById("input_search").value;

                window.location.href = '/admin/mails/' + val_input;
            });
        </script>
</x-dashboard.admin.master>
