<!-- Header -->
<header id="header" class="header-fullwidth">
    <div id="header-wrap">
        <div class="container">
            <!--Logo-->
            <div id="logo">
                <a href="{{ url ('/') }}" class="logo" data-dark-logo="{{ Storage::url(setting()->logo) }}">
                    <img src="{{ Storage::url(setting()->logo) }}" alt="Polo Logo">
                </a>
            </div>
            <!--End: Logo-->

            <!--Top Search Form-->
            <div id="top-search">
                <form action="search-results-page.html" method="get">
                    <input type="text" name="q" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;">
                </form>
            </div>
            <!--end: Top Search Form-->

            <!--Header Extras-->
            <div class="header-extras">
                <ul>
                    <li>
                        <!--top search-->
                        <a id="top-search-trigger" href="#" class="toggle-item">
                            <i class="fa fa-search"></i>
                            <i class="fa fa-close"></i>
                        </a>
                        <!--end: top search-->
                    </li>
                    <li class="hidden-xs">
                        <!--shopping cart-->
                        <div id="shopping-cart">
                            <a href="shop-cart.html">
                                <span class="shopping-cart-items">8</span>

                                <i class="fa fa-shopping-cart"></i></a>
                        </div>
                        <!--end: shopping cart-->
                    </li>
                    <li>
                        <div class="topbar-dropdown">
                            <a class="title"><i class="fa fa-globe"></i></a>
                            <div class="dropdown-list">
                                <a class="list-entry" href="#">French</a>
                                <a class="list-entry" href="#">Spanish</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!--end: Header Extras-->

            <!--Navigation Resposnive Trigger-->
            <div id="mainMenu-trigger">
                <button class="lines-button x"> <span class="lines"></span> </button>
            </div>
            <!--end: Navigation Resposnive Trigger-->

            <!--Navigation-->
            <div id="mainMenu" class="light">
                <div class="container">
                    <nav>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="dropdown"> <a href="#">Features</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu"><a href="#"><i class="fa fa-heart"></i>Headers</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="header.html">Light</a></li>
                                            <li><a href="header-dark.html">Dark</a></li>
                                            <li><a href="header-transparent.html">Transparent</a></li>
                                            <li class="dropdown-submenu"><a href="#">Semi Transparent</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header-light-transparent.html">Light</a></li>
                                                    <li><a href="header-dark-transparent.html">Dark</a></li>
                                                    <li><a href="header-colored-transparent.html">Colored</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="header-colored.html">Colored</a></li>
                                            <li><a href="header-fullwidth.html">Fullwidth</a></li>
                                            <li class="dropdown-submenu"><a href="#">Modern</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header-modern.html">Light</a></li>
                                                    <li><a href="header-modern-dark.html">Dark</a></li>
                                                    <li><a href="header-modern-transparent.html">Transparent</a></li>
                                                    <li><a href="header-modern-colored.html">Colored</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="header-mini.html">Mini</a></li>
                                            <li><a href="header-static.html">Static</a></li>
                                            <li><a href="header-no-sticky.html">No Sticky</a></li>
                                            <li><a href="header-sticky-responsive.html">Sticky Responsive</a></li>
                                            <li class="dropdown-submenu"><a href="#">Logo Positions</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header-logo.html">Left</a></li>
                                                    <li><a href="header-logo-right.html">Right</a></li>
                                                    <li><a href="header-logo-center.html">Center</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Menu Positions</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header-menu-left.html">Left</a></li>
                                                    <li><a href="header-menu-right.html">Right</a></li>
                                                    <li><a href="header-menu-center.html">Center</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Topbar</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header-topbar.html">Light</a></li>
                                                    <li><a href="header-topbar-dark.html">Dark</a></li>
                                                    <li><a href="header-topbar-transparent.html">Transparent</a></li>
                                                    <li><a href="header-topbar-colored.html">Colored</a></li>
                                                    <li><a href="header-topbar-fullwidth.html">Fullwidth</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="header-under.html">Under Slider</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#"><i class="fa fa-navicon"></i>Main Menu<span class="label label-danger">NEW</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="menu.html">Default</a></li>
                                            <li><a href="menu-split.html">Split Menu</a></li>
                                            <li><a href="menu-sub-title.html">Sub Title Menu</a></li>
                                            <li><a href="menu-slide.html">Slide Menu</a></li>
                                            <li><a href="menu-overlay.html">Overlay Menu</a></li>
                                            <li><a href="menu-creative.html">Creative Menu</a></li>
                                            <li><a href="menu-lines.html">Lines Menu</a></li>
                                            <li class="dropdown-submenu"><a href="#">Outline</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="menu-outline.html">Default</a></li>
                                                    <li><a href="menu-outline-dark.html">Dark</a></li>
                                                    <li><a href="menu-outline-light.html">Light</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Rounded</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="menu-rounded.html">Default</a></li>
                                                    <li><a href="menu-rounded-dark.html">Dark</a></li>
                                                    <li><a href="menu-rounded-light.html">Light</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Positions</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="menu-left.html">Left Aligned</a></li>
                                                    <li><a href="menu-center.html">Center Aligned</a></li>
                                                    <li><a href="menu-right.html">Right Aligned</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="menu-dots.html">Dots Menu</a></li>
                                            <li><a href="menu-one-page.html">One Page Menu</a></li>
                                            <li><a href="menu-hover-background.html">Hover Background</a></li>
                                            <li><a href="menu-button.html">Button Version</a></li>
                                            <li><a href="menu-social-icons.html">Social Icons Version</a></li>
                                            <li><a href="menu-onclick.html">OnClick Open</a></li>
                                            <li><a href="menu-rounded-dropdown.html">Rounded Dropdown</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#"><i class="fa fa-sliders"></i>Sliders</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="slider-revolution-slider.html">Revolution Slider</a></li>
                                            <li><a href="slider-owl-slider.html">OWL Slider</a></li>
                                            <li><a href="slider-static-media-image.html">Fullscreen Image</a></li>
                                            <li><a href="slider-static-media-parallax.html">Fullscreen Parallax</a></li>
                                            <li><a href="slider-static-media-text-rotator.html" class="current">Fullscreen Text Rotator</a></li>
                                            <li><a href="slider-static-media-video.html">Fullscreen HTML5 Video</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#"><i class="fa fa-star"></i>Page title</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-title-classic.html">Classic version</a></li>
                                            <li><a href="page-title.html">Image background</a> </li>
                                            <li><a href="page-title-video.html">Video background</a> </li>
                                            <li><a href="page-title-pattern.html">Pattern background</a> </li>
                                            <li><a href="page-title-background-color.html">Colored background</a> </li>
                                            <li><a href="page-title-default-header.html">Default header</a></li>
                                            <li><a href="page-title-animated.html">Animated</a></li>
                                            <li><a href="page-title-center.html">Center Aligned</a></li>
                                            <li><a href="page-title-right.html">Right Aligned</a></li>
                                            <li><a href="page-title.html">Left Aligned</a></li>


                                            <!--<li><a href="page-title-small.html">Small version</a> </li>-->
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#"><i class="fa fa-align-left"></i>Page Menu<span class="label label-danger">NEW</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-menu.html">Rounded</a> </li>
                                            <li><a href="page-menu-outline.html">Outline</a> </li>
                                            <li><a href="page-menu-lines.html">Lines</a> </li>
                                            <li><a href="page-menu-classic.html">Classic</a> </li>
                                            <li><a href="page-menu-line-bottom.html">Line Bottom</a> </li>
                                            <li><a href="page-menu-light.html">Light</a> </li>
                                            <li><a href="page-menu-dark.html">Dark</a> </li>
                                            <li><a href="page-menu-creative.html">Creative</a> </li>
                                            <li><a href="page-menu-colored-background.html">Colored Background</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#"><i class="fa fa-columns"></i>Side Panel</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="side-panel.html">Push</a> </li>
                                            <li><a href="side-panel-reval.html">Reval</a></li>
                                            <li><a href="side-panel-slide-in.html">Slide In</a></li>
                                            <li><a href="side-panel-static.html">Static</a></li>
                                            <li><a href="side-panel-dark.html">Dark version</a></li>
                                            <li><a href="side-panel-right.html">Push Right</a> </li>
                                            <li><a href="side-panel-reval-right.html">Reval Right</a></li>
                                            <li><a href="side-panel-slide-in-right.html">Slide In Right</a></li>
                                            <li><a href="side-panel-static-right.html">Static Right</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="widgets.html"><i class="fa fa-th"></i>Widgets </a></li>
                                    <li class="dropdown-submenu"><a href="#"><i class="fa fa-th-list"></i>Sidebars</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="sidebar.html">Left aligned</a> </li>
                                            <li><a href="sidebar-right.html">Right aligned</a> </li>
                                            <li><a href="sidebar-both.html">Both Sidebars</a> </li>
                                            <li><a href="sidebar-modern.html">Modern</a> </li>
                                            <li><a href="sidebar-modern-right.html">Modern Right</a> </li>
                                            <li><a href="sidebar-modern-both.html">Modern Both Sidebars</a> </li>

                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="fa fa-window-minimize"></i>Footers</a></li>
                                    <li><a href="page-loaders.html"><i class="fa fa-spinner"></i>Page Loaders<span class="label label-danger">NEW</span></a></li>
                                    <li class="dropdown-submenu"><a href="#"><i class="fa fa-expand"></i>Modal Auto Open<span class="label label-danger">NEW</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="modal-auto-open.html">Sample Text</a></li>
                                            <li><a href="modal-auto-open-newsletter.html">Newsletter</a></li>
                                            <li><a href="modal-auto-open-shop.html">Shop Sale</a></li>
                                            <li><a href="modal-auto-open-login.html">Login Form</a></li>
                                            <li><a href="modal-auto-open-audio.html">Audio</a></li>
                                            <li><a href="modal-auto-open-video.html">HTML5 Video</a></li>
                                            <li><a href="modal-auto-open-youtube.html">YouTube</a></li>
                                            <li><a href="modal-auto-open-vimeo.html">Vimeo</a></li>
                                            <li><a href="modal-auto-open-iframe.html">Iframe</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#"><i class="fa fa-bullhorn"></i>Cookie Notify<span class="label label-danger">NEW</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="cookie-notify.html">Top position</a> </li>
                                            <li><a href="cookie-notify-bottom.html">Bottom position</a> </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#"><i class="fa fa-tags"></i>Menu Labels</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Label (new)<span class="label label-default">NEW</span></a> </li>
                                            <li><a href="#">Label (hot)<span class="label label-danger">HOT</span></a> </li>
                                            <li><a href="#">Label (popular)<span class="label label-success">POPULAR</span></a> </li>
                                            <li><a href="#">Label (sale)<span class="label label-warning">SALE</span></a> </li>
                                            <li><a href="#">Label (info)<span class="label label-info">INFO</span></a> </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown mega-menu-item"> <a href="#">Elements</a>
                                <ul class="dropdown-menu" style="background-image: url('images/shortcode-megamenu-bg.png');">
                                    <li class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <ul>
                                                    <li>
                                                        <a href="shortcode-according.html"> <i class="fa fa-list-ul"></i>Accordions</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-alerts.html"> <i class="fa fa-exclamation-circle"></i>Alerts</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-animations.html"> <i class="fa fa-magic"></i>Animations</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-audio-video.html"> <i class="fa fa-play-circle"></i> Audio & Video</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-blockquotes.html"> <i class="fa fa-quote-right"></i>Blockquotes</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-breadcrumbs.html"> <i class="fa fa-angle-double-right"></i>Breadcrumbs</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-buttons.html"> <i class="fa fa-external-link"></i>Buttons<span class="label label-default">NEW</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-client-logo.html"> <i class="fa fa-diamond"></i>Clients logos</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2">
                                                <ul>
                                                    <li>
                                                        <a href="shortcode-calltoaction.html"> <i class="fa fa-plus-square"></i>Call to action</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-carousel.html"> <i class="fa fa-exchange"></i>Carousel Sliders</a>
                                                    </li>

                                                    <li>
                                                        <a href="shortcode-code.html"> <i class="fa fa-code"></i>Code</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-countdown-timer.html"> <i class="fa fa-clock-o"></i>Countdown Timers</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-counters.html"> <i class="fa fa-sort-numeric-desc"></i>Counter Numbers</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-dropcat-highlight.html"> <i class="fa fa-bold"></i>Dropcat & Highlight</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-team-members.html"> <i class="fa fa-users"></i>Team members</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-forms.html"> <i class="fa fa-align-justify"></i>Forms</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2">
                                                <ul>
                                                    <li>
                                                        <a href="shortcode-grid.html"> <i class="fa fa-th"></i>Grid System</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-icon-boxes.html"> <i class="fa fa-bullseye"></i>Icon Boxes</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-icon-lists.html"> <i class="fa fa-flag"></i>Icon Lists</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-images.html"> <i class="fa fa-photo"></i>Images</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-labels-badgets.html"> <i class="fa fa-check-square"></i>Labels and Badges</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-lightbox.html"> <i class="fa fa-arrows-alt"></i>Lightbox</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-lists.html"> <i class="fa fa-th-list"></i>Lists & Bullet lists</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-maps.html"> <i class="fa fa-compass"></i>Maps</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2">
                                                <ul>
                                                    <li>
                                                        <a href="shortcode-modal.html"> <i class="fa fa-search-plus"></i>Modal</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-modal-strip-top.html"> <i class="fa fa-flash"></i>Modal Strip<span class="label label-danger">NEW</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-navs.html"> <i class="fa fa-bars"></i>Navbar & Navs</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-paginations.html"> <i class="fa fa-arrow-circle-right"></i>Pagination & Pager</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-panels.html"> <i class="fa fa-list-alt"></i>Panels</a>
                                                    </li>
                                                    <li> <a href="shortcode-pie-chart.html"><i class="fa fa-pie-chart"></i>Pie charts</a> </li>
                                                    <li> <a href="shortcode-popover-tooltip.html"><i class="fa fa-lightbulb-o"></i>Popover & tooltips</a> </li>
                                                    <li> <a href="shortcode-pricing-table.html"><i class="fa fa-dollar"></i>Pricing tables</a> </li>
                                                    <li>
                                                        <a href="shortcode-progress-bar.html"> <i class="fa fa-align-left"></i>Progress bars</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2">
                                                <ul>
                                                    <li>
                                                        <a href="shortcode-parallax.html"> <i class="fa fa-gift"></i>Parallax</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-responsive-utilities.html"> <i class="fa fa-laptop"></i>Responsive utilities</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-sections.html"> <i class="fa fa-bookmark"></i>Sections</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-separators.html"> <i class="fa fa-minus"></i>Separators</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-smooth-scrolling.html"> <i class="fa fa-anchor"></i>Smooth Scrolling</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-social-icons.html"> <i class="fa fa-facebook-official"></i>Social Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-textbox.html"> <i class="fa fa-star"></i>Text Boxes<span class="label label-danger">NEW</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-tables.html"> <i class="fa fa-table"></i>Tables</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-tabs.html"> <i class="fa fa-indent"></i>Tabs</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2">
                                                <ul>
                                                    <li>
                                                        <a href="shortcode-testimonial.html"> <i class="fa fa-question-circle"></i>Testimonials<span class="label label-danger">NEW</span></a>
                                                    </li>

                                                    <li>
                                                        <a href="shortcode-toggles.html"> <i class="fa fa-toggle-on"></i>Toggles</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-typography.html"> <i class="fa fa-font"></i>Typography</a>
                                                    </li>
                                                    <li>
                                                        <a href="shortcode-text-rotator.html"> <i class="fa fa-random"></i>Text Rotator<span class="label label-default">NEW</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"> <a href="#">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About us</span>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-about-basic.html">Basic</a> </li>
                                            <li><a href="page-about-extended.html">Extended</a> </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About me</span>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-about-me-creative.html">Creative<span class="label label-default">NEW</span></a></li>

                                            <li><a href="page-about-me-basic.html">Basic</a></li>

                                            <li><a href="page-about-me-extended.html">Extended</a> </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Contact us</span>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-contact-classic.html">Classic</a> </li>
                                            <li><a href="page-contact-fullwidth-map.html">Fullwidth Map</a> </li>
                                            <li><a href="page-contact-fullscreen-map.html">Fullscreen Map</a> </li>
                                            <li><a href="page-contact-map-bottom.html">Map bottom</a> </li>
                                            <li><a href="page-contact-sidebar-left.html">Sidebar Left</a> </li>
                                            <li><a href="page-contact-sidebar-right.html">Sidebar Right</a> </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Gallery</span>
                                        <ul class="dropdown-menu">
                                            <li> <a href="page-gallery-2.html">Two Columns</a> </li>
                                            <li> <a href="page-gallery-3.html">Three Columns</a> </li>
                                            <li> <a href="page-gallery-4.html">Four Columns</a> </li>
                                            <li> <a href="page-gallery-5.html">Five Columns</a> </li>
                                            <li> <a href="page-gallery-6.html">Six Columns</a> </li>
                                            <li> <a href="page-gallery-sidebar.html">Sidebar version</a> </li>
                                            <li> <a href="page-gallery-wide.html">Wide version</a> </li>
                                            <li> <a href="page-gallery-load-more.html">Load more</a> </li>
                                            <li> <a href="page-gallery-infinite-scroll.html">Infinity Scroll</a> </li>
                                            <!--<li> <a href="page-gallery-gallery-albums.html">Gallery Albums</a> </li>-->
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><span class="dropdown-menu-title-only">User pages</span>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-user-login.html">Login</a> </li>
                                            <li><a href="page-user-login-classic.html">Login - Classic</a> </li>
                                            <li><a href="page-user-register.html">Register</a> </li>
                                            <li><a href="page-user-register-classic.html">Register - Classic</a> </li>
                                            <li><a href="page-user-password-recovery.html">Recovery Password</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href="page-services.html">Services</a> </li>
                                    <li> <a href="page-our-team.html">Our team</a> </li>
                                    <li> <a href="page-our-clients.html">Our clients</a> </li>
                                    <li> <a href="page-maintenance.html">Maintenance</a> </li>
                                    <li> <a href="page-404.html">404 Page</a> </li>
                                    <li> <a href="page-404-parallax.html">404 Page - Parallax</a> </li>
                                    <li> <a href="page-500.html">500 Page</a> </li>
                                    <li> <a href="page-fullwidth.html">Fullwidth page</a> </li>
                                    <li> <a href="page-fullwidth-wide.html">Fullwidth page - Wide</a> </li>
                                    <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Page with Sidebar</span>
                                        <ul class="dropdown-menu">
                                            <li> <a href="page-sidebar.html">Sidebar Left</a> </li>
                                            <li> <a href="page-sidebar-right.html">Sidebar Right</a> </li>
                                            <li> <a href="page-sidebar-both.html">Sidebar Both</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href="page-site-map.html">Site Map</a> </li>
                                    <li> <a href="page-faq.html">FAQ</a> </li>
                                </ul>
                            </li>
                            <li class="dropdown mega-menu-item"> <a href="#">Portfolio</a>
                                <ul class="dropdown-menu">
                                    <li class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-md-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Grids</li>
                                                    <li> <a href="portfolio-2.html">Two Columns</a> </li>
                                                    <li> <a href="portfolio-3.html">Three Columns</a> </li>
                                                    <li> <a href="portfolio-4.html">Four Columns</a> </li>
                                                    <li> <a href="portfolio-5.html">Five Columns</a> </li>
                                                    <li> <a href="portfolio-6.html">Six Columns</a> </li>
                                                    <li> <a href="portfolio-sidebar.html">Sidebar version</a> </li>
                                                    <li> <a href="portfolio-wide-3.html">Wide version</a> </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Masonry</li>
                                                    <li> <a href="portfolio-masonry-2.html">Two Columns</a> </li>
                                                    <li> <a href="portfolio-masonry-3.html">Three Columns<span class="label label-danger">HOT</span></a> </li>
                                                    <li> <a href="portfolio-masonry-4.html">Four Columns</a> </li>
                                                    <li> <a href="portfolio-masonry-5.html">Five Columns</a> </li>
                                                    <li> <a href="portfolio-masonry-6.html">Six Columns</a> </li>
                                                    <li> <a href="portfolio-masonry-sidebar.html">Sidebar version</a> </li>
                                                    <li> <a href="portfolio-masonry-wide-3.html">Wide version</a> </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Styles</li>
                                                    <li> <a href="portfolio-filter-styles.html">Filter Styles</a> </li>
                                                    <li> <a href="portfolio-load-more.html">Load more</a> </li>
                                                    <li> <a href="portfolio-load-more-sidebar.html">Load more - Sidebar</a> </li>
                                                    <li> <a href="portfolio-infinite-scroll.html">Infinity Scroll</a> </li>
                                                    <li> <a href="portfolio-ajax.html">Portfolio Ajax</a> </li>
                                                    <li> <a href="portfolio-gallery-modal.html">Gallery Modal</a> </li>
                                                    <li> <a href="portfolio-video-modal.html">Video Modal</a> </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Layouts</li>
                                                    <li> <a href="portfolio-sidebar-left.html">Left Sidebar</a> </li>
                                                    <li> <a href="portfolio-sidebar-right.html">Right Sidebar</a> </li>
                                                    <li> <a href="portfolio-sidebar-both.html">Both Sidebars</a> </li>
                                                    <li> <a href="portfolio-slider-3.html">Slider Default</a> </li>
                                                    <li> <a href="portfolio-no-page-title.html">No Page Title</a> </li>
                                                    <li> <a href="portfolio-no-page-title-sidebar.html">No Page Title - Sidebar</a> </li>
                                                    <li> <a href="portfolio-hover-styles.html">Hover Styles</a> </li>

                                                </ul>
                                            </div>
                                            <div class="col-md-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Single Project</li>
                                                    <li> <a href="portfolio-page-grid-gallery.html">Grid Gallery</a> </li>
                                                    <li> <a href="portfolio-page-particles.html">Particles Wide Project</a> </li>
                                                    <li> <a href="portfolio-page-floating-sidebar.html">Floating Sidebar</a> </li>
                                                    <li> <a href="portfolio-page-slider.html">Slider version</a> </li>
                                                    <li> <a href="portfolio-page-background-image.html">Fullscreen image</a> </li>
                                                    <li> <a href="portfolio-page-background-video.html">Fullscreen Video</a> </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12 m-t-40 m-b-10">
                                                <div class="visible-lg visible-md">
                                                    <div class="col-md-9 m-t-10 no-padding">
                                                        <div class="text-center center">
                                                            <div class="heading-creative"><strong>20+</strong> Amazing Hover Styles</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <a href="portfolio-hover-styles.html" class="btn m-l-20 btn-light btn-shadow btn-light-hover btn-light-hover">View All Hover Styles</a>
                                                    </div>
                                                </div>

                                                <ul class="hidden-lg hidden-md">
                                                    <li> <a href="portfolio-hover-styles.html">20+ Amazing Hover Styles</a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li> <li class="dropdown mega-menu-item"> <a href="#">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-md-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Masonry</li>
                                                    <li> <a href="blog-masonry-2.html">Two Columns</a> </li>
                                                    <li> <a href="blog-masonry-3.html">Three Columns<span class="label label-danger">HOT</span></a> </li>
                                                    <li> <a href="blog-masonry-4.html">Four Columns</a> </li>
                                                    <li> <a href="blog-masonry-sidebar.html">Sidebar version</a> </li>
                                                    <li> <a href="blog-masonry-no-page-title.html">No page title</a> </li>
                                                    <li> <a href="blog-masonry-wide.html">Wide version</a> </li>
                                                    <li> <a href="blog-masonry-load-more.html">Load More</a> </li>
                                                    <li> <a href="blog-masonry-infinite-scroll.html">Infinite Scroll</a> </li>
                                                    <li> <a href="blog-masonry-filter.html">Filter Categories</a> </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Grids Layout</li>
                                                    <li> <a href="blog-1.html">One Column</a> </li>
                                                    <li> <a href="blog-2.html">Two Columns</a> </li>
                                                    <li> <a href="blog-3.html">Three Columns</a> </li>
                                                    <li> <a href="blog-4.html">Four Columns</a> </li>
                                                    <li> <a href="blog-no-page-title.html">No page title</a> </li>
                                                    <li> <a href="blog-wide.html">Wide version</a> </li>
                                                    <li> <a href="blog-load-more.html">Load More</a> </li>
                                                    <li> <a href="blog-infinite-scroll.html">Infinite Scroll</a> </li>
                                                    <li> <a href="blog-filter.html">Filter Categories</a> </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Left Image</li>
                                                    <li> <a href="blog-left-image-sidebar-right.html">Right Sidebar</a> </li>
                                                    <li> <a href="blog-left-image-sidebar-left.html">Left Sidebar</a> </li>
                                                    <li> <a href="blog-left-image-sidebar-both.html">Both Sidebars</a> </li>
                                                    <li> <a href="blog-left-image-no-sidebar.html">No Sidebar</a> </li>
                                                    <li> <a href="blog-left-image-no-page-title.html">No page title</a> </li>
                                                    <li> <a href="blog-left-image-load-more.html">Load More</a> </li>
                                                    <li> <a href="blog-left-image-infinite-scroll.html">Infinite Scroll</a> </li>
                                                    <li> <a href="blog-left-image-author-info.html">Author Info</a> </li>
                                                    <li> <a href="blog-left-image-filter.html">Filter Categories</a> </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Layouts</li>
                                                    <li> <a href="blog-sidebar-left.html">Left Sidebar</a> </li>
                                                    <li> <a href="blog-sidebar-right.html">Right Sidebar</a> </li>
                                                    <li> <a href="blog-sidebar-both.html">Both Sidebars</a> </li>
                                                    <li> <a href="blog-fullwidth.html">Fullwidth</a> </li>
                                                    <li class="mega-menu-title">Post Item Styles</li>
                                                    <li><a href="blog-style-shadow.html">Shadow</a></li>
                                                    <li><a href="blog-style-textual.html">Textual</a></li>
                                                    <li><a href="blog-style-grey-bg.html">Grey Background</a></li>
                                                    <li><a href="blog-style-author-info.html">Author Info</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Single Post</li>
                                                    <li> <a href="blog-single.html">Default</a> </li>
                                                    <li> <a href="blog-single-slider.html">Slider</a> </li>
                                                    <li> <a href="blog-single-video.html">Video</a> </li>
                                                    <li> <a href="blog-single-audio.html">Audio</a> </li>
                                                    <li> <a href="blog-single-creative.html">Creative</a> </li>
                                                    <li class="mega-menu-title">Comments<span class="label label-danger">NEW</span></li>
                                                    <li> <a href="blog-comments.html#comments">Default Comments</a> </li>
                                                    <li> <a href="blog-comments-disqus.html#comments">Disqus Comments</a> </li>
                                                    <li> <a href="blog-comments-facebook.html#comments">Facebook Comments</a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown mega-menu-item"> <a href="#">Shop</a>
                                <ul class="dropdown-menu">
                                    <li class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-md-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Columns</li>
                                                    <li> <a href="shop-columns-2.html">Two Columns</a> </li>
                                                    <li> <a href="shop-columns-3.html">Three Columns</a> </li>
                                                    <li> <a href="shop-columns-4.html">Four Columns</a> </li>
                                                    <li> <a href="shop-columns-5.html">Five Columns</a> </li>
                                                    <li> <a href="shop-columns-6.html">Six Columns</a> </li>
                                                    <li> <a href="shop-sidebar-sticky.html">Sidebar Sticky</a> </li>
                                                    <li> <a href="shop-wide.html">Wide version</a> </li>
                                                    <li> <a href="shop-no-page-title.html">No page title</a> </li>

                                                </ul>
                                            </div>
                                            <div class="col-md-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Layouts</li>
                                                    <li> <a href="shop-sidebar-left.html">Left Sidebar</a> </li>
                                                    <li> <a href="shop-sidebar-right.html">Right Sidebar</a> </li>
                                                    <li> <a href="shop-sidebar-both.html">Both Sidebars</a> </li>
                                                    <li> <a href="shop-fullwidth.html">Fullwidth (Wide)</a> </li>
                                                    <li class="mega-menu-title">Loading Styles</li>

                                                    <li> <a href="shop-load-more.html">Load more</a>
                                                        <a href="shop-load-more-sidebar.html">Load Sidebar</a> </li>

                                                    <li> <a href="shop-infinite-scroll.html">Infinity Scroll</a> </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Order process</li>
                                                    <li> <a class="animsition-link" href="shop-cart.html">Shoping Cart</a> </li>
                                                    <li> <a class="animsition-link" href="shop-cart-empty.html">Shoping Cart - Empty</a> </li>
                                                    <li> <a class="animsition-link" href="shop-checkout.html">Checkout</a> </li>
                                                    <li> <a class="animsition-link" href="shop-checkout-completed.html">Checkout Completed</a> </li>
                                                    <li> <a href="shop-wishlist.html">Wishlist</a> </li>
                                                    <li> <a href="shop-wishlist-empty.html">Wishlist Empty</a> </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Single Product</li>
                                                    <li> <a href="shop-single-product.html">Fullwidth</a> </li>
                                                    <li> <a href="shop-single-product-sidebar-left.html">Left Sidebar</a> </li>
                                                    <li> <a href="shop-single-product-sidebar-right.html">Right Sidebar</a> </li>
                                                    <li> <a href="shop-single-product-sidebar-both.html">Both Sidebars</a> </li>
                                                </ul>
                                            </div>
<div class="col-md-2-5 p-l-0">

                                <h4 class="text-green">BIG SALE <small>Up to</small></h4>

                                <h2 class="text-large text-green lh80 m-b-30">70%</h2>
                                <p class="m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis ipsum dolor sit amet lacinia faucibus.</p>

                                <a class="btn btn-shadow btn-rounded btn-block">SHOP NOW!</a><small class="t300"><p class="text-center m-0"><em>* Limited time Offer</em></p></small>
                  
</div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--end: Navigation-->
        </div>
    </div>
</header>
<!-- end: Header -->
