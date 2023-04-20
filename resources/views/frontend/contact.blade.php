@extends('frontend.index')

@section('content')

<section class="no-padding one-half-screen position-relative">
    <div class="opacity-full bg-gradient-fast-blue-purple z-index-0"></div>
    <div class="container h-100">
        <div class="row align-items-end justify-content-center h-100">
            <div class="col-12 col-xl-6 col-lg-7 col-md-10 position-relative page-title-large text-center">
                <span class="margin-15px-bottom alt-font  text-extra-large text-white d-block">سدو لحلول الأعمال</span>
                <h1 class="text-white alt-font font-weight-500  margin-5-rem-bottom sm-margin-3-rem-bottom"> تواصل معنا </h1>
                <span class="w-1px h-80px d-inline-block bg-white margin-5-rem-bottom sm-margin-3-rem-bottom sm-h-50px"></span>
            </div>
        </div>
    </div>
    <video loop="" autoplay="" controls="" muted class="html-video" poster="https://via.placeholder.com/1920x1080">
        <source type="video/mp4" src="{{ url ('frontend/sadu/video/video.mp4') }}" />
    </video>
</section>

<section class="half-section wow animate__fadeIn bg-light-gray">
    <div class="container">
        <div class="row align-items-end justify-content-center">
            
            <div class="col-12 col-lg-12 offset-lg-1 col-md-8">
                <h6 class="alt-font text-black font-weight-600">للتواصل والإستفسارات </h6>
                <form action="email-templates/contact-form.php" method="post" class="alt-font text-extra-dark-gray">
                    <input class="input-border-bottom border-color-extra-dark-gray bg-transparent placeholder-dark large-input px-0 margin-25px-bottom border-radius-0px required" type="text" name="name" placeholder="الإسم الكامل" />
                    <input class="input-border-bottom border-color-extra-dark-gray bg-transparent placeholder-dark large-input px-0 margin-25px-bottom border-radius-0px required" type="email" name="email" placeholder="بريدك الإلكتروني" />
                    <input class="input-border-bottom border-color-extra-dark-gray bg-transparent placeholder-dark large-input px-0 margin-25px-bottom border-radius-0px" type="tel" name="phone" placeholder="رقم الجوال" />
                    <textarea class="input-border-bottom border-color-extra-dark-gray bg-transparent placeholder-dark large-input px-0 margin-35px-bottom border-radius-0px" name="comment" rows="5" placeholder="كيف يمكننا خدمتك ؟"></textarea>
                    <div class="g-recaptcha margin-35px-bottom" data-sitekey="6LfJf98bAAAAAGC26hfKyd2Ptddbs9xYm4mCNeLx"></div>
                    <input type="hidden" name="redirect" value="">
                    <button class="btn btn-medium btn-dark-gray mb-0 submit" type="submit">إرسال</button>
                    <div class="form-results d-none"></div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="no-padding-tb wow animate__fadeIn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="map-style-3 h-500px xs-h-300px">
                    <iframe class="w-100 h-100 filter-grayscale-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.843821917424!2d144.956054!3d-37.817127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1427947693651"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection