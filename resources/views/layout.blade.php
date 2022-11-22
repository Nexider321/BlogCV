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
</body>

</html>
