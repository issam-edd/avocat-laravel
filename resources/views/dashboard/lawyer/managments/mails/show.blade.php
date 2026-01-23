<x-dashboard.lawyer.master title="Home">
    <!-- Start Content-->
    <div>

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
                            <div class="mt-3">
                                <h5 class="font-15">Message De : <span class="text-muted">{{ $mail->last_name . " " .$mail->first_name }}</span>
                                    <span class="text-muted">&le;{{ $mail->email }}&ge;</span>
                                </h5>

                                <hr/>

                                <div class="d-flex mb-3 mt-1">
                                    {{-- <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="placeholder image" height="32"> --}}
                                    <div class="w-100 overflow-hidden">
                                        <small class="float-end">{{ $mail->created_at }}</small>
                                        <h6 class="m-0 font-14">{{ $mail->last_name . " " .$mail->first_name }}</h6>
                                        <small class="text-muted">A : {{ $mail->user->email }}</small>
                                    </div>
                                </div>
                                <div class="m-2">
                                    <p class="font-15">
                                        <span class="text-muted"> Nom Complet :</span> {{ $mail->last_name . " " .$mail->first_name }}
                                    </p>
                                    <p class="font-15">
                                        <span class="text-muted"> Numero Tel :</span> {{ $mail->phone_number }}
                                    </p>
                                    <p class="font-15">
                                        <span class="text-muted"> Message :</span> {{ $mail->body }}
                                    </p>
                                </div>

                                <hr/>
                                <!-- end row-->

                                <div class="mt-5" id="hide">
                                    <a href="{{ route("lawyer.reponse.mail.show",$mail->id) }}"
                                        class="btn btn-outline-info rounded-pill">
                                        <i class="mdi mdi-reply-all-outline"></i> Répondre
                                    </a>
                                    <a onclick="window.print()" class="btn btn-outline-primary rounded-pill">
                                        <i class="mdi mdi-printer-outline  me-1"></i> Imprimer
                                    </a>
                                    <a class="btn btn-outline-danger rounded-pill" onclick="deleteMail({{ $mail->id }})" style="cursor: pointer"><i
                                        class="mdi mdi-delete email-action-icons-item ms-1"></i> Supprimer</a>

                                </div>
                                <!-- end .mt-4 -->

                            </div>
                            <!-- end .mt-4 -->
                            <!-- end row-->
                        </div>
                        <!-- end inbox-rightbar-->
                    </div>
                    <div class="modal fade" id="deleteMailModal" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    </script>
</x-dashboard.lawyer.master>
