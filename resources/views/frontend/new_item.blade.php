@extends('frontend.index')

@section('content')

<section class="no-padding one-half-screen position-relative">
    <div class="opacity-full bg-gradient-fast-blue-purple z-index-0"></div>
    <div class="container h-100">
        <div class="row align-items-end justify-content-center h-100">
            <div class="col-12 col-xl-6 col-lg-7 col-md-10 position-relative page-title-large text-center">
                <span class="margin-15px-bottom alt-font  text-extra-large text-white d-block">{{ trans('admin.intro') }}</span>
                <h1 class="text-white alt-font font-weight-500
                           margin-5-rem-bottom sm-margin-3-rem-bottom">{{ $new->{'title_'.session('lang')} }} </h1>
                <span class="w-1px h-80px d-inline-block bg-white
                            margin-5-rem-bottom sm-margin-3-rem-bottom sm-h-50px"></span>
            </div>
        </div>
    </div>
    <video loop="" autoplay="" controls="" muted class="html-video" poster="https://via.placeholder.com/1920x1080">
        <source type="video/mp4" src="{{ url ('frontend/sadu/video/video.mp4') }}" />
    </video>
</section>

<section class="half-section bg-light-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 p-sm-0">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 sm-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s"><img src="{{ Storage::url($new->image) }}" alt="" /></div>
                    <div class="col-12 col-lg-5 offset-lg-1 col-md-6 last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.4s">
                        <span class="text-orange-zest alt-font font-weight-500 margin-25px-bottom d-block xs-margin-15px-bottom">{!! $new->created_at->format('d/m/Y') !!}</span>
                        <h6 class="alt-font text-green margin-35px-bottom font-weight-500 xs-margin-25px-bottom">{!! $new->{'title_'.session('lang')} !!}</h6>
                        <p class="text-large">{!! $new->{'text_'.session('lang')} !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
