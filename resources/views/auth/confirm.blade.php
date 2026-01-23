
@if (session()->get('locale') !== 'ar')
    <x-main.default.ltr.layouts.main.index title="Confirmer la connexion">

        <div>
            <x-main.default.ltr.pages.login.confirm-form  />
        </div>

    </x-main.default.ltr.layouts.main.index>

@else

    <x-main.default.rtl.layouts.main.index title="تأكيد تسجيل الدخول">

        <div>
            <x-main.default.rtl.pages.login.confirm-form  />
        </div>

    </x-main.default.rtl.layouts.main.index>

@endif
