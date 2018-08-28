@extends('layouts.main')

@section('content')                                    
                     <!-- Slider Area -->
             {{--  @php
              $style[]= ('slider-text','slider-text text-center','slider-text text-right')
             @endphp  --}}
                  @if($slider)
                  <section class="home-slider">
                      <div class="slider-active">
                          <!-- starrt loop  Slider -->
                          @foreach($slider as $slide )
                          <div class="single-slider overlay" style="background-image:url('{{ URL::asset('images/'.$slide->photo->photo_tag)  }}')">
                              <div class="container">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8 col-12">
                                          {{--  @php
                                             $lenght = count($slide);
                                             @if( $lenght > $lenght-1)
                                          @endphp  --}}
                                          <div class= "slider-text text-center">

                                       <h1>{{ $slide->tags1 }}<span> {{ $slide->tags2 }} </span> {{ $slide->tags3 }}</h1>
                                       <p> {{ $slide->details }}</p>
                                              <div class="button">
                                                  <a href="{{url('About')}}" class="btn primary">About Ebenezer</a>
                                                  {{--  <a href="about.html" class="btn">About Ebenezer</a>  --}}
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          @endforeach
                          <!--/ End loop  Slider -->
                      </div>
                  </section>
                  @endif
                  <!--/ End Slider Area -->


                 <!--/ start labaratory -->
                  @if($lab)
                  <section class="our-features section" id="lab">
                      <div class="row">
                          <div class="col-12">
                                  <div class="section-title">
                                          <h2>Our   <span>School</span> Portfolio</h2>  
                                      </div>
                              <div class="event-slider">
                                  {{-- loop start --}}
                                  @foreach($lab as $labs)
                                  <div class="single-event">
                                      <div class="head overlay">
                              <img src="{{ URL::asset('images/'.$labs->photo->photo_tag) }}" alt="">
                                          <a href="{{ URL::asset('images/'.$labs->photo->photo_tag)  }}" data-fancybox="photo" class="btn"></a>
                                      </div>
                                      <div class="event-content">
                                          <div class="title">
                                          <h4><a href="#lab">{{ $labs->name }}</a></h4>
                                          </div>
                                      </div>
                                  </div>
                                  @endforeach
                                  {{-- end loop --}}
                                </div>
                             </div>
                           </div>
                         </div>
                      </section>
                   @endif
              <!--/ End labaratory -->
                  </section>
                  <!-- End Features -->
           
                  <!-- Enroll -->
                  <section class="enroll overlay section" style="background-image:url('images/slider-bg3.jpg')" data-stellar-background-ratio="0.5" id="sub">
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
                              <form class="form" method="POST" action="#"> 
                                 {{ csrf_field() }}  

                              <div class="form-group">
                             <label>Enter Your name</label>
                             <input name="name" type="text" placeholder="John Doe">
                              </div>
                              <div class="form-group">
                               <label>Enter Your Email</label>
                               <input id="email" name="email" type="email" placeholder="example@mail.com">
                              </div>
                              <div class="form-group button">
                              <button type="submit" class="btn">Subscribe Now</button>
                              </div>
                              </form>
                                         
                                          </div>
                                      </div>
                                      <div class="col-lg-6 col-12">
                                          <div class="enroll-right">
                                              <div class="section-title">
                                                  <h2>We Have More than 450+ Students With more than 50+ permanent employed workers (teachers and non teachers)</h2>
                                                  <p></p>
                                              </div>
                                          </div>
                                          <div class="skill-main">
                                              <div class="row">
                                                  <div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="0.8s">
                                                      <div class="single-skill">
                                                          <div class="circle" data-value="0.7" data-size="130">
                                                              <strong>450++</strong>
                                                          </div>
                                                          <h4>Students</h4>
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="1s">
                                                      <div class="single-skill">
                                                          <div class="circle" data-value="0.9" data-size="130">
                                                              <strong>200+</strong>
                                                          </div>
                                                          <h4>Girls</h4>
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="1.2s">
                                                      <div class="single-skill">
                                                          <div class="circle" data-value="0.8" data-size="130">
                                                              <strong>250+</strong>
                                                          </div>
                                                          <h4>Boys</h4>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </section>
                  <!--/ End Subsrcibe panel -->


             <!-- best students panel -->  
                 @if($bestdents)
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
                                      {{--  <!-- Best students loops -->  --}}
                                 @foreach ($bestdents as $dent )
                                      <div class="single-course">
                                          <div class="course-head overlay">
                                       <img src="{{ URL::asset('images/'.$dent->photo->photo_tag) }}" alt="">
    {{--   <img src="{{ $dent->photo?$dent->photo->photo_tag:'http://placehold.it/400X400' }}" alt="">  --}}                                            </div>
                                          <div class="single-content">
                                              <h4>  <a href="#best"><span> {{ $dent->name }}  {{  $dent->surname }}</span></a></h4>
                                              <p>Best student in the year of {{ $dent->year }} by archieving high ranking in regionaly as well as Nationaly due to its best perfomance in the O-Level final exam 
                                               (CSEE)</p>
                                          </div>
                                          <div class="course-meta">
                                              <div class="meta-left">
                                                  <span><i class="fa fa-users"></i>{{ $dent->Reglvl }} Regionaly</span>
                                                  <span><i class="fa fa-users"></i>{{ $dent->Natlvl }} Nationaly</span>
                                              </div>
                                              
                                          </div>
                                      </div>
                                                                             
                                      {{--  <!--/ End Best students loops -->  --}}
                                      @endforeach
                                  </div>
                              </div>
                          </div>
                      </div>
                  </section>
                  @endif
                 <!-- end best students panel--> 

                  
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


                  
                  <!-- Testimonials start -->
                  @if($test)
                  <section class="testimonials overlay section" style="background-image:url('images/slider-bg3.jpg')" data-stellar-background-ratio="0.5">
                      <div class="container">                            
                          <div class="row">
                                  <div class="col-12">
                                          <div class="section-title">
                                              <h2>Testimonials</h2>
                                          </div>
                                      </div>
                              <div class="col-12">
                                  <div class="testimonial-slider">
                                      <!-- start loop Testimonial -->
                                      @foreach($test as $tests)
                                      <div class="single-testimonial">
                                          <img src="{{ URL::asset('images/'.$tests->photo->photo_tag) }}" alt="">
                                          <div class="main-content">
                                              <h4 class="name"> {{ $tests->name }} {{ $tests->name }}   </h4>
                                              <p> {{ $tests->Testimonial }}</p>
                                          </div>
                                      </div>
                                      @endforeach
                                       <!-- end loop Testimonial -->
                                  </div>
                              </div>
                          </div>
                      </div>
                  </section>
                  @endif
                  <!--/ End Testimonials -->



                       
                  <!-- Events  start -->
                  @if($event)
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
                                      <!-- start loop Event -->
                                      @foreach($event as $events)
                                      <div class="single-event">
                                          <div class="head overlay">
                                              <img src="{{ URL::asset('images/'.$events->photo->photo_tag) }}" alt="">
                                              <a href="{{ URL::asset('images/'.$events->photo->photo_tag) }}" data-fancybox="photo" class="btn"><i ></i></a>
                                          </div>
                                          <div class="event-content">
                                              <div class="meta"> 
                                                  <span><i class="fa fa-calendar"></i> {{ $events->date }}</span>
                                              </div>
                                              <h4><a href="event-single.html">{{ $events->name }}</a></h4>
                                              <p>{{ $events->details }}</p>
                                              <div class="button">
                                                  <a href="#sub"class="btn">Subsrcibe To Event</a>
                                              </div>
                                          </div>
                                      </div>
                                      @endforeach
                                      <!--/ End loop Event -->
                                     
                                  </div>
                              </div>
                          </div>
                      </div>
                  </section>
                  @endif
                  <!--event its over-->

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


                 
                 <!--/ Blog start  --> 
           @if($news)
           <section class="blog section">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="section-title">
                          <h2>Latest <span>News</span></h2>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                      <div class="blog-slider">
                          <!--  Blog loop start -->
                          @foreach($news as $new)
                          <div class="single-blog">
                              <div class="blog-head overlay">
                                  <!-- <div class="date">
                                      <p><span></span><p/>
                                  </div> -->
                                  <img src="{{ URL::asset('images/'.$new->photo->photo_tag) }}" alt="#">
                              </div>
                              <div class="blog-content">
                                  <h4 class="blog-title"><a href="blog-single.html">{{$new->header}}</a></h4>
                                  <div class="blog-info">
                                      <a href="#"><i class="fa fa-user"></i>By: {{$new->user->name}}</a>
                                      <a href="#"><i class="fa fa-list"></i>Academic</a>
                                      <a href="#"><i class="fa fa-calendar"></i>{{ $new->date->diffForHumans() }}</a>
                                  </div>
                                  <p> {!! str_limit($new->Body) !!} </p>
                                  <div class="button">
                                      <a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
                                  </div>
                              </div>
                          </div>
                          @endforeach
                          <!-- End Blog loop -->      
                      </div>
                  </div>
              </div>
          </div>
      </section>
      @endif
      <!--/ End Blogs -->

              
            
@stop