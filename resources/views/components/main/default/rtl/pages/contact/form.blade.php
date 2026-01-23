<div class="col-xl-7 col-lg-8 col-md-12 col-sm-12">
    <form class="row" action="{{ route('contact.admin.send') }}" method="POST">
        @csrf
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="form-group">
                <label class="small text-dark ft-medium">الاسم الشخصي</label>
                <input type="text" name="first_name" class="form-control" required placeholder="الاسم الشخصي">
            </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="form-group">
                <label class="small text-dark ft-medium">الإسم العائلي</label>
                <input type="text" name="last_name" class="form-control" required placeholder="الإسم العائلي">
            </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="form-group">
                <label class="small text-dark ft-medium">رقم الهاتف</label>
                <input type="text" name="phone_number" class="form-control" required placeholder="رقم الهاتف">
            </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="form-group">
                <label class="small text-dark ft-medium">البريد الإلكتروني</label>
                <input type="text" name="email" class="form-control" required placeholder="البريد الإلكتروني">
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="form-group">
                <label class="small text-dark ft-medium">رسالة</label>
                <textarea name="body" required placeholder="رسالة" class="form-control tw-border-none tw-border-black !tw-border-solid !tw-border-neutral-500 ht-80"></textarea>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="form-group d-flex justify-content-end">
                <button type="submit" class="btn btn-dark theme-bg-s">إرسال</button>
            </div>
        </div>

    </form>
</div>
