<x-dashboard.lawyer.master title="Calendar">
    <div class="col-md-3">
        <a href="{{ route('events.create') }}" class="btn btn-primary">Ajouter</a>
    </div>
    <div class="row">
        <div class="col-md-9 mx-auto my-4">
            <div id='calendar'></div>
        </div>
    </div>


    <style>
        @media screen and (max-width:600px) {
            .popup {
                min-width: 95%;
            }
        }
    </style>
    <!-- Modal Create Or Update -->
    <div class="popup"
        style="display:none; position: fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);background-color: white;z-index: 1000;">
        <div class="row">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h5 class="card-title p-0 m-0">Ajouter un événement</h5>
                </div>
                <div class="card-body">
                    <div class="container">
                            <fieldset class="form-group row">
                                <legend class="col-form-legend col-sm-1-12">Titre</legend>
                                <div class="col-sm-1-12">
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Titre*">
                                </div>
                            </fieldset>
                            {{-- <fieldset class="mt-3 row">
                                <legend class="col-form-legend col-sm-1-12">Date Début</legend>
                                <div class="col-sm-1-12">
                                    <input type="date" class="form-control" name="start_date" id="start_date"
                                        placeholder="Date Début*">
                                </div>
                            </fieldset>
                            <fieldset class="mt-3 row">
                                <legend class="col-form-legend col-sm-1-12">Date Fin</legend>
                                <div class="col-sm-1-12">
                                    <input type="date" class="form-control" name="end_date" id="end_date"
                                        placeholder="Date Fin*">
                                </div>
                            </fieldset> --}}
                            <div class="mt-3 row">
                                <div class="col-sm-6">
                                    <a href="#" id="submitForm" onclick="return false"
                                        class="submitFrom btn btn-primary">submit</a>&emsp;
                                </div>
                                <div class="col-sm-6">
                                    <a href="#" onclick="return false" class="exit btn btn-secondary">cancel</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--
    <div class="popup" style="display:none; position:fixed; top:25%; left:25%; background-color:white;">
        <input class"title" type="text" size="26" />
        <a href="#" onclick="return false" class="submitFrom">submit</a>&emsp;
        <a href="#" onclick="return false" class="exit">cancel</a>
    </div> --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <script>
        // const Modal = new bootstrap.Modal(document.getElementById("customerModal"));
        // ocument.getElementById('customerModalLabel').modal('show'); // taffichage modal


        // function modelClick() { // Create
        //     // console.log('clicked');
        //     document.getElementById('title').value = "";
        //     document.getElementById('start_date').value = "";
        //     document.getElementById('end_date').value = "";
        //     document.querySelector('.modal-title').innerHTML = "Create New Records";
        //     document.getElementById('action').value = "Create";
        //     Modal.show();
        // }

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar'); //your dive id of calendar
            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['interaction', 'dayGrid'],
                header: {
                    left: 'prevYear,prev,next,nextYear today',
                    center: 'title',
                    right: 'dayGridMonth,dayGridWeek,dayGridDay'
                },
                defaultDate: '{{ date('Y-m-d') }}',
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                selectable: true,
                select: function(selectionInfo) { //trigger select event

                    $(".popup").show();
                    $("#submitForm").click(function() {
                        var title = $("#title").val();
                        if (title) {
                            // formatted_start_date = $.fullCalendar.formatDate(selectionInfo.start, "yyyy-MM-dd HH:mm:ss");
                            // formatted_end_date = $.fullCalendar.formatDate(selectionInfo.end, "yyyy-MM-dd HH:mm:ss");
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
                                    title: title,
                                    start_date: formatted_start_date,
                                    end_date: formatted_end_date
                                },
                                success: function() {
                                    Swal.fire({
                                        position: 'center',
                                        icon: 'success',
                                        title: 'Événement ajouté',
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                    location.reload();
                                }
                            });
                            // console.log("start " + start + " end " + end);
                        }
                        calendar.fullCalendar('unselect');
                        $(".popup").hide();
                    });
                    $(".exit").click(function() {
                        // clear all info, unselect events and...
                        $(".popup").hide();
                    });
                    // _______________________________________

                    // let title = prompt("Entrer le titre de l'événement : ");

                    // ---------


                    // let formatted_start_date = selectionInfo.start.getFullYear() + "-" + (selectionInfo
                    //         .start.getMonth() + 1) + "-" + selectionInfo.start.getDate() + " " +
                    //     selectionInfo.start.getHours() + ":" + selectionInfo.start.getMinutes() + ":" +
                    //     selectionInfo.start.getSeconds();
                    // let formatted_end_date = selectionInfo.end.getFullYear() + "-" + (selectionInfo.end
                    //         .getMonth() + 1) + "-" + selectionInfo.end.getDate() + " " + selectionInfo
                    //     .end.getHours() + ":" + selectionInfo.end.getMinutes() + ":" + selectionInfo.end
                    //     .getSeconds();
                    // $.ajaxSetup({
                    //     headers: {
                    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    //     }
                    // });
                    // $.ajax({
                    //     type: 'POST',
                    //     url: "/lawyer/calendar/events",
                    //     data: {
                    //         title: title,
                    //         start_date: formatted_start_date,
                    //         end_date: formatted_end_date
                    //     },
                    //     success: function() {
                    //         Swal.fire({
                    //             position: 'center',
                    //             icon: 'success',
                    //             title: 'Événement ajouté',
                    //             showConfirmButton: false,
                    //             timer: 1500
                    //         });
                    //         location.reload();
                    //     }
                    // });
                },
                eventLimit: true, // allow "more" link when too many events
                events: '/lawyer/calendar/events',

                eventClick: function(info) { // trigger click event
                    // const swalWithBootstrapButtons = Swal.mixin({
                    //     customClass: {
                    //         confirmButton: 'btn btn-danger',
                    //         cancelButton: 'btn btn-info mx-2'
                    //     },
                    //     buttonsStyling: false
                    // })
                    // swalWithBootstrapButtons.fire({
                    //         title: 'Veuillez choisir une action',
                    //         icon: 'info',

                    //         showCancelButton: true,
                    //         cancelButtonText: 'Voir',
                    //         confirmButtonText: 'Supprimer',
                    //         reverseButtons: false
                    //     }).then((result) => {
                    //     if (!result.value) {
                    //         let link = `http://127.0.0.1:8000/lawyer/calendar/events/${info.event.title}`;
                    //         window.location.href = link;
                    //     }else{
                    //         $.ajaxSetup({
                    //             headers: {
                    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    //             }
                    //         });
                    //         $.ajax({
                    //             type:'DELETE',
                    //             url : "/lawyer/calendar/events/" + info.event.title,
                    //             success:function(){
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
                    //     }
                    // })
                    // -------------------------------------
                    // swal.fire({
                    // title: `Checkpoint!`,
                    // html: `Some Text here.
                // <br> <br> <b>
                // Some text here?
                //     </b>
                // <br> <br> <br>
                // <button type="button" class="btn btn-yes swl-cstm-btn-yes-sbmt-rqst">Yes, Submit Request</button>
                // <button type="button" class="btn btn-no swl-cstm-btn-no-jst-prceed">No, Just proceed</button>
                // <button type="button" class="btn btn-cancel swl-cstm-btn-cancel" >Cancel</button>`,
                    // showCancelButton: false,
                    // showConfirmButton: false,
                    // onBeforeOpen: () => {
                    //     const yes = document.querySelector('.btn-yes')
                    //     const no = document.querySelector('.btn-no')
                    //     const cancel = document.querySelector('.btn-cancel')

                    //     yes.addEventListener('click', () => {
                    //         console.log('Yes was Cliked.')
                    //     })

                    //     no.addEventListener('click', () => {
                    //         console.log('no was Cliked.')
                    //     })

                    //     cancel.addEventListener('click', () => {
                    //         console.log('cancel was Cliked.')
                    //     })
                    // }
                    // })
                    // ------------------------
                    Swal.fire({
                        title: 'Do you want to save the changes?',
                        html: `Title : ${info.event.title} <br/> Start Date :
                                ${info.event.start.getFullYear() + "-" + (info.event
                            .start.getMonth() + 1) + "-" + info.event.start.getDate()}
                            <br/> End Date : ${info.event.end.getFullYear() + "-" + (info.event
                            .end.getMonth() + 1) + "-" + info.event.end.getDate()}`,
                        icon: 'info',
                        showDenyButton: true,
                        showCancelButton: true,
                        confirmButtonText: 'Show',
                        denyButtonText: `Delete`,
                        reverseButtons: false

                    }).then((result) => {
                        if (result.isConfirmed) { /// Show
                            let link =
                                `http://127.0.0.1:8000/lawyer/calendar/events/${info.event.title}`;
                            window.location.href = link;
                            // Swal.fire('Saved!', '', 'success')
                        } else if (result.isDenied) { // delete
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                        'content')
                                }
                            });
                            $.ajax({
                                type: 'DELETE',
                                url: "/lawyer/calendar/events/" + info.event.title,
                                success: function() {
                                    Swal.fire({
                                        position: 'center',
                                        icon: 'success',
                                        title: 'Événement supprimé',
                                        showConfirmButton: false,
                                        timer: 1500
                                    })
                                    location.reload();
                                }
                            });
                            // Swal.fire('Event Supprimer', '', 'info')
                        }
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
                        url: "/lawyer/calendar/events/" + info.event.title,
                        data: {
                            title: info.event.title,
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
                },
                eventResize: function(eventResizeInfo) { //trigger event resize
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
                        url: "/lawyer/calendar/events/" + eventResizeInfo.event.title,
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

            // var calendar = new FullCalendar.Calendar(calendarEl, {
            //     plugins: [ 'interaction', 'dayGrid' ],
            // });
            // change language
            calendar.setOption('locale', 'fr');
            calendar.render();
            document.querySelector('.fc-dayGridMonth-button').innerHTML = "Mois";
            document.querySelector('.fc-dayGridWeek-button').innerHTML = "Semaine";
            document.querySelector('.fc-dayGridDay-button').innerHTML = "Jour";
            document.querySelector('.fc-today-button').innerHTML = "Ajourd'hui";
        });
    </script>

</x-dashboard.lawyer.master>
