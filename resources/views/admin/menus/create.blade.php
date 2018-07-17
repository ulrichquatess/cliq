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
              <h3 class="box-title">Menu Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::open(['route' => 'menu.store', 'data-parsley-validate' => '', 'files' => true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name Of Site ...">
                    @if ($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  {{ Form::label('menu_image', 'Upload Feautured Image:')}}
                  {{ Form::file('menu_image')}}
                   @if ($errors->has('menu_image'))
                        <p class="help is-danger">{{$errors->first('menu_image')}} </p>
                     @endif
                </div>
                

                <div class="box-footer">
                <a href="{{ route('menu.index') }}" class="btn btn-default">Return</a>
              </div>
 </div>
 </div>
</div>

<div id="menu1" class="tab-pane fade">
      <div class="box-body">

               <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name_fr" id="name_fr" class="form-control" placeholder="Enter Name Of Site...">
                    @if ($errors->has('name_fr'))
                        <p class="help is-danger">{{$errors->first('name_fr')}} </p>
                     @endif
                </div>
               
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('menu.index') }}" class="btn btn-default">Return</a>
              </div>

{!! Form::close() !!}
 </div>
    </div>   
  </div>
 
@endsection