@extends('layouts.main')
@section('title')
	Cliq Festival | {{ $blog->blog_title_fr }}
@endsection	
@section('content')
<?php
	$page17 = App\Page::find(17);
?>
<!--A SINGLE POST-->
<section id="singlePost">
	<!--HEADER-->
	<header class="blue">
		<div id="titleBar" class="container-fluid">
			<div class="row">
				<div id="pageTabTitle" class="headerBlock col-md-2 yBG">
					<h4>{{ $page17->sub_title_fr }}</h4>
				</div>
				<div id="pageTitle" class="headerBlock col-md-10">
					<h3><span class="blue">{{ $blog->blog_title_fr }}</span></h3>
				</div>
			</div>
		</div>			
	</header>
	<!--PAGE CONTENT-->
	<div class="container" class="pageContent">
		<div class="row well">
			
			<div class="ulrich col-md-8">
				<img src="{{ asset('images/blog/' .$blog->image)}}" class="postImg" />
				<p>{!! $blog->blog_description_fr !!}</p>
			</div>
			<div class="col-md-3">
				<h4>{{ $page17->title_fr }}</h4>
				@foreach($blogs as $blog)
				<div class="rPost">
					<a href="{{ url('blogsfr/' .$blog->slug_fr)}}">
						<img src="{{ asset('images/blog/' .$blog->image)}}" />
						<span>{{ substr(strip_tags($blog->blog_title_fr), 0, 60) }} {{ strlen(strip_tags($blog->blog_title_fr)) > 60 ? "...." : "" }}</span>
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
@endsection