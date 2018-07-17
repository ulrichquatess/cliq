@extends('layouts.main2')
@section('title')
	Cliq Festival | Volunteers From Cameroon
@endsection	
@section('content')
<!--ABOUT THE ORGANIZERS-->
<?php 
	$page27 = App\Page::find(27);
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
			        {!! Form::open(['route' => 'volunterism.store', 'data-parsley-validate' => '']) !!}

			          <div class="form-group">
			            <label for="fname" class="control-label">Fisrt Name</label>
			            <input type="text" name="fname" class="form-control" placeholder="Enter First Name ..." id="fname">
			          </div>

			          <div class="form-group">
			            <label for="lname" class="control-label">Last Name</label>
			            <input type="text" name="lname" class="form-control" placeholder="Enter Last Name ..." id="lname">
			          </div>

			          <div class="col-lg-12">
			          	<div class="col-lg-6">
			          	<label for="age" class="control-label">Age</label>
			            <input type="text" name="age" class="form-control" placeholder="Age ..." id="age">
			           </div>

			           <div class="col-lg-6">
			          	<label for="phone" class="control-label">Tel</label>
			            <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number..." id="phone">
			             @if ($errors->has('phone'))
			                  <p class="help is-danger">{{$errors->first('phone')}} </p>
			               @endif
			           </div>

			           <div class="col-lg-6">
			          	<label for="residence" class="control-label">Residence</label>
			            <input type="text" name="residence" class="form-control" placeholder="Enter Phone Number..." id="residence">
			             @if ($errors->has('residence'))
			                  <p class="help is-danger">{{$errors->first('residence')}} </p>
			               @endif
			           </div>

			           <div class="col-lg-6">
			          	<label for="department" class="control-label">Department Of Work</label>
			            <input type="text" name="department" class="form-control" placeholder="Enter Department Of Work..." id="department">
			             @if ($errors->has('department'))
			                  <p class="help is-danger">{{$errors->first('department')}} </p>
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
			          	<label>Select Your Level</label>
			            <select class="selectpicker" name="describtion" data-live-search="true">
			              <option data-tokens="worker" value="worker">Worker</option>
			              <option data-tokens="student" value="student">Student</option>
			            </select>
			             @if ($errors->has('describtion'))
			                  <p class="help is-danger">{{$errors->first('describtion')}} </p>
			               @endif
			          </div>

			          <div class="form-group">
			            <label>Message</label>
			            <textarea class="form-control" name="message" id="message" rows="3" placeholder="Entre Message ..."></textarea>
			            @if ($errors->has('message'))
			                  <p class="help is-danger">{{$errors->first('message')}} </p>
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