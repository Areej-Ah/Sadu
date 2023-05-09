@extends('frontend.index')

@section('content')

<section class="no-padding one-half-screen position-relative">
    <div class="opacity-full bg-gradient-fast-blue-purple z-index-0"></div>
    <div class="container h-100">
        <div class="row align-items-end justify-content-center h-100">
            <div class="col-12 col-xl-6 col-lg-7 col-md-10 position-relative page-title-large text-center">
                <span class="margin-15px-bottom alt-font  text-extra-large text-white d-block">{!! trans('admin.intro') !!}</span>
                <h1 class="text-white alt-font font-weight-500
                           margin-5-rem-bottom sm-margin-3-rem-bottom">
                           {!! $service->{'name_'.session('lang')} !!}
                </h1>
                <span class="w-1px h-80px d-inline-block
                            bg-white margin-5-rem-bottom sm-margin-3-rem-bottom sm-h-50px"></span>
            </div>
        </div>
    </div>
    <video loop="" autoplay="" controls="" muted class="html-video" poster="https://via.placeholder.com/1920x1080">
        <source type="video/mp4" src="{{ url ('frontend/sadu/video/video.mp4') }}" />
    </video>
</section>


<section class="half-section bg-light-gray">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-5 col-md-9 md-margin-7-rem-bottom">
                <h6 class="alt-font font-weight-600
                           text-extra-dark-gray w-95">{!! $service->{'name_'.session('lang')} !!}</h6>
                <p class="w-80 lg-w-95">
                    {!! $service->description_ar !!}
                </p>
            </div>
            <div class="col-12 col-lg-7 col-md-9 padding-55px-lr sm-padding-5px-right md-padding-50px-left">
                <figure class="image-back-offset-shadow position-left w-100">
                    <img class="border-radius-6px" src="{{ Storage::url($service->icon) }}" alt=""/>
                    <span class="bg-gradient-magenta-orange-2 border-radius-6px overlay"></span>
                </figure>
            </div>
        </div>
    </div>
</section>



@endsection
