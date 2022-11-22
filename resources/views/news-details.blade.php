@extends('layout')

    @section('content')
    <!-- page title area starts -->
    <div class="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="page-title pt-80 pb-60">
                        <h1>Top 3 IDE For Coding PHP Based
                            Frameworks.</h1>
                        <div class="post-category">
                            <p><span class="pc">Category:</span> Web Development</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->

    <!-- main area starts -->
    <div class="main-area bgs pt-110 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="news-details">
                        <div class="news-details-img mb-50">
                            <img src="http://localhost/img/blog/news-details-1.jpg" alt="news details 1">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute re dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                            occaecat cupidatat non.</p>
                        <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostru exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute re dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non.</p>

                        <blockquote class="blockquote">
                            <span>“</span>
                            <p class="speech">IDE brings half the coding experience. Choose wisely!</p>
                            <footer class="blockquote-footer"><cite title="Source Title">Robert Martin</cite></footer>
                        </blockquote>

                        <p class="mb-30">Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostru exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo.</p>
                    </div>
                    <hr />
                </div>
            </div>

            <div class="row pb-10 news-meta">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                    <h4>Related Tags</h4>
                    <div class="tags">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#">Code</a></li>
                            <li class="list-inline-item"><a href="#">IDE</a></li>
                            <li class="list-inline-item"><a href="#">VSCode</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                    <h4>Social Share</h4>
                    <div class="news-social">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="https://facebook.com/wpsmasher"><i
                                        class="fab fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/wpsmasher"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://dribbble.com/wpsmasher"><i
                                        class="fab fa-dribbble"></i></a></li>
                            <li class="list-inline-item"><a href="https://behance.net/arafatjamil01"><i
                                        class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row nav-buttons">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="left-button">
                        <a href="blog"><i class="fas fa-long-arrow-alt-left"></i> Previous</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="right-button text-right">
                        <a href="portfolio">Next <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>


    <!-- main area ends -->

    <!-- Newsletter area starts -->
    @include('vendor/news-letter')
    <!-- Newsletter area ends -->
    @endsection

