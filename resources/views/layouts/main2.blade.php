<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="" type="image/x-icon" />
        <link rel="shortcut icon" href="{{ asset('assets/img/cliqLogo.png')}}" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content=""/>
        <meta name="designer" content="Ulrich Quatess" />
        
        <title>@yield('title')</title>
        
        <!-- CSS (necessary for Bootstrap) -->
        <link href="{{ asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">

        
        <meta name="robots" content="noodp" />
        <link rel="canonical" href="" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="" />
        <meta property="og:title" content="" />
        <meta property="og:description" content="" />
        <meta property="og:url" content="" />
        <meta property="og:site_name" content="The Cliq Music Festival" />      
    </head>
    <body>
        <?php
            $setting = App\Setting::find(1);
            $page11 = App\Page::find(11);
            $page26 = App\Page::find(26);
        ?>
        <!--TOP BAR-->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class=""><a href="/">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="/about">About Us <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/aboutcliq">About Cliq</a></li>
                <li><a href="/problem">Problem Statement</a></li>
                <li><a href="/mission">Mission & Vision</a></li>
                <li><a href="/about">About Organizers</a></li>
                <li><a href="/festival">Cliq Festival 2017</a></li>
              </ul>
            </li>

         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Get Involved <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/patron">A word to Sponsors</a></li>
                <li><a href="/consumer">Consumer Profile</a></li>
                <li><a href="/sponsorship">Sponsorship</a></li>
                <li><a href="/sponsor">Patrons & Sponsors</a></li>
              </ul>
        </li>

            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Volunteers <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/cameroon">From Cameroon</a></li>
                <li><a href="/outcameroon">From Out of Cameroon</a></li>
              </ul>
            </li>

            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Artist <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/artists">Confirmed Artists 2018</a></li>
                <li><a href="/outcameroon">Artist Application</a></li>
              </ul>
            </li>

            <li><a href="/events">Events</a></li>

            <li><a href="/ticket">ticket</a></li>

            <li><a href="/projects">Project</a></li>

            <li><a href="/blogs">Blog</a></li>

            <li><a href="/contact">Contact Us</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/policy"><span ></span> Policy</a></li>
           <li>
               <a href="{{ $setting->twitter }}"><i class="fa fa-twitter"></i></a>
           </li>
           <li>
               <a href="{{ $setting->facebook }}"><i class="fa fa-facebook"></i></a>
           </li>
           <li>
               <a href="{{ $setting->youtube }}"><i class="fa fa-youtube"></i></a>
           </li>
          </ul>
          <ul class="nav navbar-nav">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="/about">Choose Language <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href=".fr">French</a></li>
              </ul>
            </li>
        </ul>
        </div>
      </nav>
                <!-- Here We Wld Write the body of the content -->

                 @yield('content')

                 <!--   FOOTER START================== --> 
                 <footer class="footer">
                     <div class="container">
                         <div class="row">
                         <div class="col-sm-4">
                             <h4 class="title">{{ $page26->option1 }}</h4>
                        <a href="/about" style="text-decoration: none; color: white;">
                             <p>{!! substr(strip_tags($page11->content), 0, 200) !!} {!! strlen(strip_tags($page11->content)) > 200 ? "...." : "" !!}</p>
                         </a>
                             <ul class="social-icon">
                                 <a href="{{ $setting->facebook }}" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                 <a href="{{ $setting->twitter }}" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                 <a href="{{ $setting->instagram }}" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                 <a href="{{ $setting->youtube }}" class="social"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                             </ul>
                         </div>
                         
                         <div class="col-sm-4">
                             <h4 class="title">{{ $page26->title }}</h4>
                             <div class="category">
                                 <a href="/projects">Projects</a>
                                 <a href="/blogs">Blog</a>
                                 <a href="/artists">Artist</a>
                                 <a href="/contact">Contact</a>          
                             </div>
                         </div>
                         <div class="col-sm-4">
                             <h4 class="title">{{ $page26->option }}</h4>
                             <p>{!! $page26->content !!}</p>
                             <ul class="payment">
                                <p>
                                 <li><a href="{{ $page26->sub_title }}">donate.com</a></li>
                             </p>
                             </ul>
                             </div>
                         </div>
                         <hr>
                         <div class="row text-center" style="text-decoration: none;"><a href="http://wokespot.com/" style="color: #fff;">Copyright © Build By Quatess</a></div>
                     </div> 
                 </footer>

                </section>

        
        <!-- jQuery (necessary for Bootstrap's JavaScript Plugins) -->
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>