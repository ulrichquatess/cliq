@extends('layouts.main2')
@section('title')
	Cliq Festival | A Word To Sponsors
@endsection	
@section('content')
<!--ABOUT THE ORGANIZERS-->
<?php 
	$page24 = App\Page::find(24);
	?>
<section id="aboutTheOrganizers">
	<!--HEADER-->
	<header class="blue">
		<div id="titleBar" class="container-fluid">
			<div class="row">
				<div id="pageTabTitle" class="headerBlock col-md-2">
					<h4>{{ $page24->title }}</h4>
				</div>
				<div id="pageTitle" class="headerBlock col-md-10">
					<h3><span class="yellow">{{ $page24->sub_title }}</span></h3>
				</div>
			</div>
		</div>			
	</header>
	<!--PAGE CONTENT-->
	<div class="container" class="pageContent">
		<div class="container" class="pageContent">
			<div class="row well">
				<div class="ulrich col-md-8">
					<p>{!! $page24->content !!}</p>
					<h1 class="text-sblue fw7">{{ $page24->option }}</h1>
					<h1 class="text-sblue fw7">{{ $page24->option1 }}</h1>
				</div>
				<div class="col-md-4">
					<a href="#"><img src="{{ asset('images/page/' .$page24->image)}}" class="responsiveImg" /></a>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection