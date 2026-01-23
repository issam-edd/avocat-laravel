<x-dashboard.lawyer.master title="{{ __('client.Event') }}">

    <div class="row">
        <div class="col-md-8 mx-auto my-4">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group" dir="{{ session()->get('locale') === 'ar' ? "rtl" : "ltr"}}">
                        {{-- {{ $event->exist }} --}}
                        @unless($event->exist)
                            <li class="list-group-item">
                                <span class="fs-4  fw-bold">{{ __('client.title') }} : <span class="ms-2 text-muted">{{$event->title}}</span></span>
                            </li>

                            @if(!!$event->avocacy_division)
                                <li class="list-group-item">
                                    <span class="fs-4  fw-bold">{{ __('client.AvocacyDivision') }} : <span class="ms-2 text-muted">{{$event->avocacy_division}}</span></span>
                                </li>
                            @endif
                            @if(!!$event->file_reference)
                                <li class="list-group-item">
                                    <span class="fs-4  fw-bold">{{ __('client.FileReference') }} : <span class="ms-2 text-muted">{{$event->file_reference}}</span></span>
                                </li>
                            @endif
                            @if(!!$event->client_name)
                                <li class="list-group-item">
                                    <span class="fs-4  fw-bold">{{ __('client.ClientName') }} : <span class="ms-2 text-muted">{{$event->client_name}}</span></span>
                                </li>
                            @endif

                            @if(!!$event->phone_number)
                                <li class="list-group-item">
                                    <span class="fs-4  fw-bold">{{ __('client.PhoneNumber') }} : <span class="ms-2 text-muted">{{$event->client_name}}</span></span>
                                </li>
                            @endif
                            @if(!!$event->procedure_description)
                                <li class="list-group-item">
                                    <span class="fs-4  fw-bold">{{ __('client.description') }} : <span class="ms-2 text-muted">{{$event->procedure_description}}</span></span>
                                </li>
                            @endif

                            @if(!!$event->procedure_result)
                                <li class="list-group-item">
                                    <span class="fs-4  fw-bold">{{ __('client.result') }} : <span class="ms-2 text-muted">{{$event->procedure_result}}</span></span>
                                </li>
                            @endif

                        @else
                            <li class="list-group-item">
                                <span class="fs-4  fw-bold">{{ __('client.title') }} : <span class="ms-2 text-muted">{{$event->title}}</span></span>
                            </li>

                            @if(!!$event->avocacy_division)
                                <li class="list-group-item">
                                    <span class="fs-4  fw-bold">{{ __('client.AvocacyDivision') }} : <span class="ms-2 text-muted">{{$event->avocacy_division}}</span></span>
                                </li>
                            @endif
                            @if(!!$event->file_reference)
                                <li class="list-group-item">
                                    <span class="fs-4  fw-bold">{{ __('client.FileReference') }} : <span class="ms-2 text-muted">{{$event->file_reference}}</span></span>
                                </li>
                            @endif
                            @if(!!$event->client_name)
                                <li class="list-group-item">
                                    <span class="fs-4  fw-bold">{{ __('client.ClientName') }} : <span class="ms-2 text-muted">{{$event->client_name}}</span></span>
                                </li>
                            @endif

                            @if(!!$event->phone_number)
                                <li class="list-group-item">
                                    <span class="fs-4  fw-bold">{{ __('client.PhoneNumber') }} : <span class="ms-2 text-muted">{{$event->phone_number}}</span></span>
                                </li>
                            @endif
                            @if(!!$event->procedure_description)
                                <li class="list-group-item">
                                    <span class="fs-4  fw-bold">{{ __('client.description') }} : <span class="ms-2 text-muted">{{$event->procedure_description}}</span></span>
                                </li>
                            @endif

                            @if(!!$event->procedure_result)
                                <li class="list-group-item">
                                    <span class="fs-4  fw-bold">{{ __('client.result') }} : <span class="ms-2 text-muted">{{$event->procedure_result}}</span></span>
                                </li>
                            @endif
                            @php
                                $file = App\Models\File::where("id",$event->file_id)->first();
                            @endphp

                            @if(!!$file->parties)
                                <li class="list-group-item">
                                    <span class="fs-4  fw-bold">{{ __('client.Parties') }} : <span class="ms-2 text-muted">{{$file->parties}}</span></span>
                                </li>
                            @endif

                            @if(!!$file->parties_involved)
                                <li class="list-group-item">
                                    <span class="fs-4  fw-bold">{{ __('client.PartiesInvolved') }} : <span class="ms-2 text-muted">{{$file->parties_involved}}</span></span>
                                </li>
                            @endif
                        @endunless

                        {{-- {{ $event->slug }} --}}
                            <li class="list-group-item">
                                <span class="fs-4 fw-bold">{{ __('client.startDate') }} : <span class="ms-2 text-muted">{{$event->date_debut}}</span></span>
                            </li>
                            <li class="list-group-item">
                                <span class="fs-4 fw-bold">{{ __('client.endDate') }} : <span class="ms-2 text-muted">{{$event->date_fin}}</span></span>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('events.edit',$event->slug) }}" class="btn btn-success">
                                    <i class="mdi mdi-square-edit-outline"></i> {{ __('button.Edit') }}
                                </a>
                                <a href="javascript:void(0);" onclick="deleteEvenement('{{ $event->slug }}')" class="btn btn-danger ms-1">
                                    <i class="mdi mdi-delete"></i> {{ __('button.Delete') }}
                                </a>
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

    <script>
        function deleteEvenement(slug) {
            $('#deleteEvenementModal').modal('toggle'); // taffichage modal
            $('#deleteEvenementForm').attr('action', '/lawyer/calendar/events/delete/' + slug); //nhd id fl form #deleteStudentForm
        }
    </script>
    </x-dashboard.lawyer.master>
