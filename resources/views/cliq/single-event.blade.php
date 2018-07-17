@extends('layouts.main2')
@section('title')
	Cliq Festival | {{ $event->title }}
@endsection	
@section('content')
<?php
	$page22 = App\Page::find(22);
?>
<!--A SINGLE POST-->
<section id="singlePost">
	<!--HEADER-->
	<header class="blue">
		<div id="titleBar" class="container-fluid">
			<div class="row">
				<div id="pageTabTitle" class="headerBlock col-md-2 yBG">
					<h4>{{ $page22->sub_title }}</h4>
				</div>
				<div id="pageTitle" class="headerBlock col-md-10">
					<h3><span class="blue">{{ $event->title }}</span></h3>
				</div>
			</div>
		</div>			
	</header>
	<!--PAGE CONTENT-->
	<div class="container" class="pageContent">
		<div class="row well">
			
			<div class="ulrich col-md-8">
				<img src="{{ asset('images/service/' .$event->image)}}" class="postImg" />
				<p>{!! $event->content !!}</p>
			</div>
			<div class="col-md-3">
				<h4>{{ $page22->title }}</h4>
				@foreach($events as $event)
				<div class="rPost">
					<a href="{{ url('events/' .$event->slug)}}">
						<img src="{{ asset('images/service/' .$event->image)}}" />
						<span>{{ substr(strip_tags($event->title), 0, 60) }} {{ strlen(strip_tags($event->title)) > 60 ? "...." : "" }}</span>
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
@endsection