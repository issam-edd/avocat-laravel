<x-dashboard.client.master title="{{ __('client.Fees') }}">
    <!-- Start Content-->
    <div>
        <div class="row" dir="{{ session()->get('locale') === 'ar' ? "rtl" : "ltr"}}">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title row" >
                        <div class="col-12 col-md-12 col-sm-12">
                            {{ __('client.FeesClient') }} : <span class="text-muted">{{ $fileFees->file->client->client_name }}</span>
                        </div>
                        <div class="col-12 col-md-12 col-sm-12 mt-0">
                            {{ __('client.PhoneNumber') }} : <span class="text-muted">{{ $fileFees->file->client->phone_number }}</span>
                        </div>
                    </h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <!-- end page eFees-title -->

        <div class="row">
            <div class="col-md-12 mx-auto mb-4">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group" dir="{{ session()->get('locale') === 'ar' ? "rtl" : "ltr"}}">
                            @if(!!$fileFees->advance)
                                <li class="list-group-item">
                                    <span class="fs-4  fw-bold"> {{ __('client.advance') }} : <span class="ms-2 text-muted">{{ $fileFees->advance }} {{ __('client.Dh') }}</span> </span>
                                </li>
                            @endif

                            @if(!!$fileFees->description)
                                <li class="list-group-item">
                                    <span class="fs-4  fw-bold"> {{ __('client.description') }} : <span class="ms-2 text-muted">{{ $fileFees->description }}</span> </span>
                                </li>
                            @endif

                            @if (!!$fileFees->virement)
                                <li class="list-group-item">
                                    <h3 class="text-muted">{{ __('client.InfoVirement') }} :</h3>
                                    <hr>
                                    <span class="fs-4  fw-bold"> {{ __('client.ImageVirement') }} :
                                        <span class="ms-2 text-muted">
                                            <img class="avatar-xl" src="{{ asset("storage/". $fileFees->virement->image) }}" alt="">
                                        </span>
                                    </span>
                                </li>
                            @elseif (!!$fileFees->check)
                                <li class="list-group-item">
                                    <h3 class="text-muted">{{ __('client.InfoCheck') }} :</h3>
                                    <hr>

                                    <span class="fs-4  fw-bold"> {{ __('client.NumeroCheck') }} :
                                        <span class="ms-2 text-muted">
                                            {{ $fileFees->check->numero }}
                                        </span>
                                    </span>
                                    <hr>
                                    <span class="fs-4  fw-bold"> {{ __('client.ImageCheck') }} :
                                        <span class="ms-2 text-muted">
                                            <img class="avatar-xl" src="{{ asset("storage/". $fileFees->check->image) }}" alt="">
                                        </span>
                                    </span>

                                </li>
                            @endif

                            <li class="list-group-item row" id="hide">
                                <a onclick="window.print()" class="col-5 col-lg-3 btn btn-outline-primary rounded-pill">
                                    <i class="mdi mdi-printer-outline  me-1"></i> {{ __('button.Imprimer') }}
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
                <!-- end card-body -->
                <div class="clearfix"></div>
            </div>
        </div><!-- End row -->
    </div> <!-- container -->

</x-dashboard.client.master>

