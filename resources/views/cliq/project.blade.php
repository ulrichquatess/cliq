@extends('layouts.main2')
@section('title')
	Cliq Festival | Project Section
@endsection	
@section('content')
<?php
	$page18 = App\Page::find(18);
?>
	<!--OUR BLOG-->
	<section id="ourBlog">
		<!--HEADER-->
		<header class="blue">
			<div id="titleBar" class="container-fluid">
				<div class="row">
					<div id="pageTabTitle" class="headerBlock col-md-2">
						<h4>{{ $page18->title }}</h4>
					</div>
					<div id="pageTitle" class="headerBlock col-md-10">
						<h3>{{ $page18->sub_title }}<br /><span class="yellow">{{ $page18->option }}</span></h3>
					</div>
				</div>
			</div>			
		</header>
		<!--PAGE CONTENT-->
		<div class="container" class="pageContent">
			<div class="row well">
				@foreach($projects as $project)
				<div class="col-md-4 blogItem">
					<a href="{{ asset('images/project/' .$project->image)}}"><img src="{{ asset('images/project/' .$project->image)}}" class="blogImg" /></a>
					<h4><a href="{{ url('projects/'.$project->slug)}}" style="text-decoration: none;">{!! substr(strip_tags($project->project_title), 0, 50) !!} {!! strlen(strip_tags($project->project_title)) > 50 ? "...." : "" !!}</a></h4>
					<p>{!! substr(strip_tags($project->project_description), 0, 70) !!} {!! strlen(strip_tags($project->project_description)) > 70 ? "...." : "" !!} <a href="{{ url('projects/'.$project->slug)}}" style="text-decoration: none;">read more</a></p>
				</div>
				@endforeach
			</div>
		        
		    </div>
		</div>
  </section>
@endsection