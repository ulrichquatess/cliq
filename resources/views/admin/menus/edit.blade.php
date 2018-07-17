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
              <h3 class="box-title">Menu Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               {!! Form::model($menu, ['route' => ['menu.update', $menu->id], 'method' => 'PATCH', 'files' =>true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                 {{ Form::text('name', null, ["class" => 'form-control']) }}
                     @if ($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <a href="{{ route('menu.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="box-body">

        <!-- text input -->
        <div class="form-group">
          <label>Nom Du Site Internet</label>
         {{ Form::text('name_fr', null, ["class" => 'form-control']) }}
             @if ($errors->has('name_fr'))
                <p class="help is-danger">{{$errors->first('name_fr')}} </p>
             @endif
        </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('menu.index') }}" class="btn btn-warning">Cancel</a>
              </div>

{!! Form::close() !!}
 </div>
    </div>   
  </div>
@endsection