<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent border-bottom
                border-color-white-transparent header-light fixed-top navbar-boxed header-reverse-scroll">
        <div class="container-fluid nav-header-container">
            <div class="col-auto col-sm-6 col-lg-2 me-auto ps-lg-0">
                <a class="navbar-brand" href="{{ url ('/') }}">
                    <img src="{{ Storage::url(setting()->logo) }}"
                         data-at2x="{{ Storage::url(setting()->logo) }}"
                         class="default-logo" alt="{{ $setting->sitename_ar }}"
                         title="{{ $setting->sitename_ar }}">
                    <img src="{{ Storage::url(setting()->logo) }}"
                         data-at2x="{{ Storage::url(setting()->logo2) }}"
                         class="alt-logo" alt="{{ $setting->sitename_ar }}"
                         title="{{ $setting->sitename_ar }}">
                    <img src="{{ Storage::url(setting()->logo2) }}"
                         data-at2x="{{ Storage::url(setting()->logo2) }}"
                         class="mobile-logo" alt="{{ $setting->sitename_ar }}"
                         title="{{ $setting->sitename_ar }}">
                </a>
            </div>
            <div class="col-auto col-lg-8 menu-order px-lg-0">
                <button class="navbar-toggler float-end" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                     <ul class="navbar-nav alt-font">
                        <li class="nav-item"> <a href="{{ url ('/') }}" class="nav-link">{{ trans('admin.home') }}</a></li>
                        <li class="nav-item"> <a href="{{ url ('/about') }}" class="nav-link">{{ trans('admin.about') }}</a></li>
                        <li class="nav-item"> <a href="{{ url ('/services') }}" class="nav-link">{{ trans('admin.our_areas_of_works') }}</a></li>
                        <li class="nav-item dropdown simple-dropdown">

                            <a href="#services" class="nav-link">{{ trans('admin.media_center') }}</a>
                            <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>

                            <ul class="dropdown-menu" role="menu">
                                {{--<li class="dropdown"><a href="javascript:void(0);">{{ trans('admin.identity') }}</a></li> --}}
                                <li class="dropdown"><a href="{{ url ('/news') }}">{{ trans('admin.news') }}</a></li>
                                <li class="dropdown"><a href="javascript:void(0);">{{ trans('admin.img_vid') }}</a></li>
                               {{-- <li class="dropdown"><a href="javascript:void(0);">{{ trans('admin.annual_report') }}</a></li> --}}
                                <li class="dropdown"><a href="javascript:void(0);">{{ trans('admin.company_profile') }}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="{{ url ('/clients') }}" class="nav-link">{{ trans('admin.clients') }}</a></li>
                       {{-- <li class="nav-item"> <a href="#suppliers" class="nav-link">{{ trans('admin.suppliers_gate') }}</a></li> --}}
                        <li class="nav-item"> <a href="{{ url ('/jobs') }}" class="nav-link">{{ trans('admin.employment') }}</a></li>
                        <li class="nav-item"> <a href="{{ url ('/contact') }}" class="nav-link">{{ trans('admin.contact_us') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-auto col-lg-2 text-start pe-0 font-size-0">
                <div class="header-social-icon d-inline-block">
                    @foreach($socialMedia as $item)
                        <a href="{{ $item->link }}" target="_blank"><i class="fab {{ $item->icon }}"></i></a>
                    @endforeach
                </div>
                <div class="header-language dropdown d-lg-inline-block">
                    <a href="javascript:void(0);"><i class="feather icon-feather-globe"></i></a>
                    <ul class="dropdown-menu alt-font">
                        <li><a href="{{ url('lang/en')}}" title="English">
                            <span class="icon-country">
                                <img src="{{ url ('frontend/sadu/images/country-flag-16X16/usa.png') }}" alt="">
                            </span>English</a>
                        </li>
                        <li><a href="{{ url('lang/ar')}}" title="Arabic">
                            <span class="icon-country">
                                <img src="{{ url ('frontend/sadu/images/country-flag-16X16/Saudi Arabia.png') }}" alt="">
                            </span>عربي</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="main-content">
