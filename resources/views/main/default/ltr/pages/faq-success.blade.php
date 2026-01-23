
<x-main.default.ltr.layouts.main.master title="Email a été envoyé avec succès">


    <section class="middle">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">

                        <!-- Icon -->
                        <div class="p-4 d-inline-flex align-items-center justify-content-center circle bg-light-success text-success mx-auto mb-4"><i class="ti-arrow-circle-down fs-lg"></i></div>
                        <!-- Heading -->
                        <h2 class="mb-2 tw-text-xl ft-bold">L'email a été envoyé avec succès</h2>
                        <!-- Text -->
                        <p class="ft-regular fs-md mb-5">
                            Merci pour votre demande de consultation gratuite. L'un de nos avocats vous contactera dans les plus brefs délais pour discuter de votre cas. Nous sommes impatients de vous aider à trouver une solution à vos problèmes juridiques.
                        </p>
                        <!-- Button -->
                        <a class="btn btn-dark" href="{{ route('home') }}">{{ __('siteweb.home') }}</a>
                    </div>
                </div>

            </div>
        </section>


</x-main.default.ltr.layouts.main.master>
