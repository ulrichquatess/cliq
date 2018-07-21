@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<!-- general form elements disabled -->

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Edit English Content</a></li>
  </ul>
   <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Department Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::model($department, ['route' => ['department.update', $department->id], 'method' => 'PATCH', 'files' =>true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Department Name</label>
                  {{ Form::text('name', null, ["class" => 'form-control input-lg']) }}
                    @if ($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}} </p>
                     @endif
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('department.index') }}" class="btn btn-default">Return</a>
              </div>
</div>
 </div>
 </div>

{!! Form::close() !!}  
  </div>
@endsection