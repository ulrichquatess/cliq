@extends('layouts.main2')
@section('title')
	Cliq Festival | {{ $project->project_title }}
@endsection	
@section('content')
<?php
	$page18 = App\Page::find(18);
?>
<!--A SINGLE POST-->
<section id="singlePost">
	<!--HEADER-->
	<header class="blue">
		<div id="titleBar" class="container-fluid">
			<div class="row">
				<div id="pageTabTitle" class="headerBlock col-md-2 yBG">
					<h4>{{ $page18->sub_title }}</h4>
				</div>
				<div id="pageTitle" class="headerBlock col-md-10">
					<h3><span class="blue">{{ $project->project_title }}</span></h3>
				</div>
			</div>
		</div>			
	</header>
	<!--PAGE CONTENT-->
	<div class="container" class="pageContent">
		<div class="row well">
			
			<div class="ulrich col-md-8">
				<img src="{{ asset('images/project/' .$project->image)}}" class="postImg" />
				<p>{!! $project->project_description !!}</p>
			</div>
			<div class="col-md-3">
				<h4>{{ $page18->title }}</h4>
				@foreach($projects as $project)
				<div class="rPost">
					<a href="{{ url('projects/' .$project->slug)}}">
						<img src="{{ asset('images/project/' .$project->image)}}" />
						<span>{{ substr(strip_tags($project->project_title), 0, 60) }} {{ strlen(strip_tags($project->project_title)) > 60 ? "...." : "" }}</span>
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
@endsection