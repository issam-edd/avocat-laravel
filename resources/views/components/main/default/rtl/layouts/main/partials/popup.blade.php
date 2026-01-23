<div class="popup__container" id="popup-container">
    <!-- Popup overlar -->
    <div class="popup__overlay" id="popup-overlay"></div>

    <!-- Popup activator -->
    <div class="popup__activator" id="popup-activator">
        <img src="{{ asset('assets/main/default/img/write-message.png') }}" />
        <p>احصل على استشارة مجانية</p>
    </div>

    <!-- Popup content -->
    <div class="popup__content">
        <form class="bg-white rounded p-4 pb-0 tw-relative" action="{{ route("lawyers.contact.send.all") }}" method="POST">
            <div class="tw-flex tw-justify-end tw-absolute tw-top-0 tw-left-0">
                <img src="{{ asset('images/logos/logo-sm.png') }}" width="80" />
            </div>
            @csrf
            <div class="row">
                <div dir="rtl" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right">
                    <div class="form-group">
                        <p class="theme-cl-s m-0">
                            اسأل محاميًا:
                        </p>
                        <h3 class="mb-3 text-center text-md-right mt-n2 ft-bold text-muted">احصل على استشارة مجانية</h3>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">الإسم الكامل</label>
                                <input type="text" name="fullname" class="form-control" required placeholder="يرجى كتابة اسمك هنا">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">الهاتف</label>
                                <input type="text" name="phone" class="form-control" required placeholder="يرجى كتابة الهاتف هنا">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">البريد الإلكتروني</label>
                                <input type="text" name="email" class="form-control"  placeholder="يرجى كتابة عنوان بريدك الإلكتروني هنا">
                            </div>
                        </div>
                    </div>

                    <div class="form-group position-relative">
                        <label class="small text-dark ft-medium">السؤال</label>
                        <input type="text" name="question" class="form-control" required placeholder="يرجى كتابة سؤالك هنا">
                    </div>

                    <div class="form-group position-relative mb-0 mt-2">
                        <button class="btn full-width custom-height-lg theme-bg-s text-white fs-md" type="submit">ارسال</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
