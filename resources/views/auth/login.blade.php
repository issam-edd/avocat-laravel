

@if (session()->get('locale') !== 'ar')
<x-main.default.ltr.layouts.main.index title="Login">

    <div>
        <x-main.default.ltr.pages.login.form />
    </div>

</x-main.default.ltr.layouts.main.index>
@else
<x-main.default.rtl.layouts.main.index title="تسجيل الدخول">

    <div>
        <x-main.default.rtl.pages.login.form />
    </div>

</x-main.default.rtl.layouts.main.index>
@endif
