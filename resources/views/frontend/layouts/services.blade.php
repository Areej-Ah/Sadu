<section class="half-section bg-light-blue">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-4 col-lg-5 col-md-7 col-sm-9 text-center
                        last-paragraph-no-margin margin-5-rem-bottom md-margin-3-rem-bottom wow animate__fadeIn">
                <h5 class="alt-font font-weight-600 text-extra-dark-gray  margin-20px-bottom sm-margin-10px-bottom">
                {{ trans('admin.our_areas_of_works') }}
                </h5>
                <span> {{ trans('admin.services_intro') }} <br/> {{ trans('admin.quality') }} </span>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 wow animate__fadeIn">
                <div class="swiper-container white-move"
                     data-slider-options='{"loop": true, "slidesPerView": 1, "spaceBetween": 30,
                                           "autoplay": { "delay": 3500, "disableOnInteraction": false },
                                           "keyboard": { "enabled": true, "onlyInViewport": true },
                                           "breakpoints": { "1200": { "slidesPerView": 4 },
                                           "992": { "slidesPerView": 3 },
                                           "768": { "slidesPerView": 2 } } }'>
                    <div class="swiper-wrapper">
                        @foreach($services as $service)
                            <div class="swiper-slide interactive-banners-style-07">
                                <div class="interactive-banners-box bg-dark-slate-blue">
                                    <div class="interactive-banners-box-image">
                                        <img src="{{ Storage::url($service->icon) }}" alt=""/>
                                        <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                    </div>
                                    <div class="fancy-text-content padding-55px-lr
                                                md-padding-55px-lr xs-padding-30px-lr">
                                        <div class="alt-font font-weight-600 text-extra-large
                                                    text-white margin-10px-bottom w-80 xl-w-90
                                                    lg-w-80 md-w-90 sm-w-60 xs-w-100">
                                                    {{ $service->{'name_'.session('lang')} }}
                                        </div>
                                        <a href="/service/{{ $service->id}}"
                                           class="btn btn-fancy btn-small btn-white
                                                  margin-15px-top btn-round-edge-small"> {{ trans('admin.read_more') }} </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
