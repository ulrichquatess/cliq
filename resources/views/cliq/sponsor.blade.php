	@extends('layouts.main2')
@section('title')
	Cliq Festival | A Word To Patrons
@endsection	
@section('content')
<!--ABOUT THE ORGANIZERS-->
<?php 
	$page23 = App\Page::find(23);
	?>
<section id="aboutTheOrganizers">
	<!--HEADER-->
	<header class="blue">
		<div id="titleBar" class="container-fluid">
			<div class="row">
				<div id="pageTabTitle" class="headerBlock col-md-2">
					<h4>{{ $page23->title }}</h4>
				</div>
				<div id="pageTitle" class="headerBlock col-md-10">
					<h3><span class="yellow">{{ $page23->sub_title }}</span></h3>
				</div>
			</div>
		</div>			
	</header>
	<!--PAGE CONTENT-->
	<div class="container" class="pageContent" style="font-family: Arial, sans-serif; font-size: 15px;">
		<div class="container" class="pageContent">
			<div class="row well">
				<div class="ulrich col-md-8">
					<p>{!! $page23->content !!}</p>
					<h1 class="text-sblue fw7">{{ $page23->option }}</h1>
					<h1 class="text-sblue fw7">{{ $page23->option1 }}</h1>
				</div>
				<div class="col-md-4">
					<a href="#"><img src="{{ asset('images/page/' .$page23->image)}}" class="responsiveImg" /></a>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection