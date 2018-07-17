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
              <h3 class="box-title">Event Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               {!! Form::model($service, ['route' => ['service.update', $service->id], 'method' => 'PATCH', 'files' =>true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Title</label>
                 {{ Form::text('title', null, ["class" => 'form-control']) }}
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
                
                <!-- text input -->
                <div class="form-group">
                  <label>Date</label>
                 {{ Form::text('dote', null, ["class" => 'form-control']) }}
                     @if ($errors->has('dote'))
                        <p class="help is-danger">{{$errors->first('dote')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Location</label>
                 {{ Form::text('location', null, ["class" => 'form-control']) }}
                     @if ($errors->has('location'))
                        <p class="help is-danger">{{$errors->first('location')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Slug</label>
                 {{ Form::text('slug', null, ["class" => 'form-control']) }}
                     @if ($errors->has('slug'))
                        <p class="help is-danger">{{$errors->first('slug')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Content</label>
                  {{ Form::textarea('content', null, ["class" => 'form-control']) }}
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
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('service.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="box-body">
              
                <div class="form-group">
                  <label>Title</label>
                 {{ Form::text('title_fr', null, ["class" => 'form-control']) }}
                     @if ($errors->has('title_fr'))
                        <p class="help is-danger">{{$errors->first('title_fr')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Date des événements</label>
                 {{ Form::text('dote_fr', null, ["class" => 'form-control']) }}
                     @if ($errors->has('dote_fr'))
                        <p class="help is-danger">{{$errors->first('dote_fr')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Slug des événements</label>
                 {{ Form::text('slug_fr', null, ["class" => 'form-control']) }}
                     @if ($errors->has('slug_fr'))
                        <p class="help is-danger">{{$errors->first('slug_fr')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Contenu</label>
                  {{ Form::textarea('content_fr', null, ["class" => 'form-control']) }}
                     @if ($errors->has('content_fr'))
                        <p class="help is-danger">{{$errors->first('content_fr')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('service.index') }}" class="btn btn-warning">Cancel</a>
              </div>

{!! Form::close() !!}
 </div>
    </div>   
  </div>
@endsection