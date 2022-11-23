<div class="news-area pt-110 bgs" id="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-xl-6">
                <div class="section-title text-center">
                    <h3 class="section-name pc">LATEST NEWS</h3>
                    <h2>My Latest Articles</h2>
                    <p>

                    </p>

                </div>
            </div>
        </div>

        <div class="row mt-45 pb-90">
            @foreach($posts as $post)
            <div class="col-xl-4 col-lg-4">
                <div class="single-blog mb-30 pb-40">
                    <div class="blog-img">
                        <img src="http://localhost/img/news/blog-1.jpg" alt="news item 1">
                    </div>
                    <div class="blog-meta">
                        <div class="date">
                            {{ date_format($post->created_at, 'M d, y') }}
                        </div>
                    </div>
                    <div class="blog-details pl-30 mt-35 pr-30">
                        <div class="blog-title mb-10">
                            <a href="/news">
                                <h2>
                                        {{ $post->name }}
                                </h2>
                            </a>
                        </div>
                        <p class="mb-10">
                           {{ Str::limit($post->content, 50, '...') }}
                        </p>
                        <div class="blog-button">
                            <a href="/post/{{$post->slug}}">Read More &nbsp; <i class="fas fa-angle-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
{{--            <div class="col-xl-4 col-lg-4">--}}
{{--                <div class="single-blog mb-30 pb-40">--}}
{{--                    <div class="blog-img">--}}
{{--                        <img src="http://localhost/img/news/blog-2.jpg" alt="news item 2">--}}

{{--                    </div>--}}
{{--                    <div class="play-btn">--}}
{{--                        <a href="https://www.youtube.com/watch?v=Mo0WEEfbmKE" class="mfp-iframe">--}}
{{--                            <i class="fas fa-play"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="blog-meta">--}}
{{--                        <div class="date">--}}
{{--                            Jun 12,20--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="blog-details pl-30 mt-35 pr-30">--}}
{{--                        <div class="blog-title mb-10">--}}
{{--                            <a href="/news">--}}
{{--                                <h2>The Mystery Of Positive--}}
{{--                                    And Negative Space...</h2>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <p class="mb-10">--}}
{{--                            Lorem ipsum dolor sit amet, conscetur adi pisi cing elit, sed do eius tempor in cidi--}}
{{--                            dunt ut labore et dolore magna qua. Ut enim ad minim veniam.--}}
{{--                        </p>--}}
{{--                        <div class="blog-button">--}}
{{--                            <a href="/news">Read More &nbsp; <i class="fas fa-angle-right"></i> </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-xl-4 col-lg-4">
                <div class="blog-item-small pr-20">
                    <div class="blog-meta">
                        <div class="date">
                            Apr 28,20
                        </div>
                    </div>

                    <div class="blog-small-img mr-20 float-left">
                        <img src="http://localhost/img/news/blog-3.jpg" alt="blog 3">
                    </div>

                    <div class="blog-small-description pt-20 pb-20">
                        <a href="/news">
                            <h2>The Secrets Of Online
                                Marketing That ...
                            </h2>
                        </a>
                        <p>Lorem ipsum dolor sit
                            amet, consecetur el..
                        </p>
                    </div>
                </div>
                <hr>
                <div class="blog-item-small pr-20">
                    <div class="blog-meta">
                        <div class="date">
                            Apr 28,20
                        </div>
                    </div>
                    <div class="blog-small-img mr-20 float-left">
                        <img src="http://localhost/img/news/blog-4.jpg" alt="blog 3">
                    </div>

                    <div class="blog-small-description pt-20 pb-20">
                        <a href="/news">
                            <h2>The Secrets Of Online
                                Marketing That ...
                            </h2>
                        </a>
                        <p>Lorem ipsum dolor sit
                            amet, consecetur el..
                        </p>
                    </div>
                </div>
                <hr>
                <div class="blog-item-small pr-20">
                    <div class="blog-meta">
                        <div class="date">
                            Apr 28,20
                        </div>
                    </div>
                    <div class="blog-small-img mr-20 float-left">
                        <img src="http://localhost/img/news/blog-5.jpg" alt="blog 3">
                    </div>

                    <div class="blog-small-description pt-20 pb-20">
                        <a href="/news">
                            <h2>The Secrets Of Online
                                Marketing That ...
                            </h2>
                        </a>
                        <p>Lorem ipsum dolor sit
                            amet, consecetur el..
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
