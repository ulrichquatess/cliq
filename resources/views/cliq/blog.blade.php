@extends('layouts.main2')
@section('title')
	Cliq Festival | Blog Section
@endsection	
@section('content')
<?php
	$page15 = App\Page::find(15);
?>
	<!--OUR BLOG-->
	<section id="ourBlog">
		<!--HEADER-->
		<header class="blue">
			<div id="titleBar" class="container-fluid">
				<div class="row">
					<div id="pageTabTitle" class="headerBlock col-md-2">
						<h4>{{ $page15->title }}</h4>
					</div>
					<div id="pageTitle" class="headerBlock col-md-10">
						<h3>{{ $page15->sub_title }}<br /><span class="yellow">{{ $page15->option }}</span></h3>
					</div>
				</div>
			</div>			
		</header>
		<!--PAGE CONTENT-->
		<div class="container" class="pageContent">
			<div class="row well">
				@foreach($blogs as $blog)
				<div class="col-md-4 blogItem">
					<a href="{{ asset('images/blog/' .$blog->image)}}"><img src="{{ asset('images/blog/' .$blog->image)}}" class="blogImg" /></a>
					<h4><a href="{{ url('blogs/'.$blog->slug)}}" style="text-decoration: none;">{!! substr(strip_tags($blog->blog_title), 0, 50) !!} {!! strlen(strip_tags($blog->blog_title)) > 50 ? "...." : "" !!}</a></h4>
					<p>{!! substr(strip_tags($blog->blog_description), 0, 70) !!} {!! strlen(strip_tags($blog->blog_description)) > 70 ? "...." : "" !!} <a href="{{ url('blogs/'.$blog->slug)}}" style="text-decoration: none;">read more</a></p>
				</div>
				@endforeach
			</div>
		        <div id="footerImg">
		            <img src="{{ asset('assets/img/rival.jpg')}}" alt="" />
		        </div>
		    </div>
		</div>
@endsection