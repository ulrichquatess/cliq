@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    <!-- general form elements disabled -->

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Edit English Content</a></li>
    <li><a data-toggle="tab" href="#menu1">Edit French Content</a></li>

  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Project Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               {!! Form::model($project, ['route' => ['project.update', $project->id], 'method' => 'PATCH', 'files' =>true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Project tilte</label>
                 {{ Form::text('project_title', null, ["class" => 'form-control']) }}
                     @if ($errors->has('project_title'))
                        <p class="help is-danger">{{$errors->first('project_title')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Project Slug</label>
                 {{ Form::text('slug', null, ["class" => 'form-control']) }}
                     @if ($errors->has('slug'))
                        <p class="help is-danger">{{$errors->first('slug')}} </p>
                     @endif
                </div>

                 <!-- textarea -->
                <div class="form-group">
                  <label>Project Description</label>
                  {{ Form::textarea('project_description', null, ["class" => 'form-control']) }}
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
         {{ Form::text('project_fr', null, ["class" => 'form-control']) }}
             @if ($errors->has('project_fr'))
                <p class="help is-danger">{{$errors->first('project_fr')}} </p>
             @endif
        </div>

        <!-- text input -->
        <div class="form-group">
          <label>Project Slug</label>
         {{ Form::text('slug_fr', null, ["class" => 'form-control']) }}
             @if ($errors->has('slug_fr'))
                <p class="help is-danger">{{$errors->first('slug_fr')}} </p>
             @endif
        </div>
              
                <!-- textarea -->
                <div class="form-group">
                  <label>Description du projet</label>
                  {{ Form::textarea('project_description_fr', null, ["class" => 'form-control']) }}
                     @if ($errors->has('project_description_fr'))
                        <p class="help is-danger">{{$errors->first('project_description_fr')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('project.index') }}" class="btn btn-warning">Cancel</a>
              </div>

{!! Form::close() !!}
 </div>
    </div>   
  </div>
@endsection