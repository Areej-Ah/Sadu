<section class="wow animate__fadeIn half-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 text-center margin-4-rem-bottom sm-margin-3-rem-bottom">
                <span class="alt-font font-weight-500 text-extra-dark-gray
                            d-block margin-5px-bottom ">{{ trans('admin.news_intro') }}</span>
                <h6 class="alt-font font-weight-600 text-extra-dark-gray">{{ trans('admin.media_center') }}</h6>
            </div>
        </div>
        <div class="row" style="flex-direction:row;">
            <div class="col-12 col-lg-8 blog-content padding-50px-right
                        d-flex flex-wrap align-items-start md-padding-15px-right
                            md-margin-70px-bottom sm-margin-50px-bottom">
                <div class="col-12 blog-post-content bg-white border-all border-color-medium-gray p-0 text-center">
                    <div class="blog-image">
                        <a href="">
                            <img src="{{ url ('frontend/sadu/images/twitter.jpg') }}" alt=""/>
                        </a></div>
                    <div class="blog-text d-inline-block w-100">
                        <div class="content padding-3-rem-all lg-padding-4-half-rem-all xs-padding-20px-lr xs-padding-40px-tb position-relative mx-auto  lg-w-100">
                            <div class="blog-details-overlap text-small font-weight-500 bg-dark-orange alt-font text-white "><a href="blog-classic.html" class="text-white">{{ trans('admin.latest_tweets') }}</a></div>

                             <div class="scrollbar" id="style-2" style=" overflow-y: scroll; height:400px;   ">
                               <a class="twitter-timeline" href="https://twitter.com/Sadu_co">Tweets by @Sadu_co</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                    <br>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 blog-sidebar">
                <ul class="blog-widget position-relative" style="direction: ltr;">
                    @foreach($news as $new)
                        <li>
                            <div class="d-flex border-bottom border-color-extra-light-gray padding-30px-tb">
                                <figure class="flex-shrink-0">
                                    <a href="/new/{{ $new->id}}"><img src="{{ Storage::url($new->image) }}" alt=""></a>
                                </figure>
                                <div class="media-body flex-grow-1">
                                    <a href="/new/{{ $new->id}}" class="text-extra-small
                                                                        alt-font d-block margin-5px-bottom">
                                        {{ $new->created_at->format('d/m/Y') }}
                                    </a>
                                    <a href="/new/{{ $new->id}}" class="alt-font font-weight-500 text-extra-dark-gray
                                                                        margin-5px-bottom d-block line-height-22px">
                                        {{ $new->{'title_'.session('lang')} }}
                                    </a>
                                    <span class="text-extra-small alt-font">
                                        <a href="/new/{{ $new->id}}">{{ trans('admin.more') }}</a>
                                    </span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

