{{-- 
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif --}}
            <!DOCTYPE html>
            <html lang="{{ app()->getLocale() }}">
    <!-- CSRF Token -->
            
            <head>
                    <!-- Meta -->
                    <meta charset="utf-8">
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="keywords" content="Ebenezer Seminary P.O.Box 2080 Iringa" />
                    <meta name="description" content="Online Application">
                    <meta name='copyright' content="T.A.G School with spiritual Value ">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <!-- Title -->
                    <title>Ebenezer Seminary</title>
                    <!-- Favicon -->
                    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
                    <!-- Web Font -->
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
                    <script type="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
            
                    <!-- Bootstrap CSS -->
                   {{--  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}
                    <!-- Font Awesome CSS -->
                    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
                    <!-- Fancy Box CSS -->
                    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.cs') }}s">
                    <!-- Owl Carousel CSS -->
                    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
                    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
                    <!-- Animate CSS -->
                    <link rel="stylesheet" href="{{ asset('css/animate.min.html') }}">
                    <!-- Slick Nav CSS -->
                    <link rel="stylesheet" href="{{ asset('css/slicknav.min.html') }}">
                    <!-- Magnific Popup -->
                    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
                    
                    <!-- Learedu Stylesheet -->
                    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
                    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
                    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
                    
                    <!-- Learedu Color -->
                    <link rel="stylesheet" href="{{ asset('css/color/color1.css') }}">
                    <link rel="stylesheet" href="#" id="colors"> 
                    {{-- this is for navbar only    --}}
                    <link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css') }}">
                    <link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
                    <link rel="stylesheet" href="{{ asset('assets/tether/tether.min.css') }}">
                    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
                    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-grid.min.css') }}">
                    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
                    <link rel="stylesheet" href="{{ asset('assets/socicon/css/styles.css') }}">
                    <link rel="stylesheet" href="{{ asset('assets/animatecss/animate.min.css') }}">
                    <link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css') }}">
                    <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
                    <link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}" type="text/css">
                    {{-- here its over --}}
                </head>
                <body>
                
                    <!-- Book Preloader -->
                    <div class="book_preload">
                        <div class="book">
                            <div class="book__page"></div>
                            <div class="book__page"></div>
                            <div class="book__page"></div>
                        </div>
                    </div>
                    <!--/ End Book Preloader -->
                
                    <!-- Header -->
                    <header class="header">
                        <!-- Topbar -->
                        <div class="topbar">
                            <div class="container">
                                <div class="row">
                       </div>
                   </div>
               </div>

                        <!-- End Topbar -->
                        <!-- Header Inner -->
                    
    <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="{{ url('/') }}">
                         <img src="{{ asset('assets/images/logo2.png') }} " alt="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap">
                    <a class="navbar-caption text-white display-4" href=" {{ url('/') }}">
                        <h2>EBENEZER SEMINARY</h2>
                    </a>
                </span>
            </div>
        </div>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item"><a class="nav-link link text-white display-7" href="#"></a></li>
                <li class="nav-item"><a class="nav-link link text-white display-7" href="{{ url('/') }}"><span class="mbrib-home mbr-iconfont mbr-iconfont-btn"></span>Home</a></li>
                <li class="nav-item"><a class="nav-link link text-white display-7" href="{{ url('contact') }}"><span class="mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>Admission</a></li>
                <li class="nav-item"><a class="nav-link link text-white display-7" href="{{ url('contact') }}"><span class="mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>Our School</a></li>
                <li class="nav-item"><a class="nav-link link text-white display-7" href="{{ url('About') }}"><span class="mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span> About Us</a></li>
                <li class="nav-item"><a class="nav-link link text-white display-7" href="{{ url('contact') }}"><span class="mbri-arrow-next mbr-iconfont mbr-iconfont-btn"></span>Contact us&nbsp;</a></li>
            </ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="{{ url('apply') }}">
                <span class="socicon socicon-telegram mbr-iconfont mbr-iconfont-btn" style="color: rgb(0, 177, 106);"></span>Apply Now</a></div>
            </div>
    </nav>
</section><br ><br >
                       <div class="header-inner">
                            <div class="container">
                                <div class="row">
                                                        <div class="col-lg-5 col-md-5 col-50">
                                                            <div class="mobile-menu"></div>
                                                        </div>
                                            <div class="container">
                                                <!-- Header Widget -->
                                                <div class="header-widget">
                                                    <div class="single-widget">
                                                        <i class="fa fa-phone"></i>
                                                        <h4>Call Now<span>(+255) 654 418 999</span></h4>
                                                    </div>
                                                    <div class="single-widget">
                                                        <i class="fa fa-envelope-o"></i>
                                                        <h4>Send Message<a href="mailto:mailus@mail.com"><span>admin@EbenezerSeminary.com</span></a></h4>
                                                    </div>
                                                    <div class="single-widget">
                                                        <i class="fa fa-map-marker"></i>
                                                        <h4>Our Location<span>P.O. Box 2080 Iringa, Nduli Near Iringa Airport </span></h4>
                                                    </div>
                                                </div>
                                                <!--/ End Header Widget -->
                                            </div>
                                </div>
                            </div>
                           </div>
