@extends('layouts.main2')
@section('title')
	Cliq Festival | Sponsorship
@endsection	
@section('content')
<!--ABOUT THE ORGANIZERS-->
<?php 
	$page16 = App\Page::find(16);
	?>
<section id="aboutTheOrganizers">
	<!--HEADER-->
	<header class="blue">
		<div id="titleBar" class="container-fluid">
			<div class="row">
				<div id="pageTabTitle" class="headerBlock col-md-2">
					<h4>{{ $page16->title }}</h4>
				</div>
				<div id="pageTitle" class="headerBlock col-md-10">
					<h3><span class="yellow">{{ $page16->sub_title }}{{ $page16->option}}</span></h3>
					<h3><span class="yellow"></span></h3>
				</div>
			</div>
		</div>			
	</header>
	<!--PAGE CONTENT-->
	<div class="container" class="pageContent" style="font-family: Arial, sans-serif; font-size: 15px;">
		<div class="container" class="pageContent">
			<div class="row well">
				<div class="ulrich col-md-12">
					<p>{!! $page16->content !!}</p>
					<h1 class="text-sblue fw7">{{ $page16->option }}</h1>
				</div>
				<div id="rightSideImg">
							<img src="{{ asset('images/page/' .$page16->image)}}" alt="" />
				</div>
			</div>
		</div>
	</div>
</section>
@endsection