@extends('layout')

@section('header')
    <!-- page title area starts -->
    <div class="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="page-title pt-80 pb-60">
                        <h1>My Articles</h1>
                        <p>The crown jewels of my expertise unleashed, things that I have learned so far.
                            have leaned so far.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->
@endsection

@section('content')
    <!-- blog post section starts -->
    <div class="blog-post-area bgs pt-110 pb-120">
        <div class="container">
            <div class="col-xl-12">
                <div class="blog-section">
                    <div class="title">
                        <h2>UI/UX Design</h2>
                        <div class="dash"></div>
                    </div>

                    <div class="list-blog-item bgp mt-60 mb-30">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
                                <div class="list-blog-img">
                                    <img src="http://localhost/img/blog/list-1.jpg" alt="list 1">
                                </div>
                                <div class="list-blog-meta">
                                    <div class="date">
                                        <p>Jun 12,2020</p>
                                    </div>
                                </div>
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=Mo0WEEfbmKE" class="mfp-iframe">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>

                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="list-blog-detail pl-15 pr-70 pt-60">
                                    <a href="news-details.blade.php">
                                        <h2 class="mb-15">Introduction To The Art Of Putting Black Images.</h2>
                                    </a>
                                    <p>
                                        Lorem ipsum dolor sit amet, cose ctetur adipisicing elit, sed do usd tempor in
                                        cid dunt ut labore et dol agna aliqua.
                                        tempor in cid dunt ut labore et dol agna aliqua.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, cose ctetur adipisi cing elit, sed do usd tempor in
                                        cid dunt ut labore et dol agna aliqua.
                                    </p>

                                    <div class="blog-button">
                                        <a href="news-details.blade.php">Read More &nbsp; <i class="fas fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-blog-item bgp mb-30">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
                                <div class="list-blog-img">
                                    <img src="http://localhost/img/blog/list-2.jpg" alt="list 1">
                                </div>
                                <div class="list-blog-meta">
                                    <div class="date">
                                        <p>Jun 11,2020</p>
                                    </div>
                                </div>


                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="list-blog-detail pl-15 pr-70 pt-50">
                                    <a href="news-details.blade.php">
                                        <h2 class="mb-15">The User Side Of The App
                                            When The Users See</h2>
                                    </a>
                                    <p>
                                        Lorem ipsum dolor sit amet, cose ctetur adipisicing elit, sed do usd tempor in
                                        cid dunt ut labore et dol agna aliqua.
                                        tempor in cid dunt ut labore et dol agna aliqua.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, cose ctetur adipisi cing elit, sed do usd tempor in
                                        cid dunt ut labore et dol agna aliqua.
                                    </p>

                                    <div class="blog-button">
                                        <a href="news-details.blade.php">Read More &nbsp; <i class="fas fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-more-button mt-60 text-center">
                        <a href="#" class="ct-btn">Load More</a>
                    </div>

                </div>
                <div class="blog-section mt-50">
                    <div class="title">
                        <h2>Development</h2>
                        <div class="dash"></div>
                    </div>

                    <div class="list-blog-item bgp mt-60 mb-30">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
                                <div class="list-blog-img">
                                    <img src="http://localhost/img/blog/list-3.jpg" alt="list 1">
                                </div>
                                <div class="list-blog-meta">
                                    <div class="date">
                                        <p>Jun 12,2020</p>
                                    </div>
                                </div>
                                <div class="play-btn">
                                    <a href="https://www.youtube.com/watch?v=Mo0WEEfbmKE" class="mfp-iframe">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>

                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="list-blog-detail pl-15 pr-70 pt-60">
                                    <a href="news-details.blade.php">
                                        <h2 class="mb-15">Introduction To The Art Of Putting Black Images.</h2>
                                    </a>
                                    <p>
                                        Lorem ipsum dolor sit amet, cose ctetur adipisicing elit, sed do usd tempor in
                                        cid dunt ut labore et dol agna aliqua.
                                        tempor in cid dunt ut labore et dol agna aliqua.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, cose ctetur adipisi cing elit, sed do usd tempor in
                                        cid dunt ut labore et dol agna aliqua.
                                    </p>

                                    <div class="blog-button">
                                        <a href="news-details.blade.php">Read More &nbsp; <i class="fas fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-blog-item bgp mb-30">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
                                <div class="list-blog-img">
                                    <img src="http://localhost/img/blog/list-4.jpg" alt="list 1">
                                </div>
                                <div class="list-blog-meta">
                                    <div class="date">
                                        <p>Jun 11,2020</p>
                                    </div>
                                </div>


                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="list-blog-detail pl-15 pr-70 pt-50">
                                    <a href="news-details.blade.php">
                                        <h2 class="mb-15">The User Side Of The App
                                            When The Users See</h2>
                                    </a>
                                    <p>
                                        Lorem ipsum dolor sit amet, cose ctetur adipisicing elit, sed do usd tempor in
                                        cid dunt ut labore et dol agna aliqua.
                                        tempor in cid dunt ut labore et dol agna aliqua.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, cose ctetur adipisi cing elit, sed do usd tempor in
                                        cid dunt ut labore et dol agna aliqua.
                                    </p>

                                    <div class="blog-button">
                                        <a href="news-details.blade.php">Read More &nbsp; <i class="fas fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-more-button mt-60 text-center">
                        <a href="#" class="ct-btn">Load More</a>
                    </div>

                </div>

                <div class="blog-section mt-50">
                    <div class="title">
                        <h2>Marketing</h2>
                        <div class="dash"></div>
                    </div>

                    <div class="list-blog-item bgp mt-60 mb-30">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
                                <div class="list-blog-img">
                                    <img src="http://localhost/img/blog/list-5.jpg" alt="list 1">
                                </div>
                                <div class="list-blog-meta">
                                    <div class="date">
                                        <p>Jun 12,2020</p>
                                    </div>
                                </div>


                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="list-blog-detail pl-15 pr-70 pt-60">
                                    <a href="news-details.blade.php">
                                        <h2 class="mb-15">Introduction To The Art Of Putting Black Images.</h2>
                                    </a>
                                    <p>
                                        Lorem ipsum dolor sit amet, cose ctetur adipisicing elit, sed do usd tempor in
                                        cid dunt ut labore et dol agna aliqua.
                                        tempor in cid dunt ut labore et dol agna aliqua.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, cose ctetur adipisi cing elit, sed do usd tempor in
                                        cid dunt ut labore et dol agna aliqua.
                                    </p>

                                    <div class="blog-button">
                                        <a href="news-details.blade.php">Read More &nbsp; <i class="fas fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-blog-item bgp mb-30">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
                                <div class="list-blog-img">
                                    <img src="http://localhost/img/blog/list-6.jpg" alt="list 1">
                                </div>
                                <div class="list-blog-meta">
                                    <div class="date">
                                        <p>Jun 11,2020</p>
                                    </div>
                                </div>


                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="list-blog-detail pl-15 pr-70 pt-50">
                                    <a href="news-details.blade.php">
                                        <h2 class="mb-15">The User Side Of The App
                                            When The Users See</h2>
                                    </a>
                                    <p>
                                        Lorem ipsum dolor sit amet, cose ctetur adipisicing elit, sed do usd tempor in
                                        cid dunt ut labore et dol agna aliqua.
                                        tempor in cid dunt ut labore et dol agna aliqua.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, cose ctetur adipisi cing elit, sed do usd tempor in
                                        cid dunt ut labore et dol agna aliqua.
                                    </p>

                                    <div class="blog-button">
                                        <a href="news-details.blade.php">Read More &nbsp; <i class="fas fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-more-button mt-60 text-center">
                        <a href="#" class="ct-btn">Load More</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- blog post section ends -->

    <!-- newsletter area starts -->
   @include('vendor/news-letter')
    <!-- newsletter area ends -->
@endsection

