<!-- ============================ Footer Start ================================== -->
<footer dir="rtl" class="dark-footer skin-dark-footer style-2 text-right">
    <div class="footer-middle">
        <div class="container">
            <div class="row">

                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="footer_widget">
                        <img src="{{ asset('images/logos/logo-dark.svg') }}" class="img-footer small mb-2" style="min-width: 210px; margin-bottom: 5px" alt="محاموا مراكش" />

                        <p style="color: #c1c1c" class=" pl-4">
                            @if (isset($options['description_ar']))
                                    {{ $options['description_ar'] ?? '' }}
                            @else
                                محاموا مراكش - مصدرك للعثور على محامين محترفين في مراكش. نحن نوفر معلومات مفصلة عن أكثر المكاتب المحترفة في مراكش والموارد القانونية المفيدة لمساعدة عملائنا في فهم حقوقهم والتزاماتهم بشكل أفضل.
                            @endif
                        </p>
                        {{-- <div class="address mt-2">
                            {{ $options['localisation'] ?? '' }}
                        </div>
                        <div class="address mt-3">
                            {{ $options['addresse1'] ?? '' }} <br />
                            {{ $options['addresse2'] ?? '' }}
                        </div> --}}
                        <!-- <div class="address mt-2">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#" class="text-white"><i class="lni lni-facebook-filled"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="text-white"><i class="lni lni-twitter-filled"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="text-white"><i class="lni lni-youtube"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="text-white"><i class="lni lni-instagram-filled"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="text-white"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>


                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title">عن الموقع</h4>
                        <ul class="footer-menu">
                            <li><a href="{{ route('home') }}">الرئيسية</a></li>
                            <li><a href="{{ route('faq') }}">سؤال جواب</a></li>
                            <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
                            <li><a href="{{ route('about') }}">معلومات عنا</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title">روابط مفيدة</h4>
                        <ul class="footer-menu">
                            <li><a href="{{ route('lawyers') }}">المحامون</a></li>
                            <li><a href="{{ route('blogs') }}">المقالات</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom br-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 text-center">
                    <p class="mb-0">© جميع الحقوق محفوظة 2023</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ============================ Footer End ================================== -->
