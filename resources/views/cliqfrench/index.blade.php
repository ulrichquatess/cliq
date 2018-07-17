<!DOCTYPE html>
<html >
<head>
    <!--This Path Here COntains the path for the Php Controller Slide -->
  <?php  
    $menu = App\Menu::find(1);
    $slide1 = App\Slide::find(1);
    $slide2 = App\Slide::find(2);
    $slide3 = App\Slide::find(3);
  ?>
  <!-- Site made By Ulrich Quatess +237 654961515 -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{ asset('assets/img/cliqLogo.png')}}" type="image/x-icon">
  <meta name="description" content="Website Builder Description">
  <title>{{ $menu->name_fr}}</title>
  <link rel="stylesheet" href="{{ asset('assets/mobirise/mobirise-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/mobirise/tether.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/mobirise/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/mobirise/bootstrap-grid.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/mobirise/bootstrap-reboot.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/mobirise/animate.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/mobirise/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/mobirise/mbr-additional.css')}}" type="text/css">
</head>
<body>
  <section class="carousel slide cid-qVXz6Wommv" data-interval="false" id="slider1-w"> 

    <div class="full-screen">
        <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="4000">
            <ol class="carousel-indicators">
                <li data-app-prevent-settings="" data-target="#slider1-w" data-slide-to="0"></li>
                <li data-app-prevent-settings="" data-target="#slider1-w" class=" active" data-slide-to="1"></li>
                <li data-app-prevent-settings="" data-target="#slider1-w" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url('{{asset('images/slide/'.$slide2->image)}}');">
                    <div class="mbr-overlay"></div>
                    <div class="container container-slide">
                            <div class="image_wrapper">
                                <img src="{{asset('images/slide/'.$slide2->image)}}" style="opacity: 0;">
                                <div class="carousel-caption justify-content-center">
                                    <div class="col-10 align-center">
                                        <h2 class="mbr-fonts-style display-1">{{ $slide2->title_fr }}</h2>
                                        <p class="lead mbr-text mbr-fonts-style display-5">{!! $slide2->content_fr !!}
                                        </p>
                <div class="mbr-section-btn" buttons="0"><a class="btn btn-success display-4" href="/aboutcliqfr">Relier</a> <a class="btn  btn-white-outline display-4" href="/contact">Contact</a></div>
            </div></div></div></div></div>
            
            <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url('{{asset('images/slide/'.$slide3->image)}}');">
                            <div class="container container-slide">
                                <div class="image_wrapper">
                                    <div class="mbr-overlay"></div>
                                    <img src="{{asset('images/slide/'.$slide3->image)}}">
                                    <div class="carousel-caption justify-content-center">
                                        <div class="col-10 align-left">
                                            <h2 class="mbr-fonts-style display-1">{{ $slide3->title_fr }}</h2>
                                            <p class="lead mbr-text mbr-fonts-style display-5">{{ $slide3->content_fr }}</p>  
                                            <div class="mbr-section-btn" buttons="0"><a class="btn btn-success display-4" href="/aboutcliqfr">Relier</a> <a class="btn  btn-white-outline display-4" href="/contact">Contact</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<!--  This is the First Slider -->
            <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url('{{asset('images/slide/'.$slide1->image)}}');">
                <div class="container container-slide">
                    <div class="image_wrapper">
                        <div class="mbr-overlay"></div>
                        <img src="{{asset('images/slide/'.$slide1->image)}}">
                        <div class="carousel-caption justify-content-center">
                            <div class="col-10 align-right">
                                <h2 class="mbr-fonts-style display-1"></h2>
                                <p class="lead mbr-text mbr-fonts-style display-5"></p>                         
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--  End Of the First Slider -->            
        </div>
        <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-w"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">précédent</span></a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-w"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Prochain</span></a>
    </div></div>

</section>

  <script src="{{ asset('assets/mobirise/js/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/mobirise/js/popper.min.js')}}"></script>
  <script src="{{ asset('assets/mobirise/js/tether.min.js')}}"></script>
  <script src="{{ asset('assets/mobirise/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/mobirise/js/smooth-scroll.js')}}"></script>
  <script src="{{ asset('assets/mobirise/js/jquery.mb.ytplayer.min.js')}}"></script>
  <script src="{{ asset('assets/mobirise/js/jquery.viewportchecker.js')}}"></script>
  <script src="{{ asset('assets/mobirise/js/bootstrap-carousel-swipe.js')}}"></script>
  <script src="{{ asset('assets/mobirise/js/jquery.mb.vimeo_player.js')}}"></script>
  <script src="{{ asset('assets/mobirise/js/script.js')}}"></script>
  <script src="{{ asset('assets/mobirise/js/slidervideo/script.js')}}"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>