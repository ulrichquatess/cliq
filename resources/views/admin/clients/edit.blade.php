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
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               {!! Form::model($client, ['route' => ['client.update', $client->id], 'method' => 'PATCH', 'files' =>true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                 {{ Form::text('client_name', null, ["class" => 'form-control']) }}
                     @if ($errors->has('client_name'))
                        <p class="help is-danger">{{$errors->first('client_name')}} </p>
                     @endif
                </div>

                 <!-- text input -->
                <div class="form-group">
                  <label>Description</label>
                 {{ Form::text('description', null, ["class" => 'form-control']) }}
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
                 {{ Form::text('note', null, ["class" => 'form-control']) }}
                     @if ($errors->has('note'))
                        <p class="help is-danger">{{$errors->first('note')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('client.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="box-body">
              
                <div class="form-group">
                  <label>Description</label>
                 {{ Form::text('description_fr', null, ["class" => 'form-control']) }}
                     @if ($errors->has('description_fr'))
                        <p class="help is-danger">{{$errors->first('description_fr')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('client.index') }}" class="btn btn-warning">Cancel</a>
              </div>

{!! Form::close() !!}
 </div>
    </div>   
  </div>
@endsection