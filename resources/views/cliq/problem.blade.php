@extends('layouts.main2')
@section('title')
	Cliq Festival | Problem Statement
@endsection	
@section('content')
<!--ABOUT THE ORGANIZERS-->
<?php 
	$page12 = App\Page::find(12);
	?>
<section id="aboutTheOrganizers">
	<!--HEADER-->
	<header class="blue">
		<div id="titleBar" class="container-fluid">
			<div class="row">
				<div id="pageTabTitle" class="headerBlock col-md-2">
					<h4>{{ $page12->title }}</h4>
				</div>
				<div id="pageTitle" class="headerBlock col-md-10">
					<h3><span class="yellow">{{ $page12->sub_title }}</span></h3>
				</div>
			</div>
		</div>			
	</header>
	<!--PAGE CONTENT-->
	<div class="container" class="pageContent" style="font-family: Arial, sans-serif; font-size: 15px;">
		<div class="container" class="pageContent">
			<div class="row well">
				<div class="ulrich col-md-8">
					<p> {!! $page12->content !!}</p>
				</div>
				<div class="col-md-4">
					<a href="#"><img src="{{ asset('images/page/' .$page12->image)}}" class="responsiveImg" /></a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection