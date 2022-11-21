<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Palun, Personal Portfolio, One page portfolio, HTML Template, CSS3, HTML5, Website, Portfolio template">

    <!-- title -->
    <title>Palun - Blog List Page</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- stylesheets -->

    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mean-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">

</head>

<body>
    <!-- header area -->
    <div class="header-area">
        <div class="container mt-60 pl-0 pr-0">
            <div class="row justify-content-lg-between">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 pl-xl-0">
                    <!-- logo -->
                    <div class="logo-area">
                        <a href="/">
                            <img src="assets/img/logo/logo.png" alt="Logo" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-8 col-8 pr-0">
                    <div class="menu-area menu-social float-right">
                        <ul class="list-inline pl-15">
                            <li class="list-inline-item menu-border"><a href="#"><i class="fab fa-skype"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                    <nav id="mobile-nav">
                        <div class="menu-area float-right">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="index.blade.php">Home</a></li>
                                <li class="list-inline-item"><a href="index.blade.php#portfolio">Portfolio</a>
                                    <ul class="sub-menu pb-10 pt-10 pl-15 pr-15">
                                        <li><a href="portfolio-details.blade.php">Portfolio Details</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a href="index.blade.php#blog">Blog</a>
                                    <ul class="sub-menu pb-10 pt-10 pl-15 pr-15">
                                        <li><a href="blog-list.blade.php">Blog List</a></li>
                                        <li><a href="news-details.html">News Details</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a href="index.blade.php#contact">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- header area ends -->

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
                            <img src="assets/img/blog/news-details-1.jpg" alt="news details 1">
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
                        <a href="blog-list.blade.php"><i class="fas fa-long-arrow-alt-left"></i> Previous</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="right-button text-right">
                        <a href="portfolio-details.blade.php">Next <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>


    <!-- main area ends -->

    <!-- Newsletter area starts -->
    <div class="newsletter-area pt-120" id="newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-8">
                    <div class="section-title text-center">
                        <h3 class="section-name pc">STRAIGHT IN YOUR MAILBOX</h3>
                        <h2>Subscribe To My Newsletter</h2>
                    </div>

                    <div class="email-input mt-70 mb-70">
                        <form action="#" method="POST">
                            <input class="bgs" type="email" name="email" id="email" placeholder="INFO@EXAMPLE.COM">
                            <input class="ct-btn" type="submit" value="Subscribe">
                        </form>
                    </div>

                    <div class="social-links text-center mb-100">
                        <a href="https://www.instagram.com/arafatjamil01/">Instagram</a> | <a
                            href="https://linkedin.com/in/arafatjamil01">LinkedIn</a> |
                        <a href="https://behance.net/wpsmasher">Behance</a> | <a
                            href="https://dribbble.com/wpsmasher">Dribbble</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter area ends -->

    <!-- footer copyright area starts -->
    <div class="footer-area">
        <div class="copyright-text text-center">
            <p class="pt-20"><i class="fas fa-copyright mr-10"></i>Copyright - HJ | All Rights Rerved</p>
        </div>

        <div class="back-to-top">
            <a href="#"><i class="fas fa-angle-up"></i></a>
        </div>
    </div>
    <!-- footer copyright area end -->


    <!-- scripts -->
    <script src="assets/js/jquery-2.2.4.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/jquery-1.12.4.js"></script>
    <script src="assets/js/waypoint.min.js"></script>
    <script src="assets/js/countup.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/jquery-mean-menu.min.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
