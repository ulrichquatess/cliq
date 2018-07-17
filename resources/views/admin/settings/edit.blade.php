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
               {!! Form::model($setting, ['route' => ['setting.update', $setting->id], 'method' => 'PATCH', 'files' =>true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Email</label>
                 {{ Form::text('email', null, ["class" => 'form-control']) }}
                     @if ($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}} </p>
                     @endif
                </div>

                 <!-- text input -->
                <div class="form-group">
                  <label>Phone Number</label>
                 {{ Form::text('phone', null, ["class" => 'form-control']) }}
                     @if ($errors->has('phone'))
                        <p class="help is-danger">{{$errors->first('phone')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Address</label>
                 {{ Form::text('address', null, ["class" => 'form-control']) }}
                     @if ($errors->has('address'))
                        <p class="help is-danger">{{$errors->first('address')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Facebook</label>
                 {{ Form::text('facebook', null, ["class" => 'form-control']) }}
                     @if ($errors->has('facebook'))
                        <p class="help is-danger">{{$errors->first('facebook')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Instagram</label>
                 {{ Form::text('instagram', null, ["class" => 'form-control']) }}
                     @if ($errors->has('instagram'))
                        <p class="help is-danger">{{$errors->first('instagram')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Twitter</label>
                 {{ Form::text('twitter', null, ["class" => 'form-control']) }}
                     @if ($errors->has('twitter'))
                        <p class="help is-danger">{{$errors->first('twitter')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Youtube</label>
                 {{ Form::text('youtube', null, ["class" => 'form-control']) }}
                     @if ($errors->has('youtube'))
                        <p class="help is-danger">{{$errors->first('youtube')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('setting.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>
    
{!! Form::close() !!}
  </div>
@endsection