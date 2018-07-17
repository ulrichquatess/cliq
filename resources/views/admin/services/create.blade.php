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
              <h3 class="box-title">Service Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               {!! Form::open(['route' => 'service.store', 'data-parsley-validate' => '', 'files' => true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Date Of Events</label>
                  <input type="text" name="dote" id="dote" class="form-control" placeholder="Enter Date Of Events ...">
                    @if ($errors->has('dote'))
                        <p class="help is-danger">{{$errors->first('dote')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Title Of Events</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title Of Events ...">
                    @if ($errors->has('title'))
                        <p class="help is-danger">{{$errors->first('title')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Select Option</label>
                  <select class="form-control" name="status">
                    <option value="new">New Event</option>
                    <option value="old">Old Event</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Location Of Event</label>
                  <input type="text" name="location" id="location" class="form-control" placeholder="Enter Location Of Events ...">
                    @if ($errors->has('location'))
                        <p class="help is-danger">{{$errors->first('location')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Slug</label>
                  <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter Slug Of Events ...">
                    @if ($errors->has('slug'))
                        <p class="help is-danger">{{$errors->first('slug')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Content</label>
                  <textarea class="form-control" name="content" id="content" rows="3" placeholder="Entre ..."></textarea>
                  @if ($errors->has('content'))
                        <p class="help is-danger">{{$errors->first('content')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  {{ Form::label('service_image', 'Upload Feautured Image:')}}
                  {{ Form::file('service_image')}}
                   @if ($errors->has('service_image'))
                        <p class="help is-danger">{{$errors->first('service_image')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <a href="{{ route('service.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="box-body">

               <div class="form-group">
                  <label>Titre</label>
                  <input type="text" name="title_fr" id="title_fr" class="form-control" placeholder="Enter Title ...">
                    @if ($errors->has('title_fr'))
                        <p class="help is-danger">{{$errors->first('title_fr')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Date des événements</label>
                  <input type="text" name="dote_fr" id="doe_fr" class="form-control" placeholder="">
                    @if ($errors->has('dote_fr'))
                        <p class="help is-danger">{{$errors->first('dote_fr')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Slug des événements</label>
                  <input type="text" name="slug_fr" id="slug_fr" class="form-control" placeholder="">
                    @if ($errors->has('slug_fr'))
                        <p class="help is-danger">{{$errors->first('slug_fr')}} </p>
                     @endif
                </div>

               <!-- textarea -->
                <div class="form-group">
                  <label>Contenu</label>
                  <textarea class="form-control" name="content_fr" id="content_fr" rows="3" placeholder="Entre ..."></textarea>
                  @if ($errors->has('content_fr'))
                        <p class="help is-danger">{{$errors->first('content_fr')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('service.index') }}" class="btn btn-default">Return</a>
              </div>

{!! Form::close() !!}
 </div>
    </div>   
  </div>
@endsection