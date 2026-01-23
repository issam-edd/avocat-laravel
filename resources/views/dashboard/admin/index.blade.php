<x-dashboard.admin.master title="Home">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Home</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <x-dashboard.admin.card
            :faqs="$faqs"
            :blogs="$blogs"
            :avocats="$avocats"
            :avocatsPremium="$avocatsPremium"
            :mails="$mails"
        />

    </div>
</x-dashboard.admin.master>
