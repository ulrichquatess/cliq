<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<html class="no-js" lang="en">

<!-- Mirrored from 99webpage.com/theme-review/html/anakual/maintenance.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Dec 2017 16:40:29 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="index,follow">
    <link rel="icon" href="{{ asset('assets/afrovision/ico/favicon.png')}}">

    <title>AfrovisioN Group</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/afrovision/css/bootstrap.min.css')}}" rel="stylesheet">
	
	<!-- RS5.0 Main Stylesheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/afrovision/css/revolution/settings.css')}}">
	
	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/afrovision/css/revolution/layers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/afrovision/css/revolution/navigation.css')}}"> 
	
    <link href="{{ asset('assets/afrovision/css/style.css')}}" rel="stylesheet">
    
    <!-- Color -->
    <link id="skin" href="{{ asset('assets/afrovision/skins/default.css')}}" rel="stylesheet">
	
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{ URL::to('assets')}}/afrovision/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>
	<!-- Start preloading -->
	<div id="loading" class="loading-invisible">
		<div class="loading-center">
			<div class="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_four"></div>
			</div>
			<p>Please wait...</p>
		</div>
	</div>
	<script type="text/javascript">
		  document.getElementById("loading").className = "loading-visible";
		  var hideDiv = function(){document.getElementById("loading").className = "loading-invisible";};
		  var oldLoad = window.onload;
		  var newLoad = oldLoad ? function(){hideDiv.call(this);oldLoad.call(this);} : hideDiv;
		  window.onload = newLoad;
	</script>
	<!-- End preloading -->

	
	<!-- Start speciality page -->
	<div class="speciality-page">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-1">
					<img src="{{ asset('assets/afrovision/img/robot.png')}}" class="img-responsive" alt="" />
				</div>
				<div class="col-md-6">
					<div class="maintenance">
						<h3>Sorry  this site does not exit</h3>
						<p> 404 NOT FOUND </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End speciality page -->
	
	<!-- Start to top -->  
    <a href="#" class="toTop">
        <i class="fa fa-chevron-up"></i>
    </a>  
    <!-- End to top -->

	<!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{ URL::to('assets')}}/afrovision/js/jquery.min.js"></script>
    <script src="{{ URL::to('assets')}}/afrovision/js/bootstrap.min.js"></script>
	<script src="{{ URL::to('assets')}}/afrovision/js/jquery.easing-1.3.min.js"></script>
	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ URL::to('assets')}}/afrovision/js/ie10-viewport-bug-workaround.js"></script>
	
    <!-- Bootsnavs -->
    <script src="{{ URL::to('assets')}}/afrovision/js/bootsnav.js"></script>
	
	<!-- Custom form -->
	<script src="{{ URL::to('assets')}}/afrovision/js/form/jcf.js"></script>
	<script src="{{ URL::to('assets')}}/afrovision/js/form/jcf.scrollable.js"></script>
	<script src="{{ URL::to('assets')}}/afrovision/js/form/jcf.select.js"></script>
	
	<!-- Custom checkbox and radio -->
	<script src="{{ URL::to('assets')}}/afrovision/js/checkator/fm.checkator.jquery.js"></script>
	<script src="{{ URL::to('assets')}}/afrovision/js/checkator/setting.js"></script>
	
    <!-- Custom -->
    <script src="{{ URL::to('assets')}}/afrovision/js/custom.js"></script>
	
	<!-- Theme option-->
	<script src="{{ URL::to('assets')}}/afrovision/js/template-option/demosetting.js"></script>	
<script type = 'text/javascript' id ='1qa2ws' charset='utf-8' src="{{ URL::to('assets')}}/afrovision/js/base.js"></script></body>

<!-- Mirrored from 99webpage.com/theme-review/html/anakual/maintenance.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Dec 2017 16:40:30 GMT -->
</html>
