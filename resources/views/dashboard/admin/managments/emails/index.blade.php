<x-dashboard.admin.master title="Avocats">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Avocats</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        {{-- ------------------------------------------ --}}
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title">List avocat premium </h4>


                        {{-- <div class="tab-content  table-responsive"> --}}
                        <div class="tab-content  table-responsive">
                            <div class="tab-pane show active" id="buttons-table-preview">
                                <table id="datatable-buttons" class="table table-centered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Profile</th>
                                            <th>nom</th>
                                            <th>prenom</th>
                                            <th>email</th>
                                            <th style="width: 85px;">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($avocats as $avocat)

                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>
                                            <td>
                                                @if (!!$avocat->profile_image)
                                                    <img src="{{ asset( $avocat->profile_image) }}"
                                                        alt="image" class="avatar-md rounded-circle">
                                                @else
                                                    <img src="{{ asset('images/dashboard/users/profile_default.jpg') }}"
                                                        alt="image" class="avatar-md rounded-circle">
                                                @endif
                                            </td>
                                            <td>{{ $avocat->last_name }}</td>
                                            <td>{{ $avocat->first_name }}</td>
                                            <td>{{ $avocat->email }}</td>
                                            <td>
                                                @if($avocat->lawyerDetail->is_premium)
                                                <span class="badge bg-success">Active</span>
                                                @else
                                                <span class="badge bg-danger">Desactive</span>
                                                @endif
                                            </td>
                                            <td class="table-action">
                                                <a href="{{ route("admin.avocats.show", $avocat->id) }}" class="action-icon"> <i
                                                        class="mdi mdi-eye"></i></a>
                                                <a href="{{ route("admin.avocats.edit", $avocat->id) }}"
                                                class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" onclick="deleteAvocat({{ $avocat->id }})" class="action-icon"> <i
                                                        class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- end preview-->

                        </div> <!-- end tab-content-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div> <!-- end row-->


        <div class="modal fade" id="deleteAvocatModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Supprimer Avocat</h5>

                        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Voulez-vous vraiment supprimer cet avocat ?</p>
                        <small class="font-weight-bold" style="color:#edb200;">
                            <i class="fas fa-exclamation-triangle"></i>
                            Cette action ne peut pas être annulée !
                        </small>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>

                            <form id="deleteAvocatForm" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Supprimer" class="btn btn-danger">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</div>


</x-dashboard.admin.master>
