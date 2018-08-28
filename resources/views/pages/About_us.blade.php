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
                      <div class="single-image overlay">
                          <img src="images/about.jpg" alt="#">
                          <a href="https://www.youtube.com/watch?v=UalTfOIDQ7M" class="btn video-popup mfp-fade"><i class="fa fa-play"></i></a>
                      </div>
                  </div>
                  <div class="col-lg-6 col-12">
                      <div class="about-text">
                          <h2>About Our Education</h2>
                          <p>As marketing professionals in the experiential world, we have become accusto to the idea of an ever evolving industry. Brands today are moving away from purely face to face physical experiences, and bringing their essence to life, not only through digital immersion creativity but through new technology as well including Virtual Reality.</p>
                          <p>face physical experiences, and bringing their essence to life, not only through digital immersion creativity but through new technology as well including Virtual Reality As marketing professionals in the experiential world, we have become accusto to the idea of an ever evolving industry. Brands today are moving away from purely face to face physical experiences,</p>
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
                                   <img src="{{ URL::asset('images/'.$staf->photo->photo_tag) }}" alt="">
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