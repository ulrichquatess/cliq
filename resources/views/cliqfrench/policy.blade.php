@extends('layouts.main')
@section('title')
	Cliq Festival | Politique
@endsection	
@section('content')
<!--ABOUT THE ORGANIZERS-->
<?php 
	$page25 = App\Page::find(25);
	?>
<section id="aboutTheOrganizers">
	<!--HEADER-->
	<header class="blue">
		<div id="titleBar" class="container-fluid">
			<div class="row">
				<div id="pageTabTitle" class="headerBlock col-md-2">
					<h4>{{ $page25->title_fr }}</h4>
				</div>
				<div id="pageTitle" class="headerBlock col-md-10">
					<h3><span class="yellow">{{ $page25->sub_title_fr }}</span></h3>
				</div>
			</div>
		</div>			
	</header>
	<!--PAGE CONTENT-->
	<div class="container" class="pageContent" style="font-family: Arial, sans-serif; font-size: 15px;">
		<div class="container" class="pageContent">
			<div class="row well" style="margin-left: 50px;">
				<div class="ulrich col-md-8">
					<p>{!! $page25->content_fr !!}</p>
					<h1 class="text-sblue fw7">{{ $page25->option_fr }}</h1>
					<h1 class="text-sblue fw7">{{ $page25->option1_fr }}</h1>
				</div>
				
			</div>
		</div>
	</div>
</section>
@endsection