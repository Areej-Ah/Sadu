@extends('frontend.index')

@section('content')

<section class="no-padding one-half-screen position-relative">
    <div class="opacity-full bg-gradient-fast-blue-purple z-index-0"></div>
    <div class="container h-100">
        <div class="row align-items-end justify-content-center h-100">
            <div class="col-12 col-xl-6 col-lg-7 col-md-10 position-relative page-title-large text-center">
                <span class="margin-15px-bottom alt-font  text-extra-large text-white d-block">{!! trans('admin.intro') !!}</span>
                <h1 class="text-white alt-font font-weight-500
                           margin-5-rem-bottom sm-margin-3-rem-bottom">{!! trans('admin.video_gallery') !!}</h1>
                <span class="w-1px h-80px d-inline-block bg-white
                             margin-5-rem-bottom sm-margin-3-rem-bottom sm-h-50px"></span>
            </div>
        </div>
    </div>
    <video loop="" autoplay="" controls="" muted class="html-video" poster="https://via.placeholder.com/1920x1080">
        <source type="video/mp4" src="{{ url ('frontend/sadu/video/video.mp4') }}" />
    </video>
</section>


<section class="half-section padding-four-lr bg-light-gray lg-padding-two-lr sm-no-padding-lr">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 filter-content">
                <ul class="portfolio-classic portfolio-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                    <li class="grid-sizer"></li>
                    @foreach($videos as $video)
                        <li class="grid-item logos wow animate__fadeIn" data-wow-delay="0.2s">
                            <div class="portfolio-box border-radius-6px box-shadow-large">
                                <div class="video-image bg-gradient-fast-blue-purple">
                                    <iframe src="https://www.youtube.com/embed/{!! $video->video !!}?autoplay=0;&mute=1;rel=0&amp;showinfo=0" allowfullscreen></iframe>
                                </div>
                                <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                    <a href="single-project-page-02.html">
                                        <span class="alt-font text-extra-dark-gray font-weight-500">{!! $video->{'title_'.session('lang')} !!}</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
