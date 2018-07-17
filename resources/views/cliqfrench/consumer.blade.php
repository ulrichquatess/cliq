@extends('layouts.main')
@section('title')
	Cliq Festival | Profil du consommateur
@endsection	
@section('content')
<!--Consumer Profile-->
<?php 
	$page14 = App\Page::find(14);
	
	?>
	<section id="aboutTheOrganizers">
		<!--HEADER-->
		<header class="blue">
			<div id="titleBar" class="container-fluid">
				<div class="row">
					<div id="pageTabTitle" class="headerBlock col-md-2">
						<h4>{{ $page14->title_fr }}</h4>
					</div>
					<div id="pageTitle" class="headerBlock col-md-10">
						<h3><span class="yellow">{{ $page14->sub_title_fr }}</span></h3>
					</div>
				</div>
			</div>			
		</header>
		<!--PAGE CONTENT-->
		<div class="container" class="pageContent" style="font-family: Arial, sans-serif; font-size: 15px;">
			<div class="container" class="pageContent">
				<div class="row well">
					<div class="ulrich col-md-6">
						<p>{!! $page14->content_fr !!}</p>
						<h4 class="text-sblue fw7">{{ $page14->option1_fr }}</h4>
					</div>
					<div class="col-md-6">
						<a href="#"><img src="{{ asset('images/page/' .$page14->image)}}" class="responsiveImg" /></a>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection