<section id="customers" class="padding-100px-tb md-padding-75px-tb sm-padding-40px-tb wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-4 col-lg-5
                        col-md-7 col-sm-9
                        text-center
                        last-paragraph-no-margin
                        margin-5-rem-bottom
                        md-margin-3-rem-bottom
                        wow animate__fadeIn">
                <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-20px-bottom sm-margin-10px-bottom">
                    عملاؤنا
                </h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="swiper-container text-center"
                    data-slider-options='{ "slidesPerView": 1, "loop": true,
                    "navigation": { "nextEl": ".swiper-button-next-nav",
                    "prevEl": ".swiper-button-previous-nav" },
                    "autoplay": { "delay": 1500, "disableOnInteraction": false },
                    "keyboard": { "enabled": true, "onlyInViewport": true },
                    "breakpoints": { "1200": { "slidesPerView": 8 },
                    "992": { "slidesPerView": 3 },
                     "768": { "slidesPerView": 3 } } }'
                    >
                    <div class="swiper-wrapper">
                        @foreach($customers as $customer)
                            <div class="swiper-slide"><a href="#" target="_blank">
                                <img alt="{{ $customer->name_ar}}" src="{{ Storage::url($customer->logo) }}"></a>
                            </div>
                        @endforeach      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>