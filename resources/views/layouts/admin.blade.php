<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ebenezer Seminary-Admin</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation,computer eEducation">

    <meta name="keyword" content="eEducation html template, university template, college template, school template, online eEducation template, tution center template">
 
    <!-- GOOGLE FONT -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link href=" {{ url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700') }} " rel="stylesheet">
    <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js') }}"></script>
    <script src="{{ url('https://code.jquery.com/jquery-1.12.4.js') }}"></script>
     <script src="{{ url('https://code.jquery.com/ui/1.12.1/jquery-ui.js') }}"></script>
   
    <link rel="stylesheet" href="{{ asset('ast/css/font-awesome.min.css') }}">

    <link href="{{ asset('asst/css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('asst/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('asst/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('asst/css/style-mob.css') }}" rel="stylesheet" />
 
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">

              <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                </a>
            </div>
            <div class="col-md-6 col-sm-6 mob-hide">
                    <a href="{{ url('/ebeadmin') }}"><h2>EBENEZER SEMINARY ADMIN DASHBOARD</h2></a>
            </div>
            <!--== NOTIFICATION ==-->
<div class="col-md-2 tab-hide">
       <div class="top-not-cen">
      
          </div>
            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="asst/images/user/6.png" alt="" />
                 <@php
                    if(!isset(Cache::get('userid')->name))  
                    {
                      echo "John Mwapinga";  
                    }
                    else{
                     echo $name = Cache::get('userid')->name; 
                    }
                 @endphp

                   <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="admin-panel-setting.html" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
              </div>
            </div>
          </div>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                 
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="#" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li>
                        <li><a href="admin-setting.html"><i class="fa fa-cogs" aria-hidden="true"></i> Site Setting</a>
                        </li>

                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-user-all.html">All Users</a>
                                    </li>
                                    <li><a href="admin-user-add.html">Add New user</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                          <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar" aria-hidden="true"></i> Blogs</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ url('blog') }}">All Posts</a>
                                    </li>
                                    <li><a href="{{ url('blog/create') }}">Create New Post</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                         <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar" aria-hidden="true"></i> Events</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ url('event') }}">All Events</a>
                                    </li>
                                    <li><a href="{{ url('event/create') }}">Create New Events</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Slider</a>
                         <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ url('slide') }}">All Slide</a>
                                    </li>
                                    <li><a href="{{ url('slide/create') }}">Add New Slides</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                          <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Best Students</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ url('beststudent') }}">All Best Students</a>
                                    </li>
                                    <li><a href="{{ url('beststudent/create') }}">Add New Best Students</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                         <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Staffs </a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ url('staff') }}">All  Staffs</a>
                                    </li>
                                    <li><a href="{{ url('staff/create') }}">Add New Staff</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)"" class="collapsible-header"><i class="fa fa-bars" aria-hidden="true"></i> Quick links</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>

                                    <li><a href="{{ url('portfolio') }}">Portifolio Panel</a></li>
                                    <li><a href="{{ url('report') }}">Add Report</a></li>
                                    <li><a href="{{ url('testimonial') }}">Testimonnial Panel</a></li>

                                </ul>
                        </div>
                        
                            <br ><br ><br ><br ><br ><br ><br ><br ><br ><br >
                            <br ><br ><br ><br ><br ><br ><br ><br >
                       
                    
                </div>
            </div>

            <div class="sb2-2">
                <div class="sb2-2-2">
                </div>

                  @yield('content')

    <script src="{{ asset('asst/js/main.min.js') }}"></script>
    <script src="{{ asset('asst/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asst/js/materialize.min.js') }}"></script>
    <script src="{{ asset('asst/js/custom.js') }}"></script>
     <script src="{{ asset('asst/js/personal.js') }}"></script>

</body>

</html>