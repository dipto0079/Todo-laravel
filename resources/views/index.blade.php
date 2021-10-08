<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from bytesed.com/tf/ozagi/blog-list-nature.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Sep 2021 04:17:33 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - ozagi - Personal Blog HTML Template</title>
    <!-- favicon -->
    <link rel=icon href=favicon.ico sizes="20x20" type="image/png">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('home/assets/css/bootstrap.min-v4.6.0.css')}}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('home/assets/css/fontawesome.all.min-v5.15.3.css')}}">
    <!-- lineawesome -->
    <link rel="stylesheet" href="{{asset('home/assets/css/line-awesome.min-v1.0.3.css')}}">
    <!-- slick css -->
    <link rel="stylesheet" href="{{asset('home/assets/css/slick.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('home/assets/css/animate.css')}}">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="{{asset('home/assets/css/magnific-popup.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('home/assets/css/main-style.css')}}">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="{{asset('home/assets/css/responsive.css')}}">

</head>

<body>
<!-- preloader start -->

<!-- preloader end -->

<!-- nav area start -->
<nav class="navbar navbar-area navbar-expand-lg has-topbar nav-style-01 index-01">
    <div class="container nav-container custom-header-container">
        <div class="responsive-mobile-menu">
            <div class="logo-wrapper">
                <a href="index-2.html" class="logo">
                    <img src="assets/img/logo/Logo-01.png" alt="logo">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
            <ul class="navbar-nav">
                <li class="menu-item-has-children">
                    <a href="{{route('home')}}">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index-2.html">Home 01</a></li>
                        <li><a href="index-02.html">Home 02</a></li>
                        <li><a href="index-03.html">Home 03</a></li>
                        <li><a href="index-04.html">Home 04</a></li>
                        <li><a href="index-05.html">Home 05</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children current-menu-item">
                    <a href="#">blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog-grid-travel.html">blog grid travel</a></li>
                        <li><a href="blog-grid-nature.html">blog grid nature</a></li>
                        <li><a href="blog-list-food.html">blog list food</a></li>
                        <li><a href="blog-list-nature.html">blog List nature</a></li>
                        <li><a href="blog-details-travel.html">blog Details travel</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">gallery</a>
                    <ul class="sub-menu">
                        <li><a href="galleries-all.html">gallery</a></li>
                        <li><a href="galleries-travel.html">gallery travel</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">pages</a>
                    <ul class="sub-menu">
                        <li><a href="about-author.html">About author</a></li>
                        <li><a href="search.html">search</a></li>
                        <li><a href="error-404.html">error</a></li>
                    </ul>
                </li>
                <li><a href="{{route('login')}}">login</a></li>
                <li><a href="{{route('register')}}">Register</a></li>
            </ul>
        </div>
        <div class="nav-right-content">
            <ul>
                <li class="account">
                    <a href="#" id="search_icon">
                        <span class="text">search</span>
                        <i class="las la-search icon"></i>
                    </a>
                    <!-- search popup start -->
                    <div class="search-popup" id="search_popup">
                        <div class="search-popup-inner">
                            <form action="https://bytesed.com/tf/ozagi/index.html">
                                <span class="search-popup-close-btn" id="search-popup-close-btn">×</span>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                </div>
                                <button class="search-btn" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- search popup end -->
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- navbar area end -->

<!-- breadcrumb area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner">
                    <h2 class="page-title">Nature </h2>
                    <ul class="page-list">
                        <li class="list-item"><a href="index-2.html">Home</a></li>
                        <li class="list-item"><a href="#">Nature </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- blog list nature area start -->
