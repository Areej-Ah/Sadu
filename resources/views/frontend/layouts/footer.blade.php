<section class="half-section">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2">
            <div class="col text-center md-margin-40px-bottom
                        last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.2s">
                <i class="feather icon-feather-map-pin icon-small
                          text-dark-golden-yellow margin-25px-bottom sm-margin-10px-bottom d-block"></i>
                <div class="text-extra-dark-gray text-uppercase
                            text-medium font-weight-600 alt-font letter-spacing-1px margin-10px-bottom">العنوان</div>
                <p class="w-70 lg-w-100 md-w-60 sm-w-75 sm-margin-10px-bottom mx-auto">
                    {{ $setting->{'location_'.session('lang')} }}
                </p>
            </div>
            <div class="col text-center md-margin-40px-bottom
                        last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.4s">
                <i class="feather icon-feather-phone-call
                          icon-small text-dark-golden-yellow margin-25px-bottom sm-margin-10px-bottom d-block"></i>
                <div class="text-extra-dark-gray text-uppercase
                            text-medium font-weight-600 alt-font letter-spacing-1px margin-10px-bottom">إتصل بنا</div>
                <p class="w-70 lg-w-100 sm-margin-10px-bottom mx-auto">
                    {{ $setting->mobile }} <br/> {{ $setting->phone }}
                </p>
            </div>
            <div class="col text-center last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.6s">
                 <i class="feather icon-feather-mail icon-small text-dark-golden-yellow
                           margin-25px-bottom sm-margin-10px-bottom d-block"></i>
                <div class="text-extra-dark-gray text-medium font-weight-600
                            alt-font letter-spacing-1px margin-10px-bottom">للمراسلة</div>
                <p class="w-70 lg-w-100 sm-margin-10px-bottom mx-auto">
                    <a href="mailto:{{ $setting->email }}"
                      class="text-dark-golden-yellow-hover">{{ $setting->email }}</a>
                </p>
            </div>
        </div>
    </div>
</section>

</div>
<footer class="bg-extra-dark-gray footer-sticky">
    <div class="footer-top padding-seven-tb lg-padding-eight-tb sm-padding-50px-tb">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-4 col-sm-6 order-sm-1 order-xl-0 lg-margin-50px-bottom xs-margin-25px-bottom">
                    <a href="{{ url ('/') }}" class="footer-logo margin-20px-bottom d-block">
                        <img style="width: auto; height: 50px;" src="{{ Storage::url(setting()->logo) }}"
                             data-at2x="{{ Storage::url(setting()->logo) }}" alt="" class="max-h-inherit">
                    </a>
                    <p class="alt-font font-weight-300 text-large line-height-36px text-white d-inline-block w-85">
                              شركة تقدم خدمات تطوير الأعمال والحلول الإحترافية والتشغيلية والرقمية
                    </p>
                    <p class="text-white">&copy; 2023 جميع الحقوق محفوظة  </p>
                </div>
                <div class="col-12 col-xl-2 col-sm-6 order-sm-3 order-xl-0 xs-margin-25px-bottom">
                    <span class="alt-font font-weight-600 d-block text-white
                                margin-20px-bottom xs-margin-10px-bottom">عن الشركة</span>
                    <ul>
                        <li><a href="{{ url ('/about') }}" class="text-white-hover">من نحن</a></li>
                        <li><a href="{{ url ('/') }}" class="text-white-hover">الملف التعريفي</a></li>
                        <li><a href="{{ url ('/services') }}" class="text-white-hover">مجالات العمل</a></li>
                        <li><a href="{{ url ('/news') }}" class="text-white-hover"> الأخبار</a></li>
                        <li><a href="{{ url ('/contact') }}" class="text-white-hover"> إتصل بنا</a></li>
                    </ul>
                </div>
                <div class="col-12 col-xl-3 col-sm-6 order-sm-4 order-xl-0 xs-margin-25px-bottom">
                    <span class="alt-font font-weight-600 d-block text-white
                                 margin-20px-bottom xs-margin-10px-bottom">حلول الشركة</span>
                    <ul>
                        @foreach($services as $service)
                         <li>
                            <a href="/service/{{ $service->id}}" class="text-white-hover">
                                {{ $service->{'name_'.session('lang')} }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 col-xl-3  col-sm-6 order-sm-2 order-xl-0 lg-margin-50px-bottom xs-no-margin-bottom">
                    <span class="alt-font font-weight-600 d-block text-white
                                margin-30px-bottom xs-margin-25px-bottom">تابعنا</span>
                    <div class="social-icon-style-12">
                        <ul class="extra-small-icon light">
                            @foreach($socialMedia as $item)
                                <li>
                                    <a  href="{{ $item->link }}" target="_blank">
                                        <i class="fab {{ $item->icon }}"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
<script type="text/javascript" src="{{ url('frontend/sadu') }}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ url('frontend/sadu') }}/js/theme-vendors.min.js"></script>
<script type="text/javascript" src="{{ url('frontend/sadu') }}/js/main.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>
