<section class="half-section">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2">

            <div class="col text-center md-margin-40px-bottom last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.2s">
                <i class="feather icon-feather-map-pin icon-small text-dark-golden-yellow margin-25px-bottom sm-margin-10px-bottom d-block"></i>
                <div class="text-extra-dark-gray text-uppercase text-medium font-weight-600 alt-font letter-spacing-1px margin-10px-bottom">{{ trans('admin.address') }}</div>
                <p class="w-70 lg-w-100 md-w-60 sm-w-75 sm-margin-10px-bottom mx-auto">{{ $setting->{'location_'.session('lang')} }}</p>
            </div>
            <div class="col text-center md-margin-40px-bottom last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.4s">
                <i class="feather icon-feather-phone-call icon-small text-dark-golden-yellow margin-25px-bottom sm-margin-10px-bottom d-block"></i>
                <div class="text-extra-dark-gray text-uppercase text-medium font-weight-600 alt-font letter-spacing-1px margin-10px-bottom">{{ trans('admin.call_us') }}</div>
                <p class="w-70 lg-w-100 sm-margin-10px-bottom mx-auto"> 1-800-222-000<br> 1-800-222-002</p>
            </div>
            <div class="col text-center last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.6s">
                 <i class="feather icon-feather-mail icon-small text-dark-golden-yellow margin-25px-bottom sm-margin-10px-bottom d-block"></i>
                <div class="text-extra-dark-gray text-uppercase text-medium font-weight-600 alt-font letter-spacing-1px margin-10px-bottom">{{ trans('admin.email_us') }}</div>
                <p class="w-70 lg-w-100 sm-margin-10px-bottom mx-auto"><a href="mailto:{{ $setting->email }}" class="text-dark-golden-yellow-hover">{{ $setting->email }}</a><br></p>

            </div>
        </div>
    </div>
</section>

</div>
<footer class="bg-extra-dark-gray footer-sticky">
    <div class="footer-top padding-seven-tb lg-padding-eight-tb sm-padding-50px-tb">
        <div class="container">
            <div class="row">

                <div class="col-12 col-xl-3 col-sm-6 order-sm-1 order-xl-0 lg-margin-50px-bottom xs-margin-25px-bottom">
                    <a href="index.html" class="footer-logo margin-20px-bottom d-block"><img style="width: auto; height: 50px;" src="{{ url ('frontend/sadu/images/logo-white@2x.png') }}" data-at2x="{{ url ('frontend/sadu/images/logo-white@2x.png') }}" alt="" class="max-h-inherit"></a>
                    <span class="alt-font font-weight-300 text-large line-height-36px text-white d-inline-block w-85">{{ trans('admin.footer_text') }}</span>
                </div>
                <div class="col-12 col-xl-2 offset-xl-1 col-sm-6 order-sm-3 order-xl-0 xs-margin-25px-bottom">
                    <span class="alt-font font-weight-600 d-block text-white margin-20px-bottom xs-margin-10px-bottom">{{ trans('admin.about_company') }}</span>
                    <ul>
                        <li><a href="our-services.html" class="text-white-hover">{{ trans('admin.about') }}</a></li>
                        <li><a href="our-team.html" class="text-white-hover">{{ trans('admin.profile') }}</a></li>
                        <li><a href="contact-us-classic.html" class="text-white-hover">{{ trans('admin.areas_of_works') }}</a></li>
                    </ul>
                </div>
                <div class="col-12 col-xl-2 offset-xl-1 col-sm-6 order-sm-4 order-xl-0 xs-margin-25px-bottom">
                    <span class="alt-font font-weight-600 d-block text-white margin-20px-bottom xs-margin-10px-bottom">{{ trans('admin.company_solutions') }}</span>
                    <ul>
                        <li><a href="our-services.html" class="text-white-hover">{{ trans('admin.professional_solutions') }}</a></li>
                        <li><a href="our-services.html" class="text-white-hover">{{ trans('admin.operational_solutions') }}</a></li>
                        <li><a href="our-services.html" class="text-white-hover">{{ trans('admin.digital_solutions') }}</a></li>
                    </ul>
                </div>
                <div class="col-12 col-xl-2 offset-xl-1 col-sm-6 order-sm-2 order-xl-0 lg-margin-50px-bottom xs-no-margin-bottom">
                    <span class="alt-font font-weight-600 d-block text-white margin-30px-bottom xs-margin-25px-bottom">{{ trans('admin.follow_us') }}</span>

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

    <div class="footer-bottom padding-one-bottom padding-seven-top xs-no-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 order-2 order-md-0 text-sm-center text-md-end last-paragraph-no-margin">
                    <p class="text-white">&copy; {{ trans('admin.rights') }} </p>
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
