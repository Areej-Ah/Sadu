@extends('frontend.index')

@section('content')

<section class="no-padding one-half-screen position-relative">
    <div class="opacity-full bg-gradient-fast-blue-purple z-index-0"></div>
    <div class="container h-100">
        <div class="row align-items-end justify-content-center h-100">
            <div class="col-12 col-xl-6 col-lg-7 col-md-10 position-relative page-title-large text-center">
                <span class="margin-15px-bottom alt-font  text-extra-large text-white d-block">{{ trans('admin.intro') }}</span>
                <h1 class="text-white alt-font font-weight-500
                           margin-5-rem-bottom sm-margin-3-rem-bottom">{{ trans('admin.our_news') }}</h1>
                <span class="w-1px h-80px d-inline-block bg-white
                             margin-5-rem-bottom sm-margin-3-rem-bottom sm-h-50px"></span>
            </div>
        </div>
    </div>
    <video loop="" autoplay="" controls="" muted class="html-video" poster="https://via.placeholder.com/1920x1080">
        <source type="video/mp4" src="{{ url ('frontend/sadu/video/video.mp4') }}" />
    </video>
</section>


<section class="half-section padding-eleven-lr  xl-padding-two-lr xs-no-padding-lr bg-light-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 blog-content sm-no-padding-lr">
                <ul class="blog-classic blog-wrapper grid grid-loading grid-5col
                           xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-double-extra-large">
                    <li class="grid-sizer"></li>
                    @foreach($news as $new)
                        <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">
                            <div class="blog-post">
                                <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                    <a href="/new/{{ $new->id}}">
                                        <img src="{{ Storage::url($new->image) }}" alt=""/>
                                    </a>
                                </div>
                                <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                    <a href="/new/{{ $new->id}}"
                                    class="alt-font font-weight-500 text-extra-medium
                                    text-green d-block margin-20px-bottom
                                    xs-margin-10px-bottom">{{ $new->{'title_'.session('lang')} }}</a>
                                    <p class="w-95"> {{ \Illuminate\Support\Str::limit(strip_tags($new->{'text_'.session('lang')}), 70) }} </p>
                                    <span class="separator bg-gradient-fast-blue-purple"></span>
                                    <a href="/new/{{ $new->id}}" class="alt-font font-weight-500
                                                                              text-extra-small text-uppercase
                                                                              text-green">
                                                                              {{ trans('admin.read_more') }}
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
