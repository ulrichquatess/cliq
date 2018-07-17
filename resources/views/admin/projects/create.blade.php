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
              <h3 class="box-title">Project Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               {!! Form::open(['route' => 'project.store', 'data-parsley-validate' => '', 'files' => true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Project Title</label>
                  <input type="text" name="project_title" id="project_title" class="form-control" placeholder="Enter Project Title Here ...">
                    @if ($errors->has('project_title'))
                        <p class="help is-danger">{{$errors->first('project_title')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Project Slug</label>
                  <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter slug Here ...">
                    @if ($errors->has('slug'))
                        <p class="help is-danger">{{$errors->first('slug')}} </p>
                     @endif
                </div>

               <!-- textarea -->
                <div class="form-group">
                  <label>Project Description</label>
                  <textarea class="form-control" name="project_description" id="project_description" rows="3" placeholder="Entre ..."></textarea>
                  @if ($errors->has('project_description'))
                        <p class="help is-danger">{{$errors->first('project_description')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  {{ Form::label('project_image', 'Upload Feautured Image:')}}
                  {{ Form::file('project_image')}}
                   @if ($errors->has('project_image'))
                        <p class="help is-danger">{{$errors->first('project_image')}} </p>
                     @endif
                </div>


                <div class="box-footer">
                <a href="{{ route('project.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="box-body">

                <!-- text input -->
                <div class="form-group">
                  <label>Titre du projet</label>
                  <input type="text" name="project_fr" id="project_fr" class="form-control" placeholder="Enter Name Here ...">
                    @if ($errors->has('project_fr'))
                        <p class="help is-danger">{{$errors->first('project_fr')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Project Slug</label>
                  <input type="text" name="slug_fr" id="slug_fr" class="form-control" placeholder="Enter slug Here ...">
                    @if ($errors->has('slug_fr'))
                        <p class="help is-danger">{{$errors->first('slug_fr')}} </p>
                     @endif
                </div>

              <!-- textarea -->
                <div class="form-group">
                  <label>Description du projet</label>
                  <textarea class="form-control" name="project_description" id="project_description" rows="3" placeholder="Entre ..."></textarea>
                  @if ($errors->has('project_description_fr'))
                        <p class="help is-danger">{{$errors->first('project_description_fr')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('project.index') }}" class="btn btn-default">Return</a>
              </div>

{!! Form::close() !!}
 </div>
    </div>   
  </div>
@endsection