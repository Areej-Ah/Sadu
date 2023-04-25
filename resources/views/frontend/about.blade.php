@extends('frontend.index')

@section('content')

<section class="no-padding one-half-screen position-relative">
    <div class="opacity-full bg-gradient-fast-blue-purple z-index-0"></div>
    <div class="container h-100">
        <div class="row align-items-end justify-content-center h-100">
            <div class="col-12 col-xl-6 col-lg-7 col-md-10 position-relative page-title-large text-center">
                <span class="margin-15px-bottom alt-font  text-extra-large text-white d-block">سدو لحلول الأعمال</span>
                <h1 class="text-white alt-font font-weight-500
                           margin-5-rem-bottom sm-margin-3-rem-bottom">تعرّف علينا</h1>
                <span class="w-1px h-80px d-inline-block
                      bg-white margin-5-rem-bottom sm-margin-3-rem-bottom sm-h-50px"></span>
            </div>
        </div>
    </div>
    <video loop="" autoplay="" controls="" muted class="html-video" poster="https://via.placeholder.com/1920x1080">
        <source type="video/mp4" src="{{ url ('frontend/sadu/video/video.mp4') }}" />
    </video>
</section>

<section id="down-section">
    <div class="container">
        <div class="row align-items-center" style="flex-direction: row;">
            <div class="col-12 col-md-6 position-relative sm-margin-30px-bottom">
                <!--<img class="border-radius-5px" src="{{ url ('frontend/sadu/images/s1.jpg') }}" alt="" />-->
                <video controls>
                <source src="{{ Storage::url(setting()->video) }}" type="video/mp4">
                </video>
               <!-- <a href="https://www.youtube.com/watch?v=35g7UMVbfPc"
                        class="popup-youtube video-icon-box video-icon-large absolute-middle-center">
                    <span>
                        <span class="video-icon bg-gradient-magenta-orange-2">
                            <i class="icon-simple-line-control-play text-white"></i>
                            <span class="video-icon-sonar">
                                <span class="video-icon-sonar-bfr bg-gradient-magenta-orange-2 opacity-7"></span>
                                <span class="video-icon-sonar-afr bg-gradient-magenta-orange-2"></span>
                            </span>
                        </span>
                    </span>
                </a> -->
            </div>
            <div class="col-12 col-lg-5 col-md-6 offset-lg-1">
                <h5 class="alt-font font-weight-500 text-extra-dark-gray w-90">سدو لحلول الأعمال</h5>
                <p class="lg-w-90 text-extra-large">{{ $setting->description_ar }}</p>

            </div>
        </div>
    </div>
</section>

<section class="half-section bg-light-gray wow animate__fadeIn">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2">

            <div class="col wow animate__fadeIn" data-wow-delay="0.2s">
                <div class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                    <div class="feature-box-icon">
                        <i class="line-icon-Navigation-LeftWindow icon-medium text-dark-golden-yellow margin-40px-bottom md-margin-20px-bottom"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin" style="text-align: center;">
                        <span class="text-extra-medium alt-font text-dark-golden-yellow d-block margin-5px-bottom font-weight-500">الرؤية</span>
                        <p>{{ $setting->vision_ar }}</p>
                    </div>
                    <div class="feature-box-overlay bg-white border-radius-5px"></div>
                </div>
            </div>

            <div class="col wow animate__fadeIn" data-wow-delay="0.4s">
                <div class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                    <div class="feature-box-icon">
                        <i class="line-icon-Cursor-Click2 icon-medium text-dark-golden-yellow margin-40px-bottom md-margin-20px-bottom"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin" style="text-align: center;">
                        <span class="text-extra-medium alt-font text-dark-golden-yellow text-gradient-orange-pink-hover d-block margin-5px-bottom font-weight-500">الرسالة</span>
                        <p>{{ $setting->message_ar }}</p>
                    </div>
                    <div class="feature-box-overlay bg-white border-radius-5px"></div>
                </div>
            </div>

            <div class="col wow animate__fadeIn" data-wow-delay="0.6s">
                <div class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                    <div class="feature-box-icon">
                        <i class="line-icon-Like-2 icon-medium text-dark-golden-yellow margin-40px-bottom md-margin-20px-bottom"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin" style="text-align: center;">
                        <span class="text-extra-medium alt-font text-dark-golden-yellow d-block margin-5px-bottom font-weight-500">الأهداف</span>
                        <p>{{ $setting->values_ar }}</p>
                    </div>
                    <div class="feature-box-overlay bg-white border-radius-5px"></div>
                </div>
            </div>


        </div>
    </div>
</section>


<section class="half-section parallax" data-parallax-background-ratio="0.1" style="background-image: url({{ url ('frontend/sadu/images/statistics.jpg') }});">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="row">

            <div class="col-12 col-lg-4  col-md-4 col-sm-6 text-center text-md-start sm-margin-30px-bottom xs-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.1s" style="direction: ltr;">
                <div class="d-flex flex-row align-item-start margin-10px-bottom justify-content-center ">
                    <h2 class="vertical-counter d-inline-flex text-white alt-font appear font-weight-600  mb-0 " data-to="{{ $setting->number_of_beneficiaries }}"></h2><span class="text-dark-golden-yellow title-extra-small font-weight-500 margin-5px-left">+</span>
                </div>
                <span class="alt-font text-extra-large  d-block text-white" style="text-align: center;">جهة مستفيدة</span>
            </div>

            <div class="col-12 col-lg-4  col-md-4 col-sm-6 text-center text-md-start sm-margin-30px-bottom xs-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.2s" style="direction: ltr;">
                <div class="d-flex flex-row align-item-start margin-10px-bottom justify-content-center">
                    <h2 class="vertical-counter d-inline-flex text-white alt-font appear font-weight-600  mb-0 " data-to="{{ $setting->number_of_employees}}"></h2><span class="text-dark-golden-yellow title-extra-small font-weight-500 margin-5px-left">+</span>
                </div>
                <span class="alt-font text-extra-large  d-block text-white" style="text-align: center;">موظف</span>
            </div>

            <div class="col-12 col-lg-4  col-md-4 col-sm-6 text-center text-md-start xs-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.3s" style="direction: ltr;">
                <div class="d-flex flex-row align-item-start margin-10px-bottom justify-content-center ">
                    <h2 class="vertical-counter d-inline-flex text-white alt-font appear font-weight-600  mb-0 " data-to="{{$setting->number_of_projects}}"></h2><span class="text-dark-golden-yellow title-extra-small font-weight-500 margin-5px-left">+</span>
                </div>
                <span class="alt-font text-extra-large  d-block text-white" style="text-align: center;">مشروع</span>
            </div>

        </div>
        </div>
    </div>
</section>

@endsection
