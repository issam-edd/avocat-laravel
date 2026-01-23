<x-dashboard.lawyer.master title="{{ __('client.Calendar') }}">

    <div class=" my-2">
        <div class="row">
            <div class="col-md-10 mx-auto my-4">
                <div class="col-md-3 my-2">
                    <a href="{{ route('events.create') }}" class="btn btn-primary">{{ __('client.Add') }}</a>
                </div>
                <div id='calendar'></div>
            </div>
        </div>
    </div>


    <style>
        @media screen and (max-width:600px) {
            .popup1 {
                min-width: 95%;
            }
        }
        .fc-scroller {
            overflow: visible !important;
        }
        .display-flex{
            
        }
    </style>
    <!-- Modal Create Or Update -->
    <div class="popup1"
        style="display:none;width:70%; position: fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);z-index: 10000;"
        dir="{{ session()->get('locale') === 'ar' ? 'rtl' : 'ltr' }}"
        >
        <div class="tab-content">
            <!-- Billing Content-->
            <div class="tab-pane show active" id="billing-information">
                <div class="card">
                    <div class="card-header my-2 mx-1 bg-dark text-white">
                        <h5 class="card-title p-0 m-0">{{ __('client.addEvent') }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="row px-3">
                            <div class="col-md-6 col-3 col-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">{{ __('client.title') }}<span class="text-danger">*</span></label>
                                    <input class="form-control @error('title') is-invalid @enderror"
                                        type="text"
                                        name="title" value="{{ old("title") }}" placeholder="{{ __('client.title') }}"
                                        id="title" />
                                </div>
                            </div>
                            <div class="col-md-6 col-3 col-6">
                                <div class="mb-3">
                                    <label for="color" class="form-label">{{ __('client.selectColor') }}<span class="text-danger">*</span></label>
                                    <select class="form-control"
                                        name="color"
                                        id="color" >
                                        <option value="" selected disabled>{{ __('client.selectColor') }}</option>
                                        <option value="#FC2947">{{ __('client.Red') }}</option>
                                        <option value="#FFF323">{{ __('client.Yellow') }}</option>
                                        <option value="#0E7CF4">{{ __('client.Blue') }}</option>
                                        <option value="#79D70F">{{ __('client.Green') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-3 col-6">
                                <div class="mb-3">
                                    <label for="avocacy_division" class="form-label">{{ __('client.selectAvocacyDivision') }}<span class="text-danger">*</span></label>
                                    <select class="form-control"
                                        name="avocacy_division"
                                        id="avocacy_division" >
                                        <option value="" selected disabled>{{ __('client.selectAvocacyDivision') }}</option>
                                        @foreach ($avocacy as $a )
                                            <option value="{{ $a->title }}">{{ $a->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-3 col-6">
                                <div class="mb-3">
                                    <label for="file_reference" class="form-label">{{ __('client.FileReference') }}<span class="text-danger">*</span></label>
                                    <input class="form-control @error('file_reference') is-invalid @enderror"
                                        type="text"
                                        name="file_reference" value="{{ old("file_reference") }}" placeholder="{{ __('client.FileReference') }}"
                                        id="file_reference" />
                                </div>
                            </div>

                            <div class="col-md-6 col-3 col-6">
                                <div class="mb-3">
                                    <label for="client_name" class="form-label">{{ __('client.ClientName') }}<span class="text-danger">*</span></label>
                                    <input class="form-control @error('client_name') is-invalid @enderror"
                                        type="text"
                                        name="client_name" value="{{ old("client_name") }}" placeholder="{{ __('client.ClientName') }}"
                                        id="client_name" />
                                </div>
                            </div>
                            <div class="col-md-6 col-3 col-6">
                                <div class="mb-3">
                                    <label for="phone_number" class="form-label">{{ __('client.PhoneNumber') }}<span class="text-danger">*</span></label>
                                    <input class="form-control @error('phone_number') is-invalid @enderror"
                                        type="text"
                                        name="phone_number" value="{{ old("phone_number") }}" placeholder="{{ __('client.PhoneNumber') }}"
                                        id="phone_number" />
                                </div>
                            </div>

                            <div class="col-md-6 col-6 col-6">
                                <div class="mb-3">
                                    <label for="procedure_description" class="form-label">{{ __('client.description') }}<span class="text-danger">*</span></label>
                                    <textarea
                                        rows="3"
                                        class="form-control @error('procedure_description') is-invalid @enderror"
                                        type="text" name="procedure_description" placeholder="{{ __('client.description') }}"
                                        id="procedure_description" ></textarea>
                                </div>
                            </div>
                            <div class="col-md-6 col-6 col-6">
                                <div class="mb-3">
                                    <label for="procedure_result" class="form-label">{{ __('client.result') }}<span class="text-danger">*</span></label>
                                    <textarea
                                        rows="3"
                                        class="form-control @error('procedure_result') is-invalid @enderror"
                                        type="text"
                                        name="procedure_result" placeholder="{{ __('client.result') }}"
                                        id="procedure_result" ></textarea>
                                </div>
                            </div>

                        </div> <!-- end row -->

                        <div class="row py-2">
                            <div class="col-sm-6">
                            </div> <!-- end col -->
                            <div class="col-sm-6">
                                <div class="text-sm-end d-flex justify-content-end">
                                    <a href="#" onclick="return false"
                                    class="exit btn btn-secondary me-2">
                                        {{ __('button.Annuler') }}</a>
                                    <a id="submitForm" onclick="return false"
                                        class="submitFrom mx-2 btn btn-success">
                                        <i class="mdi mdi-content-save-outline me-1"></i>
                                        {{ __('lawyer.create') }}
                                    </a>
                                </div>

                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div>
                </div>
            </div>
            <!-- End Billing Information Content-->
        </div>
    </div>


    <div class="popup-detail"
        style="display:none;width:95%; position: fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);z-index: 10000;"
        dir="{{ session()->get('locale') === 'ar' ? 'rtl' : 'ltr' }}"
        >
        <div class="row">
            <div class="col-md-8 mx-auto my-4">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group" dir="{{ session()->get('locale') === 'ar' ? "rtl" : "ltr"}}">
                            <li class="list-group-item" id="title">
                                <span  class="fs-4  fw-bold">{{ __('client.title') }} : <span class="ms-2 text-muted" id="title_val"> </span></span>
                            </li>

                            <li  class="list-group-item" id="avocacy_division">
                                <span class="fs-4  fw-bold">{{ __('client.AvocacyDivision') }} : <span class="ms-2 text-muted" id="avocacy_division_val"></span></span>
                            </li>
                            <li class="list-group-item" id="file_reference">
                                <span class="fs-4  fw-bold">{{ __('client.FileReference') }} : <span class="ms-2 text-muted" id="file_reference_val"></span></span>
                            </li>
                            <li class="list-group-item" id="client_name" >
                                <span class="fs-4  fw-bold">{{ __('client.ClientName') }} : <span class="ms-2 text-muted" id="client_name_val"></span></span>
                            </li>
                            <li class="list-group-item" id="phone_number" >
                                <span class="fs-4  fw-bold">{{ __('client.PhoneNumber') }} : <span class="ms-2 text-muted" id="phone_number_val"></span></span>
                            </li>

                            <li class="list-group-item" id="procedure_description">
                                <span class="fs-4  fw-bold">{{ __('client.description') }} : <span class="ms-2 text-muted" id="procedure_description_val"></span></span>
                            </li>

                            {{-- {{ $event->slug }} --}}
                                <li class="list-group-item" id="date_debut">
                                    <span class="fs-4 fw-bold">{{ __('client.startDate') }} : <span class="ms-2 text-muted" id="date_debut_val"></span></span>
                                </li>
                                <li class="list-group-item" id="date_fin">
                                    <span class="fs-4 fw-bold">{{ __('client.endDate') }} : <span class="ms-2 text-muted" id="date_fin_val"></span></span>
                                </li>
                                <li class="list-group-item">
                                    {{-- <a href="{{ route('events.edit',$event->slug) }}" class="btn btn-success">
                                        <i class="mdi mdi-square-edit-outline"></i> {{ __('button.Edit') }}
                                    </a> --}}
                                    {{-- <a href="javascript:void(0);" onclick="deleteEvenement('{{ $event->slug }}')" class="btn btn-danger ms-1">
                                        <i class="mdi mdi-delete"></i> {{ __('button.Delete') }}
                                    </a> --}}
                                    <div class="text-sm-end d-flex justify-content-end">
                                        <a href="#" onclick="return false"
                                        class="exitForm btn btn-secondary ms-2">
                                            {{ __('button.Annuler') }}</a>
                                        {{-- <a id="showForm" onclick="return false"
                                            class="showForm mx-2 btn btn-success">
                                            <i class="mdi mdi-content-save-outline me-1"></i>
                                            {{ __('lawyer.create') }}
                                        </a> --}}
                                        <span id="btn-edit">
                                            {{-- .... --}}
                                        </span>
                                        <a href="#"
                                        onclick="return false"
                                        class="deleteEvent btn btn-danger ms-2">{{ __('button.Delete') }}</a>
                                    </div>
                                </li>
                            </ul>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="deleteEvenementModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ __('client.DeleteOf') }} {{ __('client.Event') }}</h5>

                            <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body"
                            dir="{{ session()->get('locale') === 'ar' ? 'rtl' : 'ltr' }}"
                        >
                        <p>{{ __('client.ConfDeleteOf') }} {{ __('client.Event') }}</p>
                        <small class="font-weight-bold" style="color:#edb200;">
                            <i class="fas fa-exclamation-triangle"></i>
                            {{ __('client.ConfDeleteOf') }} {{ __('client.Event') }}
                        </small>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('lawyer.annuler') }}</button>

                                <form id="deleteEvenementForm" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="{{ __('lawyer.delete') }}" class="btn btn-danger">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>


        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar'); //your dive id of calendar
            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['interaction', 'dayGrid'],
                header: {
                    left: `${window.innerWidth < 500 ? "" : "prevYear"},prev,next,${window.innerWidth < 500 ? "" : "nextYear"} today`,
                    center: 'title',
                    right: `${window.innerWidth < 500 ? "" : "dayGridMonth,dayGridDay,dayGridWeek"}`
                },
                defaultView: `${window.innerWidth < 500 ? "dayGridDay" : "dayGridMonth"}`,
                defaultDate: "{{ date('Y-m-d') }}",
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                selectable: true,
                resizable: true,
                select: function(selectionInfo) { //trigger select event

                    $("#title").removeClass("is-invalid");
                    $("#avocacy_division").removeClass("is-invalid");
                    $("#file_reference").removeClass("is-invalid");
                    $("#client_name").removeClass("is-invalid");
                    $(".popup1").show();
                    $("#submitForm").click(function() {
                        var title = $("#title").val();
                        var avocacy_division = $("#avocacy_division").val();
                        var file_reference = $("#file_reference").val();
                        var client_name = $("#client_name").val();
                        var phone_number = $("#phone_number").val();
                        var procedure_description = $("#procedure_description").val();
                        var procedure_result = $("#procedure_result").val();
                        var color = $("#color").val();
                        if (title && avocacy_division && file_reference
                            && client_name) {

                            let formatted_start_date = selectionInfo.start.getFullYear() + "-" +
                                (selectionInfo
                                    .start.getMonth() + 1) + "-" + selectionInfo.start
                            .getDate() + " " +
                                selectionInfo.start.getHours() + ":" + selectionInfo.start
                                .getMinutes() + ":" +
                                selectionInfo.start.getSeconds();
                            let formatted_end_date = selectionInfo.end.getFullYear() + "-" + (
                                    selectionInfo.end
                                    .getMonth() + 1) + "-" + selectionInfo.end.getDate() + " " +
                                selectionInfo
                                .end.getHours() + ":" + selectionInfo.end.getMinutes() + ":" +
                                selectionInfo.end
                                .getSeconds();

                            // formatted_start_date = $.fullCalendar.formatDate(selectionInfo.start, "yyyy-MM-dd HH:mm:ss");
                            // formatted_end_date = $.fullCalendar.formatDate(selectionInfo.end, "yyyy-MM-dd HH:mm:ss");
                            // alert(formatted_start_date + " " + formatted_end_date);
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                        'content')
                                }
                            });
                            $.ajax({
                                type: 'POST',
                                url: "/lawyer/calendar/events",
                                data: {
                                    title:title,
                                    avocacy_division:avocacy_division,
                                    file_reference:file_reference,
                                    client_name:client_name,
                                    phone_number:phone_number,
                                    procedure_description:procedure_description,
                                    procedure_result:procedure_result,
                                    color:color,
                                    start_date:formatted_start_date,
                                    end_date:formatted_end_date
                                },
                                success: function() {
                                    Swal.fire({
                                        position: 'center',
                                        icon: 'success',
                                        title: "{{ __('client.EventAdded') }}",
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                    location.reload();
                                }
                            });
                            // console.log("start " + start + " end " + end);
                        }else {
                            $("#title").addClass("is-invalid");
                            $("#avocacy_division").addClass("is-invalid");
                            $("#file_reference").addClass("is-invalid");
                            $("#client_name").addClass("is-invalid");
                        }
                        calendar.fullCalendar('unselect');
                        $(".popup1").hide();
                    });
                    $(".exit").click(function() {
                        // clear all info, unselect events and...
                        $(".popup1").hide();
                    });
                },
                eventLimit: true, // allow "more" link when too many events
                events: '/lawyer/calendar/events',

                eventClick: function(info) {
                    // ------------------------
                    // Swal.fire({
                    //     title: "{{ __('client.TitleEvent') }}",
                    //     html: `
                    //         <p dir="{{ session()->get('locale') === 'ar' ? "rtl" : "ltr" }}">
                    //             {{ __('client.title') }} : ${info.event.title} <br/>
                    //             {{ __('client.startDate') }} : ${info.event.start.toLocaleString()}
                    //             ${info.event.end ? "<br/> {{ __('client.endDate') }} :" + info.event.end.toLocaleString() : ""}
                    //         </p>
                    //             `,
                    //     icon: 'info',
                    //     showDenyButton: true,
                    //     showCancelButton: true,
                    //     cancelButtonText: "{{ __('button.Annuler') }}",
                    //     confirmButtonText: "{{ __('button.View') }}",
                    //     denyButtonText: "{{ __('button.Delete') }}",
                    //     reverseButtons: false

                    // })
                    // .then((result) => {
                    //     if (result.isConfirmed) { /// Show
                    //         let link =
                    //             '{{ url('/') }}' + `/lawyer/calendar/events/${info.event.extendedProps.slug}`;
                    //         window.location.href = link;
                    //         // Swal.fire('Saved!', '', 'success')
                    //     } else if (result.isDenied) { // delete
                    //         $.ajaxSetup({
                    //             headers: {
                    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                    //                     'content')
                    //             }
                    //         });
                    //         $.ajax({
                    //             type: 'DELETE',
                    //             url: "/lawyer/calendar/events/" + info.event.extendedProps.slug,
                    //             success: function() {
                    //                 Swal.fire({
                    //                     position: 'center',
                    //                     icon: 'success',
                    //                     title: 'Événement supprimé',
                    //                     showConfirmButton: false,
                    //                     timer: 1500
                    //                 })
                    //                 location.reload();
                    //             }
                    //         });
                    //         // Swal.fire('Event Supprimer', '', 'info')
                    //     }
                    // })
                    var slug = info.event.extendedProps.slug;

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: 'GET',
                        url: '/lawyer/calendar/events/'+ slug,
                        // url: '/lawyer/notification/checkConvo/'+people.id,
                        success: function(response){

                            $(".popup-detail").show();
                            // console.log(slug);
                            if(!!response.slug){
                                $("#btn-edit").html(function() {
                                var slug = response.slug;
                                return `<a href='{{ URL('lawyer/calendar/events/${slug}/edit') }}' class='btn ms-2 btn-success'>
                                             {{ __('button.Edit') }}
                                        </a>`;
                                });
                            }
                            if(!!response.title ){
                                $(".list-group #title").removeClass("hide");
                                $(".list-group #title").addClass("show");
                                $("#title_val").html(response.title);
                            }else{
                                $(".list-group #title").removeClass("show");
                                $(".list-group #title").addClass("hide");
                                $("#title_val").html("");
                            }
                            if(!!response.client_name  ){
                                $(".list-group #client_name").removeClass("hide");
                                $(".list-group #client_name").addClass("show");
                                $("#client_name_val").html(response.client_name);
                            }else{
                                $(".list-group #client_name").removeClass("show");
                                $(".list-group #client_name").addClass("hide");
                                $("#client_name_val").html("");
                            }

                            if(!!response.avocacy_division ){
                                $(".list-group #avocacy_division").removeClass("hide");
                                $(".list-group #avocacy_division").addClass("show");
                                $("#avocacy_division_val").html(response.avocacy_division);
                            }else{
                                $(".list-group #avocacy_division").removeClass("show");
                                $(".list-group #avocacy_division").addClass("hide");
                                $("#avocacy_division_val").html("");
                            }

                            if(!!response.date_fin){
                                $(".list-group #date_fin").removeClass("hide");
                                $(".list-group #date_fin").addClass("show");
                                $("#date_fin_val").html(response.date_fin);
                            }else{
                                $(".list-group #date_fin").removeClass("show");
                                $(".list-group #date_fin").addClass("hide");
                                $("#date_fin_val").html("");
                            }
                            if(!!response.date_debut){
                                $(".list-group #date_debut").removeClass("hide");
                                $(".list-group #date_debut").addClass("show");
                                $("#date_debut_val").html(response.date_debut);
                            }else{
                                $(".list-group #date_debut").removeClass("show");
                                $(".list-group #date_debut").addClass("hide");
                                $("#date_debut_val").html("");
                            }

                            if(!!response.file_reference){
                                $(".list-group #file_reference").removeClass("hide");
                                $(".list-group #file_reference").addClass("show");
                                $("#file_reference_val").html(response.file_reference);
                            }else{
                                $(".list-group #file_reference").removeClass("show");
                                $(".list-group #file_reference").addClass("hide");
                                $("#file_reference_val").html("");
                            }
                            if(!!response.avocacy_division){
                                $(".list-group #avocacy_division").removeClass("hide");
                                $(".list-group #avocacy_division").addClass("show");
                                $("#avocacy_division_val").html(response.avocacy_division);
                            }else{
                                $(".list-group #avocacy_division").removeClass("show");
                                $(".list-group #avocacy_division").addClass("hide");
                                $("#avocacy_division_val").html("");
                            }
                            if(!!response.phone_number){
                                $(".list-group #phone_number").removeClass("hide");
                                $(".list-group #phone_number").addClass("show");
                                $("#phone_number_val").html(response.phone_number);
                            }else{
                                $(".list-group #phone_number").removeClass("show");
                                $(".list-group #phone_number").addClass("hide");
                                $("#phone_number_val").html("");
                            }
                            if(!!response.procedure_description){
                                $(".list-group #procedure_description").removeClass("hide");
                                $(".list-group #procedure_description").addClass("show");
                                $("#procedure_description_val").html(response.procedure_description);
                            }else{
                                $(".list-group #procedure_description").removeClass("show");
                                $(".list-group #procedure_description").addClass("hide");
                                $("#procedure_description_val").html("");
                            }
                            if(!!response.procedure_result){
                                $(".list-group #procedure_result").removeClass("hide");
                                $(".list-group #procedure_result").addClass("show");
                                $("#procedure_result_val").html(response.procedure_result);
                            }else{
                                $(".list-group #procedure_result").removeClass("show");
                                $(".list-group #procedure_result").addClass("hide");
                                $("#procedure_result_val").html("");
                            }
                        },
                        error: function(response){
                            console.log(response);
                        }
                    });


                    $(".exitForm").click(function() {
                        // clear all info, unselect events and...
                        $(".popup-detail").hide();
                    });

                    $(".deleteEvent").click(function() {
                        $(".popup-detail").hide();
                        const swalWithBootstrapButtons = Swal.mixin({
                            customClass: {
                                confirmButton: 'btn btn-danger',
                                cancelButton: 'btn btn-secondary mx-2'
                            },
                            buttonsStyling: false
                        })
                        swalWithBootstrapButtons.fire({
                                title: "{{ __('client.ConfDeleteOf') }} {{ __('client.Event') }}",
                                icon: 'info',
                                showCancelButton: true,
                                cancelButtonText: "{{ __('button.Annuler') }}",
                                confirmButtonText: "{{ __('button.Delete') }}",
                                reverseButtons: false
                            }).then((result) => {
                            if (result.isConfirmed) {
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });
                                $.ajax({
                                    type:'DELETE',
                                    url : "/lawyer/calendar/events/" + info.event.extendedProps.slug,
                                    success:function(){
                                        Swal.fire({
                                            position: 'center',
                                            icon: 'success',
                                            title: "{{ __('client.EventDeleted') }}",
                                            showConfirmButton: false,
                                            timer: 1500
                                        })
                                        location.reload();
                                    }
                                });
                            }
                        })
                    })
                },
                eventDrop: function(info) { //trigger drop event
                    let formatted_start_date = info.event.start.getFullYear() + "-" + (info.event.start
                            .getMonth() + 1) + "-" + info.event.start.getDate() + " " + info.event.start
                        .getHours() + ":" + info.event.start.getMinutes() + ":" + info.event.start
                        .getSeconds();
                    let formatted_end_date = info.event.end.getFullYear() + "-" + (info.event.end
                            .getMonth() + 1) + "-" + info.event.end.getDate() + " " + info.event.end
                        .getHours() + ":" + info.event.end.getMinutes() + ":" + info.event.end
                        .getSeconds();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: 'PUT',
                        url: "/lawyer/calendar/events/" + info.event.extendedProps.slug,
                        data:{
                            title: info.event.title,
                            start: formatted_start_date,
                            end: formatted_end_date
                        },
                        success: function() {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: "{{ __('client.EventUpdated') }}",
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    });
                },
                eventResize: function(eventResizeInfo) { //trigger event resize
                    // alert("ok");
                    let formatted_start_date = eventResizeInfo.event.start.getFullYear() + "-" + (
                            eventResizeInfo.event.start.getMonth() + 1) + "-" + eventResizeInfo.event
                        .start.getDate() + " " + eventResizeInfo.event.start.getHours() + ":" +
                        eventResizeInfo.event.start.getMinutes() + ":" + eventResizeInfo.event.start
                        .getSeconds();
                    let formatted_end_date = eventResizeInfo.event.end.getFullYear() + "-" + (
                            eventResizeInfo.event.end.getMonth() + 1) + "-" + eventResizeInfo.event.end
                        .getDate() + " " + eventResizeInfo.event.end.getHours() + ":" + eventResizeInfo
                        .event.end.getMinutes() + ":" + eventResizeInfo.event.end.getSeconds();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: 'PUT',
                        url: "/lawyer/calendar/events/" + eventResizeinfo.event.extendedProps.slug,
                        data: {
                            title: eventResizeInfo.event.title,
                            start: formatted_start_date,
                            end: formatted_end_date
                        },
                        success: function() {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Événement modifié',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    });
                }
            });

            // change language
            calendar.setOption('locale', "{{ session()->get('locale') === 'ar' ? 'ar' : 'fr' }}");
            calendar.render();


            document.querySelector('.fc-dayGridMonth-button').innerHTML = "{{ __('client.Month') }}";
            document.querySelector('.fc-dayGridWeek-button').innerHTML = "{{ __('client.Week') }}";
            document.querySelector('.fc-dayGridDay-button').innerHTML = "{{ __('client.Day') }}";
            document.querySelector('.fc-today-button').innerHTML = "{{ __('client.Today') }}";

            document.querySelector('.fc-day-grid-container').removeClass();
            document.querySelector('#calendar .fc-header-toolbar').style.display = "flex !important";
        });

    </script>

</x-dashboard.lawyer.master>
