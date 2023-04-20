<section class="half-section overlap-height wow animate__fadeIn">
    <div class="container">
        <div class="row align-items-center overlap-gap-section">
            <div class="col-12 col-lg-5 col-md-8 order-md-2 order-lg-1 sm-margin-5-rem-bottom wow animate__fadeIn" data-wow-delay="0.1s">
                <h5 class="alt-font font-weight-600 text-dark-orange  margin-30px-bottom sm-margin-20px-bottom">سدو</h5>                        
                <p class="w-80 lg-w-100 text-extra-large">
                    {{ $setting->description_ar }}
                </p>
                <a href="about-us.html" class="btn btn-fancy btn-box-shadow btn-medium btn-neon-orange align-self-start margin-25px-top">اقرأ المزيد</a>

            </div>
            <div class="col-12 col-lg-4 order-md-1 order-lg-2 md-margin-5-rem-bottom wow animate__fadeIn" data-wow-delay="0.3s">
                <img src="{{ url ('frontend/sadu/images/s1.jpg') }}" alt="" class="border-radius-6px" />
            </div>
            <div class="col-12 col-lg-2 offset-md-1 col-md-3 order-md-3 wow animate__fadeIn" data-wow-delay="0.5s">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <div class="d-flex flex-row align-item-start margin-15px-bottom xs-margin-10px-bottom justify-content-center">
                            <span class="text-dark-golden-yellow title-extra-small font-weight-500 margin-5px-left">+</span>
                            <h4 class="vertical-counter d-inline-flex text-dark-golden-yellow alt-font appear font-weight-600  mb-0" 
                            data-to="{{ $setting->number_of_beneficiaries }}" style="direction: ltr;"></h4>
                        </div>
                        <span class="alt-font text-large d-block text-dark-golden-yellow">جهة مستفيدة</span>
                        <div class="w-100 h-1px bg-medium-gray margin-2-rem-tb xs-margin-3-rem-tb"></div>
                    </div>
                    <div class="col-12 text-center">
                        <div class="d-flex flex-row align-item-start margin-15px-bottom xs-margin-10px-bottom justify-content-center ">
                            <span class="text-dark-golden-yellow title-extra-small font-weight-500 margin-5px-left">+</span>
                            <h4 class="vertical-counter d-inline-flex text-dark-golden-yellow alt-font appear font-weight-600  mb-0 " 
                            data-to="{{ $setting->number_of_employees}}" style="direction: ltr;"></h4>
                            
                        </div>
                        <span class="alt-font text-large d-block text-dark-golden-yellow">موظف</span>
                        <div class="w-100 h-1px bg-medium-gray margin-2-rem-tb xs-margin-3-rem-tb"></div>
                    </div>
                    <div class="col-12 text-center">
                        <div class="d-flex flex-row align-item-start margin-15px-bottom xs-margin-10px-bottom justify-content-center ">
                            <span class="text-dark-golden-yellow title-extra-small font-weight-500 margin-5px-left">+</span>
                            <h4 class="vertical-counter d-inline-flex text-dark-golden-yellow alt-font appear font-weight-600 mb-0" style="direction: ltr;" 
                            data-to="{{ $setting->number_of_projects}}"></h4>
                        </div>
                        <span class="alt-font text-large d-block text-dark-golden-yellow">مشروعاً</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>