@extends('layouts.main')
@section('title')
	Cliq Festival | Bienvenue à l'artiste
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
			<div class="col-md-3">
				<h1 class="text-yellow fw8">{{ $page19->title_fr }}<BR />{{ $page19->sub_title_fr }}</h1>
			</div>
			@foreach($artists as $artist)			
			<div class="col-md-3">
				<img src="{{ asset('images/artist/' .$artist->image)}}" class="responsiveImg" />
			</div>			
			@endforeach		
			</div>	
			<div style="margin-left: 1000px;">
					<p>{{ $artists->links()}}</p>
				</div>
		</div>
	</section>
				         

@endsection