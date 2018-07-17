@extends('layouts.main')
@section('title')
	Cliq Festival | Section de l'événement
@endsection	
@section('content')
<?php
	$page22 = App\Page::find(22);
?>

<!--EVENT PROGRAM-->
<section id="eventProgram">
	<!--HEADER-->
	<!--HEADER-->
	<!--HEADER-->
	<header class="blue">
		<div id="titleBar" class="container-fluid">
			<div class="row">
				<div id="pageTabTitle" class="headerBlock col-md-2">
					<h4>{{ $page22->title_fr }}</h4>
				</div>
				<div id="pageTitle" class="headerBlock col-md-10">
					<h3><span class="yellow">{{ $page22->sub_title_fr }}<br />{{ $page22->option_fr }}</span></h3>
				</div>
			</div>
		</div>			
	</header>
	<header class="simpleBar white">
		<h2 class="text-blue text-center">{{ $page22->option1_fr }}</h2>
	</header>

	<!--PAGE CONTENT-->
	<div class="container" class="pageContent">
		<div class="row well">
			@foreach($events as $event)
			<div class="col-md-6 blogItem">
				<a href="{{ url('eventsfr/'.$event->slug_fr)}}"><img src="{{ asset('images/service/' .$event->image)}}" class="blogImg" /></a>
				<h4 class="text-sblue">{{ $event->dote_fr }}</h4>
				<li class="activityItem">
					<a href="{{ url('eventsfr/'.$event->slug_fr)}}" style="text-decoration: none;">
					<h4 class="activity">{{ substr(strip_tags($event->title_fr), 0, 50) }} {{ strlen(strip_tags($event->title_fr)) > 50 ? "...." : "" }}</h4>
				    </a>
					<h4 class="activity">{{ $event->location_fr }}</h4>
				</li>
			</div>
			@endforeach
			
			 <div>
				<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">View Past Events</button>
				  <div id="demo" class="collapse">
				    <!--OUR BLOG-->
				    <section id="ourBlog">
				    	<!--PAGE CONTENT-->
				    	<div class="container" class="pageContent">
				    		<div class="row well">
				    			@foreach($services as $service)
				    			<div class="col-md-4 blogItem">
				    				<a href="{{ asset('images/service/' .$service->image)}}"><img src="{{ asset('images/service/' .$service->image)}}" class="blogImg" /></a>
				    				<h4><a href="{{ url('eventsfr/'.$service->slug_fr)}}" style="text-decoration: none;">{{ substr(strip_tags($service->title_fr), 0, 20) }} {{ strlen(strip_tags($service->title_fr)) > 20 ? "...." : "" }}</a></h4>
				    				<p>{{ substr(strip_tags($service->content_fr), 0, 20) }} {{ strlen(strip_tags($service->content_fr)) > 20 ? "...." : "" }}<a href="{{ url('eventsfr/'.$service->slug_fr)}}" style="text-decoration: none;">Lire la suite</a></p>
				    			</div>
				    			 @endforeach		
				    		</div>
				    				<div style="margin-left: 500px;">
				    						<p>{{ $services->links()}}</p>
				    					</div>
				    	</div>
				    </section>
				</div>
			</div>
		</div>
	</div>
</section>
				
@endsection