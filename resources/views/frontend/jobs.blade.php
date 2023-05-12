@extends('frontend.index')

@section('content')

<section class="no-padding one-half-screen position-relative">
    <div class="opacity-full bg-gradient-fast-blue-purple z-index-0"></div>
    <div class="container h-100">
        <div class="row align-items-end justify-content-center h-100">
            <div class="col-12 col-xl-6 col-lg-7 col-md-10 position-relative page-title-large text-center">

                <span class="margin-15px-bottom alt-font  text-extra-large text-white d-block">{!! trans('admin.intro') !!}</span>
                <h1 class="text-white alt-font font-weight-500  margin-5-rem-bottom sm-margin-3-rem-bottom"> {!! trans('admin.contact_us') !!} </h1>
                <span class="w-1px h-80px d-inline-block bg-white margin-5-rem-bottom sm-margin-3-rem-bottom sm-h-50px"></span>

            </div>
        </div>
    </div>
    <video loop="" autoplay="" controls="" muted class="html-video" poster="https://via.placeholder.com/1920x1080">
        <source type="video/mp4" src="{{ url ('frontend/sadu/video/video.mp4') }}" />
    </video>
</section>

<section class="half-section sm-overflow-visible wow animate__fadeIn bg-light-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7 col-lg-6 text-center">

                <span class="d-block text-green margin-15px-bottom text-large">{!! trans('admin.job_intro') !!}</span>
                <h6 class="text-extra-dark-gray alt-font font-weight-500 d-inline-block letter-spacing-minus-1"> {!! trans('admin.job_question') !!} <br/> {!! trans('admin.job_email') !!} </h6>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <a href="mailto:{{ $setting->employment_email }}"
                   class="btn btn-large btn-round-edge btn-transparent-green btn-slide-right-bg">
                   {!! $setting->employment_email !!} <span class="bg-yellowish-green"></span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
