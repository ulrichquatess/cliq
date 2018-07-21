@extends('layouts.main2')
@section('title')
	Cliq Festival | Volunteers From Cameroon
@endsection	
@section('content')
<!--ABOUT THE ORGANIZERS-->
<?php 
	$page27 = App\Page::find(27);
	$department = App\Department::all();
	?>
<section id="aboutTheOrganizers">
	<!--HEADER-->
	<header class="blue">
		<div id="titleBar" class="container-fluid">
			<div class="row">
				<div id="pageTabTitle" class="headerBlock col-md-2">
					<h4>{{ $page27->title }}</h4>
				</div>
				<div id="pageTitle" class="headerBlock col-md-10">
					<h3><span class="yellow">{{ $page27->sub_title }}{{ $page27->option}}</span></h3>
					<h3><span class="yellow"></span></h3>
				</div>
			</div>
		</div>			
	</header>
	<!--PAGE CONTENT-->
	@if(session()->has('success'))
	    <div class="alert alert-success">
	       {{ session()->get('success')}}
	   </div>
	@endif

	 @if(count($errors) > 0)
	     <div class="alert alert-danger">
	       <ul>
	          @foreach($errors->all() as $error)
	                    <li>{{ $error }}</li>
	                 @endforeach
	               </ul>
	             </div>
	           @endif
	           
	<div class="container" class="pageContent" style="font-family: Arial, sans-serif; font-size: 15px;">
		<div class="container" class="pageContent">
			<div class="row well">
				<div class="ulrich col-md-12">
					<p>{!! $page27->content !!}</p>
					<h1 class="text-sblue fw7">{{ $page27->option }}</h1>
				</div>

				<div style="text-align: center;">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">CLick Here</button>
			</div>

			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="exampleModalLabel">Sign Up Volunteer Form</h4>
			      </div>
			      <div class="modal-body">
			       {!! Form::open(['route' => 'volunterism.volum', 'data-parsley-validate' => '', 'files' => true]) !!}

			          <div class="form-group">
			            <label for="fname" class="control-label">Fisrt Name</label>
			            <input type="text" name="fname" class="form-control" placeholder="Enter First Name ..." id="fname">
			            @if ($errors->has('fname'))
			                <p class="help is-danger">{{$errors->first('fname')}} </p>
			             @endif
			          </div>

			          <div class="form-group">
			            <label for="lname" class="control-label">Last Name</label>
			            <input type="text" name="lname" class="form-control" placeholder="Enter Last Name ..." id="lname">
			            @if ($errors->has('lname'))
			                <p class="help is-danger">{{$errors->first('lname')}} </p>
			             @endif
			          </div>

			          <div class="col-lg-12">
			          	<div class="col-lg-6">
			          	<label for="age" class="control-label">Age</label>
			            <input type="text" name="age" class="form-control" placeholder="Age ..." id="age">
			            @if ($errors->has('age'))
                        <p class="help is-danger">{{$errors->first('age')}} </p>
                     @endif
			           </div>

			           <div class="col-lg-6">
			          	<label for="phone" class="control-label">Tel</label>
			            <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number..." id="phone">
			             @if ($errors->has('phone'))
			                  <p class="help is-danger">{{$errors->first('phone')}} </p>
			               @endif
			           </div>

			           <div class="col-lg-12">
			          	<label for="residence" class="control-label">Residence</label>
			            <input type="text" name="residence" class="form-control" placeholder="Enter Phone Number..." id="residence">
			             @if ($errors->has('residence'))
			                  <p class="help is-danger">{{$errors->first('residence')}} </p>
			               @endif
			           </div>

			          </div>

			          <div class="form-group" style="margin-top: 150px;">
			            <label for="email" class="control-label">Email</label>
			            <input type="text" name="email" class="form-control" placeholder="Enter Email Address ..." id="email">
			             @if ($errors->has('email'))
			                  <p class="help is-danger">{{$errors->first('email')}} </p>
			               @endif
			          </div>

			          <div class="form-group">
			            <label for="link" class="control-label">Link</label>
			            <input type="text" class="form-control" name="link" placeholder="Enter Any Link Speaking about you(OPTION exp : Linkedin)..." id="email">
			             @if ($errors->has('link'))
			                  <p class="help is-danger">{{$errors->first('link')}} </p>
			               @endif
			          </div>

			          <div class="form-group">
			            <label>Select Level</label>
			            <select name="department_id" class="form-control">
			              @foreach($department as $department)
			                <option value="{{ $department->id }}">{{ $department->name }}</option>
			              @endforeach
			            </select>
			            @if ($errors->has('department_id'))
			                <p class="help is-danger">{{$errors->first('department_id')}} </p>
			             @endif
			          </div>

			          <div class="form-group">
			            {{ Form::label('volum_image', 'Upload Your Image:')}}
			            {{ Form::file('volum_image')}}
			             @if ($errors->has('volum_image'))
			                  <p class="help is-danger">{{$errors->first('volum_image')}} </p>
			               @endif
			          </div>

			          <div class="form-group">
			            <label>Message</label>
			            <textarea class="form-control" name="content" id="content" rows="3" placeholder="Entre Your Personnal Description Here ..."></textarea>
			            @if ($errors->has('content'))
			                  <p class="help is-danger">{{$errors->first('content')}} </p>
			               @endif
			          </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Send message</button>
			      </div>
			      {!! Form::close() !!}
			    </div>
			  </div>
			</div>
			</div>
		</div>
	</div>
</section>
@endsection