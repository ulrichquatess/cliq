@extends('layouts.main2')
@section('title')
	Cliq Festival | Contact Page
@endsection	
@section('content')
		<!--CONTACT US-->
		<section id="contactUs">
			<!--HEADER-->
			<header class="blue">
				<div id="titleBar" class="container-fluid">
					<div class="row">
						<div id="pageTabTitle" class="headerBlock col-md-2">
							<h4>Contact<br />The Cliq</h4>
						</div>
						<div id="pageTitle" class="headerBlock col-md-10">
							<h3 class="text-yellow">Let get in touch</h3>
						</div>
					</div>
				</div>			
			</header>
			<!--PAGE CONTENT-->
			<div class="container" class="pageContent" style="margin-top: 20px;">
				<div class="row well">
					<div class="col-md-6">
						<div class="container">
						    <div class="row">
						        <div class="col-lg-8 col-lg-offset-2">
						            <form id="contact-form" method="POST" action="{{url('contact')}}" role="form">
						            	{{ csrf_field() }}
						                <div class="messages"></div>

						                <div class="controls">

						                    <div class="row">
						                        <div class="col-md-6">
						                            <div class="form-group">
						                                <label for="fname">Firstname *</label>
						                                <input id="fname" type="text" name="fname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
						                                <div class="help-block with-errors"></div>
						                            </div>
						                        </div>
						                        <div class="col-md-6">
						                            <div class="form-group">
						                                <label for="lname">Lastname *</label>
						                                <input id="lname" type="text" name="lname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
						                                <div class="help-block with-errors"></div>
						                            </div>
						                        </div>
						                    </div>
						                    <div class="row">
						                        <div class="col-md-6">
						                            <div class="form-group">
						                                <label for="email">Email *</label>
						                                <input id="email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
						                                <div class="help-block with-errors"></div>
						                            </div>
						                        </div>
						                        <div class="col-md-6">
						                            <div class="form-group">
						                                <label for="phone">Phone</label>
						                                <input id="phone" type="phone" name="phone" class="form-control" placeholder="Please enter your phone">
						                                <div class="help-block with-errors"></div>
						                            </div>
						                        </div>
						                    </div>
						                    <div class="row">
						                        <div class="col-md-12">
						                            <div class="form-group">
						                                <label for="message">Message *</label>
						                                <textarea id="message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
						                                <div class="help-block with-errors"></div>
						                            </div>
						                        </div>
						                        <div class="col-md-12">
						                            <input type="submit" class="btn btn-success btn-send" value="Send message">
						                        </div>
						                    </div>
						                    <div class="row">
						                        <div class="col-md-12">
						                            
						                        </div>
						                    </div>
						                </div>

						            </form>

						        </div><!-- /.8 -->

						    </div> <!-- /.row-->
						</div> <!-- /.container-->
					</div>
				</div>
				    </div>
				</div>
			</div>

@endsection