</header>




            @yield('content')
        </main>
    </div>

                    <!-- Footer -->
                    <footer class="footer overlay section">
                        <!-- Footer Top -->
                        <div class="footer-top">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <!-- About -->
                                        <div class="single-widget about">
                                            <div class="logo"><a href="#"><img src="{{ asset('images/logo2.png') }}" alt="#"></a></div>
                                            <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Lorem ipsum dolor sit amet, consectetur</p>
                                            <ul class="list">
                                                <li><i class="fa fa-phone"></i>Phone: (+255) 654 418 999 </li>
                                                <li><i class="fa fa-envelope"></i>Email: <a href="mailto:info@youremail.com">admin@EbenezerSeminary.com</a></li>
                                                <li><i class="fa fa-map-o"></i>Address: Box 2080 Iringa</li>
                                            </ul>
                                        </div>
                                        <!--/ End About -->
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-12">
                                        <!-- Useful Links -->
                                        <div class="single-widget useful-links">
                                            <h2>Useful Links</h2>
                                            <ul>
                                                <li><a href="{{ url('/') }}"><i class="fa fa-angle-right"></i>Home</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>About Us</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Courses</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Events</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Blogs</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Contact</a></li>  
                                            </ul>
                                        </div>
                                        <!--/ End Useful Links -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <!-- Latest News -->
                                        <div class="single-widget latest-news">
                                            <h2>Latest Posts</h2>
                                            <div class="news-inner">
                                                <div class="single-news">
                                                    <img src="{{ asset('images/blog1.jpg') }}" alt="#">
                                                    <h4><a href="blog-single.html">Our Teacher the best Link to Savc</a></h4>
                                                    <p>Nunc purus orci, blandit condimentum rhoncus vels</p>
                                                </div>
                                                <div class="single-news">
                                                    <img src="{{ asset('images/blog2.jpg') }}" alt="#">
                                                    <h4><a href="blog-gsingle.html">Student Have the best Link to Ronae</a></h4>
                                                    <p>Nunc purus orci, blandit condimentum rhoncus vels</p>
                                                </div>
                                                <div class="single-news">
                                                    <img src="{{ asset('images/blog3.jpg') }}" alt="#">
                                                    <h4><a href="blog-single.html">Sekker the best Link to build</a></h4>
                                                    <p>Nunc purus orci, blandit condimentum rhoncus vele</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ End Latest News -->
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <!-- Newsletter -->
                                        <div class="single-widget newsletter">
                                            <ul class="social">
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                        <!--/ End Newsletter -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ End Footer Top -->
                        <!-- Footer Bottom -->
                        <div class="footer-bottom">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="bottom-head">
                                            <div class="row">
                                                <div class="col-12">
                                                  
                                                    <!-- Copyright -->
                                                    <div class="copyright">
                                                        <p>© Copyright 2018 Ebenezer Seminary || All Rights Reserved</p>
                                                    </div>
                                                    <!--/ End Copyright -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ End Footer Bottom -->
                    </footer>
              
                           {{-- nab bar --}}
                     <script src="{{ asset('assets/popper/popper.min.js') }}"></script>
                      <script src="{{ asset('assets/tether/tether.min.js') }}"></script>
                      <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
                      <script src="{{ asset('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
                      <script src="{{ asset('assets/viewportchecker/jquery.viewportchecker.js') }}"></script>
                      <script src="{{ asset('assets/smoothscroll/smooth-scroll.js') }}"></script>
                      <script src="{{ asset('assets/dropdown/js/script.min.js') }}"></script>
                      <script src="{{ asset('assets/theme/js/script.js') }}"></script>


                         {{-- end nav bar script --}}
                    <script src="{{ asset('js/jquery.min.js') }}"></script>
                    <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
               
                    <script src="{{ asset('js/popper.min.js') }}"></script>
          
                    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
              
                    <script src="{{ asset('js/colors.js') }}"></script>
                    
                    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
                   
                    <script src="{{ asset('js/particles.min.js') }}"></script>
                  
                    <script src="{{ asset('js/facnybox.min.js') }}"></script>
                   
                    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
          
                    <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
                
                    <script src="{{ asset('js/circle-progress.min.js') }}"></script>
                   
                    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
              
                    <script src="{{ asset('js/waypoints.min.js') }}"></script>
                  
                    <script src="{{ asset('js/slicknav.min.js') }}"></script>
                   
                    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
   
                    <script src="{{ asset('js/easing.min.js') }}"></script>
                  
                    <script src="{{ asset('js/wow.min.js') }}"></script>
                
                    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
                    
                    <script src="{{ asset('js/gmaps.min.js') }}"></script>
                  
                    <script src="{{ asset('js/main.js') }}"></script>
                </body>
            
            
            </html>


