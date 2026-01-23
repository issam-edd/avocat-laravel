@props(['data'])

<section class="middle">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">

                <!-- Icon -->
                <div class="p-4 d-inline-flex align-items-center justify-content-center circle bg-light-info text-info mx-auto mb-4">
                    <i class="ti-search fs-lg"></i>
                </div>

                <!-- Text -->
                <p class="ft-regular fs-md mb-5">
                    Désolé, nous n'avons trouvé aucun résultat pour votre recherche : "{{ $data['term'] }}".<br> Nous vous suggérons d'effectuer une recherche avec des mots clés moins précis ou de revenir à la page d'accueil.
                </p>
                <!-- Button -->
                <a class="btn btn-dark" href="{{ route('home') }}">{{ __('siteweb.home') }}</a>
            </div>
        </div>

    </div>
</section>
