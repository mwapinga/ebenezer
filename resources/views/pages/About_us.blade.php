@extends('layouts.main')

@section('content')  

  <!-- Start Breadcrumbs -->
      <section class="breadcrumbs overlay">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <h2>About Pages</h2>
                      <ul class="bread-list">
                          <li><a href="index-2.html">Home<i class="fa fa-angle-right"></i></a></li>
                          <li class="active"><a href="about.html">about</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </section>
      <!--/ End Breadcrumbs -->
      
      <!-- About US -->
      <section class="about-us section">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-12">
                      <div class="#">
                        <div class="mapouter"><div class="gmap_canvas">
                        <iframe width="700" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q=Iringa%20Ebenezer%20Seminary&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe><a href="https://www.pureblack.de">webdesign agenturen</a>
                        </div><style>.mapouter{text-align:right;height:600px;width:700px;}.gmap_canvas {overflow:hidden;background:none!important;height:600px;width:700px;}
                        </style></div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-12">
                      <div class="about-text">
                          <h2>About Our Ebenezer</h2>
                          <p>Established in 2007, Ebenezer Seminary is an innovative, religious secondary school with a mission to ignite a passion for learning and to inspire our students to become self-motivated, enthusiastic participants in their education. </p>
                          <p>We honor the uniqueness of each individual and seek students from diverse backgrounds in order to build a strong, inclusive community and prepare students for lives in a multicultural society. Ebenezer Seminary has been at the forefront 
                            of educational excellence since our founding, pioneering innovations such as block scheduling, a nationally regarded service learning program </p>
                          <div class="button">
                              <a href="#" class="btn">Our Courses</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--/ End About US -->
      
                          <!-- start mission vision values -->
                          <div class="fun-facts overlay" data-stellar-background-ratio="0.5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-7 col-7">
                                            <!-- Single Fact -->
                                            <div class="single-fact">
                                                <span><i class="fa fa-paper-plane"></i></span>
                                                <div class="number"><span>OUR MISSION</span></div>
                                                <p>Ebenezer Seminary seeks to ignite a passion 
                                                     for learning, inspiring its students
                                                     to become self-motivated, enthusiastic 
                                                     participants in their education.</p>
                                            </div>
                                            <!--/ End Single Fact -->
                                        </div>
                                        <div class="col-lg-4 col-md-7 col-7">
                                            <!-- Single Fact -->
                                            <div class="single-fact">
                                                <i class="fa fa-eye"></i>
                                                <div class="number"><span>OUR VISSION</span></div>
                                                <p>Ebenezer Seminary prepares students to 
                                                    understand, contribute to, and succeed 
                                                    in a rapidly changing society, thus making
                                                     the world a better and more just place.</p>
                                            </div>
                                            <!--/ End Single Fact -->
                                        </div>
                                         
                                        <div class="col-lg-4 col-md-7 col-7">
                                            <!-- Single Fact -->
                                            <div class="single-fact">
                                                <i class="fa fa-diamond"></i>
                                                <div class="number"><span>OUR VALUES</span></div>
                                                <p>Learning is an active, joyful process of discovery
                                                    where students are challenged to ask essential 
                                                      questions, solve problems in disciplined
                                                            and creative ways</p>
                                            </div>
                                            <!--/ End Single Fact -->
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <!-- end mission vision values -->

        
                  <!-- staff start -->
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
                <!-- staff loop start --> 
                            @foreach($stafs as $staf)
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-team">
                                   <img src="{{ URL::asset('images/'.$staf->photo->photo_tag.'.jpg') }}" alt="">
                                    <div class="team-hover">
                                        <h4>{{ $staf->name }} {{ $staf->surname }}<span>{{ $staf->post }}</span></h4>  
                                    </div>
                                </div>
                            </div>
                            @endforeach
                          <!-- staff loop end -->  
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ End staff -->




      @stop