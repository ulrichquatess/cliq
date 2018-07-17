@extends('layouts.main')
@section('title')
	Cliq Festival | A propos de l'organisateur
@endsection	
@section('content')
<!--ABOUT THE ORGANIZERS-->
<?php 
	$page11 = App\Page::find(11);
	$menu1 = App\Menu::find(1);
	$setting1 = App\Setting::find(1);
	?>
<section id="aboutTheOrganizers">
	<!--HEADER-->
	<header class="blue">
		<div id="cliqHeaderLogo">
			<img id="cliqLogo" src="{{ asset('images/menu/' .$menu1->image)}}" />
			<p>media &bull; events &bull; advertising &bull; artists management</p>
		</div>
		<div id="titleBar" class="container-fluid">
			<div class="row">
				<div id="pageTabTitle" class="headerBlock col-md-2">
					<h4>{{ $page11->title_fr }}</h4>
				</div>
				<div id="pageTitle" class="headerBlock col-md-10">
					<h3><span class="yellow">{{ $page11->sub_title_fr }}</span></h3>
				</div>
			</div>
		</div>			
	</header>
	<!--PAGE CONTENT-->
	<div class="container" class="pageContent" style="font-family: Arial, sans-serif; font-size: 15px;">
		<div class="row well">
			<div class="ulrich col-md-7">
				<p>{!! $page11->content_fr !!}</p>
			</div>
			<div class="col-md-3" style="margin-top: 30px; margin-left: 90px;">
				<a href="#"><img src="{{ asset('images/page/' .$page11->image)}}" class="responsiveImg" /></a>
			</div>				
		</div>	
          </div>
          </section>
@endsection