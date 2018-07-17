@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    <!-- general form elements disabled -->

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Create English Content</a></li>
    <li><a data-toggle="tab" href="#menu1">Create French Content</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               {!! Form::open(['route' => 'slide.store', 'data-parsley-validate' => '', 'files' => true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Slide Title</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="Enter Slide Title ...">
                    @if ($errors->has('title'))
                        <p class="help is-danger">{{$errors->first('title')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Slide Content</label>
                  <textarea class="form-control" name="content" id="content" rows="3" placeholder="Entre ..."></textarea>
                  @if ($errors->has('content'))
                        <p class="help is-danger">{{$errors->first('content')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  {{ Form::label('slide1_image', 'Upload Feautured Image:')}}
                  {{ Form::file('slide1_image')}}
                   @if ($errors->has('slide1_image'))
                        <p class="help is-danger">{{$errors->first('slide1_image')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ route('slide.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="box-body">

               <div class="form-group">
                  <label>Slide Title</label>
                  <input type="text" name="title_fr" id="title_fr" class="form-control" placeholder="Enter Slide Title ...">
                    @if ($errors->has('title_fr'))
                        <p class="help is-danger">{{$errors->first('title_fr')}} </p>
                     @endif
                </div>

               <!-- textarea -->
                <div class="form-group">
                  <label>Slide Description</label>
                  <textarea class="form-control" name="content_fr" id="content_fr" rows="3" placeholder="Entre ..."></textarea>
                  @if ($errors->has('content_fr'))
                        <p class="help is-danger">{{$errors->first('content_fr')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('slide.index') }}" class="btn btn-default">Return</a>
              </div>

{!! Form::close() !!}
 </div>
    </div>   
  </div>
@endsection