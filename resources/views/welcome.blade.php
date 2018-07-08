
   {{--    --}}

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
            <html class="no-js" lang="zxx">
                
            
            <head>
                    <!-- Meta -->
                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="keywords" content="SITE KEYWORDS HERE" />
                    <meta name="description" content="">
                    <meta name='copyright' content=''>
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
                                    {{-- <div class="col-lg-8 col-12">
                                        <!-- Contact -->
                                        <ul class="content">
                                            <li><i class="fa fa-phone"></i> (+255) 654 418 962</li>
                                            <li><a href="mailto:info@yourdomain.com"><i class="fa fa-envelope-o"></i>admin@EbenezerSeminary.com</a></li>
                                        </ul>
                                        <!-- End Contact -->
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <!-- Social -->
                                        <ul class="social">
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus "></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        </ul>
                                        <!-- End Social -->
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <!-- End Topbar -->
                        <!-- Header Inner -->
                        <div class="header-inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="logo">
                                            <a href="index-2.html"><img src="{{ asset('images/logo.png') }}" alt="#"></a>
                                        </div>
                                        <div class="mobile-menu"></div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-12">
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
                                                    <li class="active"><a href="index-2.html">Home<i class="fa fa-angle-down"></i></a>
                                                        <ul class="dropdown">
                                                            <li><a href="index-2.html">Homepage Default</a></li>
                                                            <li><a href="index2.html">Homepage Animation</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Pages<i class="fa fa-angle-down"></i></a>
                                                        <ul class="dropdown">
                                                        <li><a href="about.html">About Us</a></li>
                                                            <li><a href="#">Teachers<i class="fa fa-angle-right"></i></a>
                                                                <ul class="dropdown submenu">
                                                                    <li><a href="teacher.html">Teachers V1</a></li>
                                                                    <li><a href="teacher2.html">Teachers V2</a></li>
                                                                    <li><a href="teacher-single.html">Teacher Single</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="testimonials.html">Testimonials</a></li>
                                                            <li><a href="faqs.html">Faqs</a></li>
                                                            <li><a href="404.html">404 Page</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Courses<i class="fa fa-angle-down"></i></a> 
                                                        <ul class="dropdown">
                                                            <li><a href="courses.html">Courses</a></li>
                                                            <li><a href="course-single.html">Course Single</a></li>
                                                            <li><a href="course-single-video.html">Course Single Video</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Events<i class="fa fa-angle-down"></i></a> 
                                                        <ul class="dropdown">
                                                            <li><a href="events.html">Events</a></li>
                                                            <li><a href="event-single.html">Event Single</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                                <!-- End Main Menu -->
                                                <!-- button -->
                                                <div class="button">
                                                    <a href="contact.html" class="btn"><i class="fa fa-pencil"></i>Apply Now</a>
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
                    
                    <!-- Slider Area -->
                    <section class="home-slider">
                        <div class="slider-active">
                            <!-- Single Slider -->
                            <div class="single-slider overlay" style="background-image:url('images/slider/slider-bg1.jpg')">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-12">
                                            <div class="slider-text">
                                                <h1>Better & Exellence <span>Academic </span> For next Generation</h1>
                                                <p>Our mission is to empower clients, colleagues, and communities to achieve aspirations while building lasting, caring relationships.</p>
                                                <div class="button">
                                                    <a href="courses.html" class="btn primary">Our Courses</a>
                                                    <a href="about.html" class="btn">About Ebenezer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Slider -->
                            <!-- Single Slider -->
                            <div class="single-slider overlay" style="background-image:url('images/slider/slider-bg2.jpg')" data-stellar-background-ratio="0.5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12">
                                            <div class="slider-text text-center">
                                                <h1>Better & Exellence <span>Moral</span> For the Better TANZANIA</h1>
                                                <p>Our mission is to empower clients, colleagues, and communities to achieve aspirations while building lasting, caring relationships.</p>
                                                <div class="button">
                                                    <a href="courses.html" class="btn primary">Our Courses</a>
                                                    <a href="about.html" class="btn">About Ebenezer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Slider -->
                            <!-- Single Slider -->
                            <div class="single-slider overlay" style="background-image:url('images/slider/slider-bg3.jpg')" data-stellar-background-ratio="0.5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8 offset-lg-4 col-md-8 offset-md-4 col-12">
                                            <div class="slider-text text-right">
                                                <h1><span>Academic</span> & <span>Moral </span> Exellence </h1>
                                                <p>Our mission is to empower clients, colleagues, and communities to achieve aspirations while building lasting, caring relationships.</p>
                                                <div class="button">
                                                    <a href="courses.html" class="btn primary">Our Courses</a>
                                                    <a href="about.html" class="btn">About Ebenezer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Slider -->
                        </div>
                    </section>
                    <!--/ End Slider Area -->
                    
                    <!-- Features -->
                    <section class="our-features section" id="lab">
                        <div class="row">
                            <div class="col-12">
                                    <div class="section-title">
                                            <h2>Our Science  <span>Labaratory</span> Galley</h2>  
                                        </div>
                                <div class="event-slider">
                                    <!-- Single Event -->
                                    <div class="single-event">
                                        <div class="head overlay">
                                            <img src="{{ asset('images/events/event1.jpg') }}" alt="#">
                                            <a href="{{ asset('images/events/event1.jpg') }}" data-fancybox="photo" class="btn"></a>
                                        </div>
                                        <div class="event-content">
                                            <div class="title">
                                            <h4><a href="#lab">Chemistry Labaratory</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ End Single Event -->
                                    <!-- Single Event -->
                                    <div class="single-event">
                                        <div class="head overlay">
                                            <img src="{{ asset('images/events/event2.jpg') }}" alt="#">
                                            <a href="{{ asset('images/events/event2.jpg') }}" data-fancybox="photo" class="btn"></a>
                                        </div>
                                        <div class="event-content">
                                             <div class="title">
                                            <h4><a href="#lab">Physics labaratory</a></h4>
                                             </div>
                                        </div>
                                    </div>
                                    <!--/ End Single Event -->
                                    <!-- Single Event -->
                                    <div class="single-event">
                                        <div class="head overlay">
                                            <img src="{{ asset('images/events/event3.jpg') }}" alt="#">
                                            <a href="{{ asset('images/events/event3.jpg') }}" data-fancybox="photo" class="btn"></a>
                                        </div>
                                        <div class="event-content">
                                            <div class="title">
                                                <h4><a href="#lab">Biology labaratory</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ End Single Event -->
                                    <!-- Single Event -->
                                    <div class="single-event">
                                        <div class="head overlay">
                                            <img src="{{ asset('images/events/event3.jpg') }}" alt="#">
                                            <a href="{{ asset('images/events/event3.jpg') }}" data-fancybox="photo" class="btn"><i ></i></a>
                                        </div>
                                        <div class="event-content">
                                            <div class="title">
                                                <h4><a href="#lab">Computer labaratory</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ End Single Event -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ End Events -->
                    </section>
                    <!-- End Features -->
             
                    <!-- Enroll -->
                    <section class="enroll overlay section" style="background-image:url('images/slider/slider-bg3.jpg')" data-stellar-background-ratio="0.5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <!-- Single Enroll -->
                                            <div class="enroll-form">
                                                <div class="form-title">
                                                    <h2>Subscribe Today to Be updated </h2>
                                                </div>
                                                <!-- Form -->

                                                <form class="form" action="#">
                                                   
                                                    <div class="form-group">
                                                        <label>Enter Your Email</label>
                                                        <input name="email" type="email" placeholder="example@mail.com">
                                                    </div>
                                                    <div class="form-group button">
                                                        <button type="submit" class="btn">Subscribe Now</button>
                                                    </div>
                                                </form>

                                            {{-- {!! Form::open(['method'=>'POST']) !!}
                                                <div class="form-group">
                                                {!! Form::label('email', 'Enter Your Email:') !!}
                                                <hr/>
                                                {!! Form::email('email', null, ['class'=>'form-control','placeholder'=>'example@mail.com'] )!!}
                                                </div>
                                                <div class="form-group button">
                                                    {!! Form::submit('SUBSCRIBE', ['class'=>'btn']) !!}
                                               </div>
                                               {!! Form::close() !!} --}}
                                                <!--/ End Form -->
                                            </div>
                                            <!-- Single Enroll -->
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="enroll-right">
                                                <div class="section-title">
                                                    <h2>We Have More than 450+ Students With more than 50+ permanent employed workers (teachers and non teachers)</h2>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <!-- Skill Main -->
                                            <div class="skill-main">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="0.8s">
                                                        <!-- Single Skill -->
                                                        <div class="single-skill">
                                                            <div class="circle" data-value="0.7" data-size="130">
                                                                <strong>450++</strong>
                                                            </div>
                                                            <h4>Students</h4>
                                                        </div>
                                                        <!--/ End Single Skill -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="1s">
                                                        <!-- Single Skill -->
                                                        <div class="single-skill">
                                                            <div class="circle" data-value="0.9" data-size="130">
                                                                <strong>200+</strong>
                                                            </div>
                                                            <h4>Girls</h4>
                                                        </div>
                                                        <!--/ End Single Skill -->
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="1.2s">
                                                        <!-- Single Skill -->
                                                        <div class="single-skill">
                                                            <div class="circle" data-value="0.8" data-size="130">
                                                                <strong>250+</strong>
                                                            </div>
                                                            <h4>Boys</h4>
                                                        </div>
                                                        <!--/ End Single Skill -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/ End Skill Main -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--/ End Enroll -->
            
                    <!-- Courses -->
                    <section class="courses section-bg section" id="best">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title">
                                        <h2>Our Best <span>Students</span></h2>
                                        <p>Students who perform better than other in their Form four final exam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="course-slider">
                                     
                                        <!-- Single Course -->
                                        <div class="single-course">
                                            <div class="course-head overlay">
                                                <img src="{{ asset('images/course/course2.jpg') }}" alt="#">
                            
                                            </div>
                                            <div class="single-content">
                                                 <h4>  <a href="#best"><span> John Deni</a></h4>
                                                <p>He has been the best students in the years of 2012 by archieve high ranking in regionaly as well as Nationaly due to its best perfomance
                                                  
                                                </p>
                                            </div>
                                            <div class="course-meta">
                                                <div class="meta-left">
                                                    <span><i class="fa fa-users"></i>25 Regionaly </span>
                                                    <span><i class="fa fa-users"></i>245 Nationaly </span>
                                                </div>
    
                                            </div>
                                        </div>
                                        <!--/ End Single Course -->
                                        <!-- Single Course -->
                                        <div class="single-course">
                                            <div class="course-head overlay">
                                                <img src="{{ asset('images/course/course3.jpg') }}" alt="#">
                                            
                                            </div>
                                            <div class="single-content">
                                                <h4>  <a href="#best"><span>Ulimboka Kinje</span></a></h4>
                                                <p>He has been the best students in the years of 2013 by archieve high ranking in regionaly as well as Nationaly due to its best perfomance</p>
                                            </div>
                                            <div class="course-meta">
                                                <div class="meta-left">
                                                    <span><i class="fa fa-users"></i>49 Regionaly</span>
                                                    <span><i class="fa fa-users"></i>2 Nationaly</span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!--/ End Single Course -->
                                        <!-- Single Course -->
                                        <div class="single-course">
                                            <div class="course-head overlay">
                                                <img src="{{ asset('images/course/course1.jpg') }}" alt="#">
                                            
                                            </div>
                                            <div class="single-content">
                                                <h4>  <a href="#best"><span>Juma Kadamumnasi</span></a></h4>
                                                <p>He has been the best students in the years of 2014 by archieve high ranking in regionaly as well as Nationaly due to its best perfomance</p>
                                            </div>
                                            <div class="course-meta">
                                                <div class="meta-left">
                                                    <span><i class="fa fa-users"></i>36 Regionaly</span>
                                                    <span><i class="fa fa-users"></i>2 Nationaly</span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!--/ End Single Course -->
                                        <!-- Single Course -->
                                        <div class="single-course">
                                            <div class="course-head overlay">
                                                <img src="{{ asset('images/course/course2.jpg') }}" alt="#">
                                            
                                            </div>
                                            <div class="single-content">
                                                <h4>  <a href="#best">  <span>Julius Kaesari</span></a></h4>
                                                <p>He has been the best students in the years of 2015 by archieve high ranking in regionaly as well as Nationaly due to its best perfomance</p>
                                            </div>
                                            <div class="course-meta">
                                                <div class="meta-left">
                                                    <span><i class="fa fa-users"></i>20 Regionaly</span>
                                                    <span><i class="fa fa-users"></i>1 Nationaly</span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!--/ End Single Course -->
            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--/ End Courses -->	
                    
                    <!-- Team -->
                    <section class="team section">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title">
                                        <h2>Our Awesome <span>Staffs</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12">
                                    <!-- Single Team -->
                                    <div class="single-team">
                                        <img src="{{ asset('images/team/team1.jpg') }}" alt="#">
                                        <div class="team-hover">
                                            <h4>Richard Makweta<span>Headmaster</span></h4>
                                            <p>cumque nihil impedit quo minusid quod maxime placeat facere possimus</p>
                                            
                                        </div>
                                    </div>
                                    <!--/ End Single Team -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <!-- Single Team -->
                                    <div class="single-team ">
                                        <img src="{{ asset('images/team/team2.jpg') }}" alt="#">
                                        <div class="team-hover">
                                            <h4 class="name">Ian Harvey<span class="work">Web Programmer</span></h4>
                                            <p>cumque nihil impedit quo minusid quod maxime placeat facere possimus</p>
                                           
                                        </div>
                                    </div>
                                    <!--/ End Single Team -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <!-- Single Team -->
                                    <div class="single-team">
                                        <img src="{{ asset('images/team/team3.jpg') }}" alt="#">
                                        <div class="team-hover">
                                            <h4 class="name">Lusfat Roman<span class="work">Software Engineer</span></h4>
                                            <p>cumque nihil impedit quo minusid quod maxime placeat facere possimus</p>
                                            
                                        </div>
                                    </div>
                                    <!--/ End Single Team -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <!-- Single Team -->
                                    <div class="single-team">
                                        <img src="{{ asset('images/team/team4.jpg') }}" alt="#">
                                        <div class="team-hover">
                                            <h4 class="name">Nalpamb Bold<span class="work">JS Developer</span></h4>
                                            <p>cumque nihil impedit quo minusid quod maxime placeat facere possimus</p>
                                           
                                        </div>
                                    </div>
                                    <!--/ End Single Team -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--/ End Team -->
                    
                    <!-- Testimonials -->
                    <section class="testimonials overlay section" style="background-image:url('images/slider/slider-bg3.jpg')" data-stellar-background-ratio="0.5">
                        <div class="container">                            
                            <div class="row">
                                    <div class="col-12">
                                            <div class="section-title">
                                                <h2>Testimonials</h2>
                                            </div>
                                        </div>
                                <div class="col-12">
                                    <div class="testimonial-slider">
                                        <!-- Single Testimonial -->
                                        <div class="single-testimonial">
                                            <img src="{{ asset('images/testimonial1.jpg') }}" alt="#">
                                            <div class="main-content">
                                                <h4 class="name">Sanavce Faglane</h4>
                                                <p>Nulla cursus a metus vel placerat. Fusce malesuada volutpat pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit libero, viverra quis euismod vel pellentesque at tortor. Donec</p>
                                            </div>
                                        </div>
                                        <!--/ End Single Testimonial -->
                                        <!-- Single Testimonial -->
                                        <div class="single-testimonial">
                                            <img src="{{ asset('images/testimonial2.jpg') }}" alt="#">
                                            <div class="main-content">
                                                <h4 class="name">Jansan Kate</h4>
                                                <p>Nulla cursus a metus vel placerat. Fusce malesuada volutpat pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit libero, viverra quis euismod vel pellentesque at tortor. Donec</p>
                                            </div>
                                        </div>
                                        <!--/ End Single Testimonial -->
                                        <!-- Single Testimonial -->
                                        <div class="single-testimonial">
                                            <img src="{{ asset('images/testimonial3.jpg') }}" alt="#">
                                            <div class="main-content">
                                                <h4 class="name">Sanavce Faglane</h4>
                                                <p>Nulla cursus a metus vel placerat. Fusce malesuada volutpat pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit libero, viverra quis euismod vel pellentesque at tortor. Donec</p>
                                            </div>
                                        </div>
                                        <!--/ End Single Testimonial -->
                                        <!-- Single Testimonial -->
                                        <div class="single-testimonial">
                                            <img src="{{ asset('images/testimonial4.jpg') }}" alt="#">
                                            <div class="main-content">
                                                <h4 class="name">Jansan Kate</h4>
                                                <p>Nulla cursus a metus vel placerat. Fusce malesuada volutpat pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit libero, viverra quis euismod vel pellentesque at tortor. Donec</p>
                                            </div>
                                        </div>
                                        <!--/ End Single Testimonial -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--/ End Testimonials -->
                    
                    <!-- Events -->
                    <section class="events section">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title">
                                        <h2>Upcoming <span>Events</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="event-slider">
                                        <!-- Single Event -->
                                        <div class="single-event">
                                            <div class="head overlay">
                                                <img src="{{ asset('images/events/event1.jpg') }}" alt="#">
                                                <a href="{{ asset('images/events/event1.jpg') }}" data-fancybox="photo" class="btn"><i ></i></a>
                                            </div>
                                            <div class="event-content">
                                                <div class="meta"> 
                                                    <span><i class="fa fa-calendar"></i>05 June 2018</span>
                                                </div>
                                                <h4><a href="event-single.html">Parents Day</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt</p>
                                                <div class="button">
                                                    <a href="event-single.html" class="btn">Join Event</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ End Single Event -->
                                        <!-- Single Event -->
                                        <div class="single-event">
                                            <div class="head overlay">
                                                <img src="{{ asset('images/events/event2.jpg') }}" alt="#">
                                                <a href="{{ asset('images/events/event2.jpg') }}" data-fancybox="photo" class="btn"></a>
                                            </div>
                                            <div class="event-content">
                                                <div class="meta">
                                                    <span><i class="fa fa-calendar"></i>03 July 2018</span>
                                                </div>
                                                <h4><a href="event-single.html">Graduation ceremony</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt</p>
                                                <div class="button">
                                                    <a href="event-single.html" class="btn">Join Event</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ End Single Event -->
                                        <!-- Single Event -->
                                        <div class="single-event">
                                            <div class="head overlay">
                                                <img src="{{ asset('images/events/event3.jpg') }}" alt="#">
                                                <a href="{{ asset('images/events/event3.jpg') }}" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="event-content">
                                                <div class="meta">
                                                    <span><i class="fa fa-calendar"></i>15 Dec 2018</span>
                                                </div>
                                                <div class="title">
                                                    <h4><a href="event-single.html">Ebenezer Day</a></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt</p>
                                                </div>
                                                <div class="button">
                                                    <a href="event-single.html" class="btn">Join Event</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ End Single Event -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--/ End Events -->
                    
                    <!-- Fun Facts -->
                    <div class="fun-facts overlay" data-stellar-background-ratio="0.5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-6">
                                    <!-- Single Fact -->
                                    <div class="single-fact">
                                        <i class="fa fa-institution"></i>
                                        <div class="number"><span class="counter">80</span>k+</div>
                                        <p>Active Cources</p>
                                    </div>
                                    <!--/ End Single Fact -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <!-- Single Fact -->
                                    <div class="single-fact">
                                        <i class="fa fa-graduation-cap"></i>
                                        <div class="number"><span class="counter">33</span>k+</div>
                                        <p>Active Students</p>
                                    </div>
                                    <!--/ End Single Fact -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <!-- Single Fact -->
                                    <div class="single-fact">
                                        <i class="fa fa-video-camera"></i>
                                        <div class="number"><span class="counter">278</span>+</div>
                                        <p>Video Cources</p>
                                    </div>
                                    <!--/ End Single Fact -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <!-- Single Fact -->
                                    <div class="single-fact">
                                        <i class="fa fa-trophy"></i>
                                        <div class="number"><span class="counter">308</span>+</div>
                                        <p>Awards Won</p>
                                    </div>
                                    <!--/ End Single Fact -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ End Fun Facts -->
                    
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
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Home</a></li>
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
                                                    <img src="{{ asset('images/blog/blog1.jpg') }}" alt="#">
                                                    <h4><a href="blog-single.html">Our Teacher the best Link to Savc</a></h4>
                                                    <p>Nunc purus orci, blandit condimentum rhoncus vels</p>
                                                </div>
                                                <div class="single-news">
                                                    <img src="{{ asset('images/blog/blog2.jpg') }}" alt="#">
                                                    <h4><a href="blog-gsingle.html">Student Have the best Link to Ronae</a></h4>
                                                    <p>Nunc purus orci, blandit condimentum rhoncus vels</p>
                                                </div>
                                                <div class="single-news">
                                                    <img src="{{ asset('images/blog/blog3.jpg') }}" alt="#">
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

