@extends('frontend.index')

@section('content')

<section class="no-padding one-half-screen position-relative">
    <div class="opacity-full bg-gradient-fast-blue-purple z-index-0"></div>
    <div class="container h-100">
        <div class="row align-items-end justify-content-center h-100">
            <div class="col-12 col-xl-6 col-lg-7 col-md-10 position-relative page-title-large text-center">
                <span class="margin-15px-bottom alt-font  text-extra-large text-white d-block">{!! trans('admin.intro') !!}</span>
                <h1 class="text-white alt-font font-weight-500
                           margin-5-rem-bottom sm-margin-3-rem-bottom">{!! trans('admin.our_areas_of_works') !!}</h1>
                <span class="w-1px h-80px d-inline-block bg-white
                             margin-5-rem-bottom sm-margin-3-rem-bottom sm-h-50px"></span>
            </div>
        </div>
    </div>
    <video loop="" autoplay="" controls=""
           muted
           class="html-video"
           poster="https://via.placeholder.com/1920x1080">
        <source type="video/mp4" src="{{ url ('frontend/sadu/video/video.mp4') }}" />
    </video>
    </section>

    <section class="half-section bg-light-gray padding-ten-lr xl-padding-two-lr lg-padding-three-lr sm-no-padding-lr">

    <div class=" container-fluid">
        <div class="row">
            <div class="col-12 blog-content">
                <ul class="blog-clean blog-wrapper
                           grid grid-loading grid-4col xl-grid-4col
                           lg-grid-3col md-grid-2col
                           sm-grid-2col xs-grid-1col
                           gutter-extra-large">
                    <li class="grid-sizer"></li>
                    @foreach($services as $service)
                        <li class="grid-item travel wow animate__fadeIn" data-wow-delay="0.2s">
                            <div class="blog-post text-center
                                        border-radius-6px
                                        bg-white box-shadow box-shadow-large-hover">
                                <div class="blog-post-image bg-gradient-fast-blue-purple">
                                    <a href="/service/{{ $service->id}}">
                                        <img src="{{ Storage::url($service->icon) }}" alt="">
                                        <div class="blog-rounded-icon bg-white
                                                    border-color-white absolute-middle-center">
                                            <i class="feather icon-feather-arrow-right
                                                      text-extra-dark-gray icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="post-details padding-30px-all xl-padding-25px-lr">
                                    <a href="/service/{{ $service->id}}"
                                       class="text-extra-dark-gray
                                       font-weight-500 alt-font d-block">{!! $service->{'name_'.session('lang')} !!} </a>
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
