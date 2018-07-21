@extends('layouts.main2')
@section('title')
	Cliq Festival | Welcome To Artist
@endsection	
@section('content')
<?php
	$page19 = App\Page::find(19);
?>
<!--FIRST EDITION-->
<section id="firstEdition" class="blue">
	<!--PAGE CONTENT-->
	<div class="container-fluid" class="pageContent">
		<div class="row well">
			<div class="col-md-10">
				<h1 class="text-yellow fw8">{{ $page19->title }}</h1><br>
				<h2 class="text-yellow fw8">{{ $page19->sub_title }}</h2>
			</div>
			@foreach($artists as $artist)			
			<div class="col-md-3">
				<img src="{{ asset('images/artist/' .$artist->image)}}" class="responsiveImg" />
				<a style="text-align: center; margin-bottom: 10px; margin-left: 40px;" href="{{ $artist->name }}" class="btn btn-warning">View More</a>
			</div>			
			@endforeach		
			</div>	
			<div style="margin-left: 1000px;">
					<p>{{ $artists->links()}}</p>
				</div>
		</div>
	</section>
				         

@endsection