<div class="blog-nature-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @foreach($todo as $key)
                    <?php
                    $slug =  \Illuminate\Support\Str::slug($key->task);
                    ?>
                <div class="single-blog-list-nature">
                    <div class="img-box">
                        <img src="{{Storage::url("$key->image")}}" alt="image">
                    </div>
                    <div class="content">
                        <h3 class="title">
                            <a href="{{URL::to('single-post/'.$key->id."/".$slug)}}">{{$key->task}}</a>
                        </h3>
                        <p class="info">One advanced diverted domestic repeated bringing you old. Possible procured
                            her
                            trifling laughter thoughts property she met way. Companions shy had solicitude
                            favourable
                            own. Which could saw guest man now heard but.</p>
                        <div class="post-meta">
                            <ul class="list">
                                <li class="list-item">
                                    <a href="#">
                                        <i class="las la-tag icon"></i>
                                        <span class="text">nature</span>
                                    </a>
                                </li>

                                <li class="list-item">
                                    <a href="{{URL::to('single-post/'.$key->id."/".$slug)}}">
                                        <i class="lar la-comment icon"></i>
                                        <span class="text">comments</span>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <ul class="social-link">
                                        <li>
                                            <span class="sec">share:</span>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="lab la-facebook-f icon-s"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="lab la-instagram icon-s"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="lab la-linkedin-in icon-s"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="lab la-pinterest-p icon-s"></i>
                                            </a>
                                        </li>
                                    </ul>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
            <div class="col-md-6 col-lg-4 widg">
                <div class="widget-area-wrapper style-1">
                    <div class="widget widget-search">
                        <form class="form-inline">
                            <div class="form-group">
                                <input type="search" class="form-control" placeholder="search...">
                            </div>
                            <button type="submit" class="form-btn-1"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget widget-upcomming-blog">
                        <div class="img-box">
                            <img src="assets/img/widget/upcomming-blog.jpg" alt="image">
                            <div class="content">
                                    <span class="catg">
                                        <a href="#">beauty</a>
                                    </span>
                                <h4 class="title">
                                    <a href="#">upcomming blog</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-about-author">
                        <h5 class="widget-title">about author</h5>
                        <div class="img-box">
                            <img src="assets/img/widget/author/01.png" alt="image">
                            <div class="content">
                                <h3 class="title">
                                    <a href="#">Jhon Doe</a>
                                </h3>
                                <p class="info">One advanced diverted domestic
                                    repeated bringing you old. Possible procured her trifling laughter though.</p>
                                <ul class="social-link-list">
                                    <li class="list-item">
                                        <a href="#" tabindex="-1">
                                            <i class="fab fa-facebook-f icon"></i>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a href="#" tabindex="-1">
                                            <i class="fab fa-twitter icon"></i>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a href="#" tabindex="-1">
                                            <i class="fab fa-instagram icon"></i>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a href="#" tabindex="-1">
                                            <i class="fas fa-rss icon"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-category">
                        <h5 class="widget-title">Categories</h5>
                        <ul class="list">
                            <li>
                                <a href="#">
                                    <span class="name">travel</span>
                                    <span class="number">(3)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="name">food</span>
                                    <span class="number">(5)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="name">fashion</span>
                                    <span class="number">(9)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="name">journey</span>
                                    <span class="number">(7)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="name">music</span>
                                    <span class="number">(4)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="name">health</span>
                                    <span class="number">(8)</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget-gallery">
                        <h5 class="widget-title">gallery</h5>
                        <ul class="list">
                            <li>
                                <a href="#">
                                    <img src="assets/img/widget/gallery/01.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/widget/gallery/02.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/widget/gallery/03.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/widget/gallery/03.jpg" alt="image">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget-recent-post">
                        <h5 class="widget-title">Latest Posts</h5>
                        <ul class="post-list">
                            <li>
                                <div class="thumb">
                                    <img src="assets/img/widget/01.jpg" alt="image">
                                </div>
                                <div class="content">
                                        <span class="catg">
                                            <a href="#">travel</a>
                                        </span>
                                    <h5 class="post-title"><a href="#">Are you currently looking at any other
                                            providers</a></h5>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <img src="assets/img/widget/02.jpg" alt="image">
                                </div>
                                <div class="content">
                                        <span class="catg">
                                            <a href="#">travel</a>
                                        </span>
                                    <h5 class="post-title"><a href="#">Why is this such important problem for you to
                                            fix</a></h5>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <img src="assets/img/widget/03.jpg" alt="image">
                                </div>
                                <div class="content">
                                        <span class="catg">
                                            <a href="#">travel</a>
                                        </span>
                                    <h5 class="post-title"><a href="#">Why does this particular feature stand you
                                            right now</a></h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget-add">
                        <div class="add-banner-y">
                            <a href="#">
                                <img src="assets/img/widget/add/01.png" alt="image">
                            </a>
                        </div>
                    </div>
                    <div class="widget widget-tag">
                        <h5 class="widget-title">Tags</h5>
                        <div class="tag-wrapper">
                            <a href="#" class="btn-tag">food</a>
                            <a href="#" class="btn-tag">travel</a>
                            <a href="#" class="btn-tag">music</a>
                            <a href="#" class="btn-tag">health</a>
                            <a href="#" class="btn-tag">fashion</a>
                            <a href="#" class="btn-tag">journey</a>
                            <a href="#" class="btn-tag">nature</a>
                            <a href="#" class="btn-tag">game</a>
                            <a href="#" class="btn-tag">flower</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog list nature area end -->

<!-- footer area start -->
<footer class="footer-area">
    <div class="footer-top">
        <div class="container custom-container-1515">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <div class="logo-wrapper">
                            <a href="index-2.html" class="logo">
                                <img src="assets/img/logo/Logo-01.png" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-widget">
                        <ul class="footer-item-list">
                            <li class="list-item"><a href="#">Home</a></li>
                            <li class="list-item"><a href="#">gallery</a></li>
                            <li class="list-item"><a href="#">about</a></li>
                            <li class="list-item"><a href="#">blog</a></li>
                            <li class="list-item"><a href="#">contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <ul class="social-icon-list">
                            <li class="list-item"><a href="#">
                                    <i class="fab fa-facebook-f icon"></i>
                                </a></li>
                            <li class="list-item"><a href="#">
                                    <i class="fab fa-twitter icon"></i>
                                </a></li>
                            <li class="list-item"><a href="#">
                                    <i class="fab fa-instagram icon"></i>
                                </a></li>
                            <li class="list-item"><a href="#">
                                    <i class="fab fa-google-plus-g icon"></i>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="copyright-area">
            <div class="container custom-container-1515">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-area-inner">
                            <div class="left-content">
                                <p class="copyright">Privacy Policy | Terms & Conditions</p>
                            </div>
                            <div class="right-content">
                                <p class="copyright">All copyright (C) 2021 Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- back to top area start -->
<div class="scroll-to-top">
    <i class="fas fa-angle-up"></i>
</div>
<!-- back to top area end -->

<!-- jquery -->
<script src="{{asset('home/assets/js/jquery-3.6.0.min.js')}}"></script>
<!-- jquery migrate -->
<script src="{{asset('home/assets/js/jquery-migrate-3.3.2.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('home/assets/js/bootstrap.min-v4.6.0.js')}}"></script>
<!-- slick js -->
<script src="{{asset('home/assets/js/slick.min.js')}}"></script>
<!-- wow js -->
<script src="{{asset('home/assets/js/wow.js')}}"></script>
<!-- magnific popup js -->
<script src="{{asset('home/assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- popper -->
<script src="{{asset('home/assets/js/popper.min.js')}}"></script>
<!-- main js -->
<script src="{{asset('home/assets/js/main.js')}}"></script>

</body>


<!-- Mirrored from bytesed.com/tf/ozagi/blog-list-nature.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Sep 2021 04:17:38 GMT -->
</html>
