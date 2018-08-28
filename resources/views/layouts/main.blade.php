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
                    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
            
                    <!-- Bootstrap CSS -->
                    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
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
                        <div class="header-inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-50">

                                        <div class="mobile-menu"></div>
                                    </div>
                                    <div class="container">
                                        <!-- Header Widget -->
                                        <div class="logo">
                                                <a href="{{ url('/') }}"><img src="{{ asset('images/inasumbua.png') }}" alt="#"></a>
                                            </div>
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
                        <!--/ End Header Inner -->
                        <!-- Header Menu -->
                        <div class="header-menu">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <nav class="navbar navbar-default">
                                            <div class="navbar-collapse">
                                                <!-- Main Menu -->
                                                <ul id="nav" class="nav menu navbar-nav">
                                                    <li ><a href="{{ url('/') }}">Home</a></li>
                                                    <li ><a href="{{ url('About') }}">About Us</a></li>
                                                    <li><a href="{{ url('contact') }}">Contact Us</a></li>
                                                    <li><a href="{{ url('contact') }}">Admission</a></li>
                                                </ul>
                                                <!-- End Main Menu -->
                                                <!-- button -->
                                                <div class="button">
                                                   <a href="{{ url('apply') }}" class="btn"><i class="fa fa-pencil"></i>Apply Now</a>
                                                </div>
                                                <!--/ End Button -->
                                            </div> 
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ End Header Menu -->
                    </header>
                    <!-- End Header -->
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
                    
                    <script src="http://maps.google.com/maps/api/js?key=AIzaSyC0RqLa90WDfoJedoE3Z_Gy7a7o8PCL2jw"></script>
                    <script src="{{ asset('js/gmaps.min.js') }}"></script>
                  
                    <script src="{{ asset('js/main.js') }}"></script>
                </body>
            
            
            </html>


