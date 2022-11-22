<!DOCTYPE HTML>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('meta')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mean-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
    <title>Document</title>
</head>
<body>
<div class="header-area">
    <div class="container mt-60 pl-0 pr-0">
        <div class="row justify-content-lg-between">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 pl-xl-0">
                <!-- logo -->
                <div class="logo-area">
                    <a href="//">
                        <img src="http://localhost/img/logo/logo.png" alt="Logo" />
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
                            <li class="list-inline-item"><a href="/">Home</a></li>
                            <li class="list-inline-item"><a href="/#portfolio">Portfolio</a>
                                <ul class="sub-menu pb-10 pt-10 pl-15 pr-15">
                                    <li><a href="portfolio-details.blade.php">Portfolio Details</a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item"><a href="/#blog">Blog</a>
                                <ul class="sub-menu pb-10 pt-10 pl-15 pr-15">
                                    <li><a href="blog-list.blade.php">Blog List</a></li>
                                    <li><a href="/News">News Details</a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item"><a href="/#contact">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="mobile-menu"></div>
            </div>
        </div>
    </div>
</div>

@yield('header')

@yield('content')


<!-- contact area starts -->
<div class="contact-area pt-120" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-title text-center">
                    <h3 class="section-name pc">CONTACT US</h3>
                    <h2>Ways To Contact Me</h2>
                    <p>
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupida
                        non proident, sunt in culpa qui officia
                    </p>

                </div>
            </div>
        </div>
    </div>
    <div class="container mt-55 pb-90">
        <div class="row justify-content-center">

            <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="contact-item">
                    <div class="ct-item-icon float-left ml-30 mr-20">
                        <i class="far fa-envelope"></i>
                    </div>
                    <a class="btn-animation" href="https://themeforest.net/user/wpsmasher">admin@jkh.com</a>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="contact-item">
                    <div class="ct-item-icon float-left ml-30 mr-20">
                        <i class="fas fa-phone"></i>
                    </div>
                    <a class="btn-animation" href="https://themeforest.net/user/wpsmasher">+1 (818) 2489 XX</a>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="contact-item">
                    <div class="ct-item-icon float-left ml-30 mr-20">
                        <i class="fab fa-skype"></i>
                    </div>
                    <a class="btn-animation" href="https://themeforest.net/user/wpsmasher">live:arafatjamil01</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="contact-item">
                    <div class="ct-item-icon float-left ml-30 mr-20">
                        <i class="fab fa-twitter"></i>
                    </div>
                    <a class="btn-animation" href="https://themeforest.net/user/wpsmasher">@wpsmasher</a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="contact-item">
                    <div class="ct-item-icon float-left ml-30 mr-20">
                        <i class="fab fa-dribbble"></i>
                    </div>
                    <a class="btn-animation" href="https://themeforest.net/user/wpsmasher">wpsmasher</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area ends -->

<!-- footer copyright area starts -->
<div class="footer-area">
    <div class="copyright-text text-center">
        <p class="pt-20"><i class="fas fa-copyright mr-10"></i>Copyright - HJ | All Rights Rerved</p>
    </div>

    <div class="back-to-top">
        <a href="#"><i class="fas fa-angle-up"></i></a>
    </div>
</div>

</body>


<script src="http://localhost/js/jquery-2.2.4.js"></script>
<script src="http://localhost/js/popper.min.js"></script>
<script src="http://localhost/js/bootstrap.min.js"></script>
<script src="http://localhost/js/jquery-1.12.4.js"></script>
<script src="http://localhost/js/slick.js"></script>
<script src="http://localhost/js/waypoint.min.js"></script>
<script src="http://localhost/js/countup.js"></script>
<script src="http://localhost/js/isotope.min.js"></script>
<script src="http://localhost/js/jquery-mean-menu.min.js"></script>
<script src="http://localhost/js/magnific-popup.js"></script>
<script src="http://localhost/js/script.js"></script>
</html>
