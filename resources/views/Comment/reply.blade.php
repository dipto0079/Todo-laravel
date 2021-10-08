<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from bytesed.com/tf/ozagi/blog-list-nature.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Sep 2021 04:17:33 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
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
                </li>
                <li class="menu-item-has-children current-menu-item">
                    <a href="#">blog</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">gallery</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">pages</a>
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
                        <li class="list-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="list-item"><a href="#">Nature </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- blog list nature area start -->
<div class="comment-form-area">
    <h3 class="comment-section-title">post your comment</h3>

    <form action="{{route('reply-comment')}}" class="comment-form" method="post">
        @csrf
        <div class="row">
                        <input type="hidden" name="comment_id" value="{{$comment->id}}">
                        <input type="hidden" name="rep_id" value="{{Auth::id()}}">
            <div class="col-lg-12">
                <div class="form-group">
                                            <textarea name="comment_rep" id="comment_rep" class="form-control"
                                                      placeholder="Comments" cols="30" rows="10" required=""></textarea>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="btn-wrapper">
                    <button type="submit" class="btn-default">Post Comment</button>
                </div>
            </div>
        </div>
    </form>
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
