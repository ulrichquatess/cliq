@extends('layouts.main2')
@section('title')
	Cliq Festival | Past Festival
@endsection	
@section('content')
<!--ABOUT THE ORGANIZERS-->
<?php 
	$page20 = App\Page::find(20);
	?>
<section id="aboutTheOrganizers">
	<!--HEADER-->
	<header class="blue">
		<div id="titleBar" class="container-fluid">
			<div class="row">
				<div id="pageTabTitle" class="headerBlock col-md-2">
					<h4>{{ $page20->title }}</h4>
				</div>
				<div id="pageTitle" class="headerBlock col-md-10">
					<h3><span class="yellow">{{ $page20->sub_title }}</span></h3>
				</div>
			</div>
		</div>			
	</header>
	<!--PAGE CONTENT-->
	<div class="container" class="pageContent" style="font-family: Arial, sans-serif; font-size: 15px;">
		<div class="container" class="pageContent">
			<div class="row well">
				<div class="ulrich col-md-8">
					<p>{!! $page20->content !!}</p>
					<h1 class="text-sblue fw7">{{ $page20->option }}</h1>
				</div>
				<div class="col-md-4">
							<img src="{{ asset('images/page/' .$page20->image)}}" alt="fesstivalImg" class="responsiveImg" />
				</div>
			</div>
		</div>
	</div>
</section>
@endsection