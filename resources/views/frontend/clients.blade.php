@extends('frontend.index')

@section('content')

<section class="no-padding one-half-screen position-relative">
    <div class="opacity-full bg-gradient-fast-blue-purple z-index-0"></div>
    <div class="container h-100">
        <div class="row align-items-end justify-content-center h-100">
            <div class="col-12 col-xl-6 col-lg-7 col-md-10 position-relative page-title-large text-center">
                <span class="margin-15px-bottom alt-font  text-extra-large text-white d-block">{{ trans('admin.intro') }}</span>
                <h1 class="text-white alt-font font-weight-500
                           margin-5-rem-bottom sm-margin-3-rem-bottom">{{ trans('admin.clients') }}</h1>
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
        <div class="row row-cols-1 row-cols-lg-6 row-cols-sm-2 client-logo-style-07">
            @foreach($customers as $customer)
                <div class="col text-center client-logo margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <a href="#">
                        <img alt="{{ $customer->{'name_'.session('lang')} }}" src="{{ Storage::url($customer->logo) }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection
