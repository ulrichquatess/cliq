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
               {!! Form::open(['route' => 'client.store', 'data-parsley-validate' => '', 'files' => true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="client_name" id="client_name" class="form-control" placeholder="Enter Name Here ...">
                    @if ($errors->has('client_name'))
                        <p class="help is-danger">{{$errors->first('client_name')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Description</label>
                  <input type="text" name="description" id="description" class="form-control" placeholder="Enter Description Here ...">
                    @if ($errors->has('description'))
                        <p class="help is-danger">{{$errors->first('description')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  {{ Form::label('client_image', 'Upload Feautured Image:')}}
                  {{ Form::file('client_image')}}
                   @if ($errors->has('client_image'))
                        <p class="help is-danger">{{$errors->first('client_image')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Note</label>
                  <input type="text" name="note" id="note" class="form-control" placeholder="Enter Note Here ...">
                    @if ($errors->has('note'))
                        <p class="help is-danger">{{$errors->first('note')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ route('client.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="box-body">


               <!-- text input -->
                <div class="form-group">
                  <label>Description </label>
                  <input type="text" name="description_fr" id="description_fr" class="form-control" placeholder="Enter Description Here ...">
                    @if ($errors->has('description_fr'))
                        <p class="help is-danger">{{$errors->first('description_fr')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('client.index') }}" class="btn btn-default">Return</a>
              </div>

{!! Form::close() !!}
 </div>
    </div>   
  </div>
@endsection