<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent border-bottom border-color-white-transparent header-light fixed-top navbar-boxed header-reverse-scroll">
        <div class="container-fluid nav-header-container">
            <div class="col-auto col-sm-6 col-lg-2 me-auto ps-lg-0">
                <a class="navbar-brand" href="{{ url ('/') }}">
                    <img src="{{ Storage::url(setting()->logo) }}" data-at2x="{{ Storage::url(setting()->logo) }}" class="default-logo" alt="{{ $setting->sitename_ar }}" title="{{ $setting->sitename_ar }}">
                    <img src="{{ Storage::url(setting()->logo) }}" data-at2x="{{ Storage::url(setting()->logo) }}" class="alt-logo" alt="{{ $setting->sitename_ar }}" title="{{ $setting->sitename_ar }}">
                    <img src="{{ Storage::url(setting()->logo) }}" data-at2x="{{ Storage::url(setting()->logo) }}" class="mobile-logo" alt="{{ $setting->sitename_ar }}" title="{{ $setting->sitename_ar }}">
                </a>
            </div>
            <div class="col-auto col-lg-8 menu-order px-lg-0">
                <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                     <ul class="navbar-nav alt-font">
                        <li class="nav-item"> <a href="#" class="nav-link">الرئيسية</a></li>
                        <li class="nav-item"> <a href="{{ url ('/about') }}" class="nav-link">من نحن</a></li>
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="#services" class="nav-link">حلولنا</a>
                            <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown"><a href="javascript:void(0);">الخدمة الأولى</a></li>
                                <li class="dropdown"><a href="javascript:void(0);">الخدمة الثانية</a></li>
                                <li class="dropdown"><a href="javascript:void(0);">الخدمة الثالثة</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#domains" class="nav-link">مجالات عملنا</a></li>
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="#services" class="nav-link">المركز الإعلامي</a>
                            <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown"><a href="javascript:void(0);">الهوية</a></li>
                                <li class="dropdown"><a href="javascript:void(0);">الأخبار</a></li>
                                <li class="dropdown"><a href="javascript:void(0);">صور وفيديو</a></li>
                                <li class="dropdown"><a href="javascript:void(0);">التقرير السنوي</a></li>
                                <li class="dropdown"><a href="javascript:void(0);">بروفايل الشركة</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#customers" class="nav-link">عملاؤنا</a></li>
                        <li class="nav-item"> <a href="#suppliers" class="nav-link">بوابة الموردين</a></li>
                        <li class="nav-item"> <a href="#contact" class="nav-link">تواصل معنا</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-auto col-lg-2 text-start pe-0 font-size-0">
                <div class="header-social-icon d-inline-block">
                    @foreach($socialMedia as $item)
                        <a href="{{ $item->link }}" target="_blank"><i class="fab {{ $item->icon }}"></i></a>
                    @endforeach
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="main-content">