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
              <h3 class="box-title">volunterism Form</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::model($volun, ['route' => ['volunterism.update', $volun->id], 'method' => 'PATCH', 'files' =>true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>First Name</label>
                  {{ Form::text('fname', null, ["class" => 'form-control input-lg']) }}
                    @if ($errors->has('fname'))
                        <p class="help is-danger">{{$errors->first('fname')}} </p>
                     @endif
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Last Name</label>
                  {{ Form::text('lname', null, ["class" => 'form-control input-lg']) }}
                    @if ($errors->has('lname'))
                        <p class="help is-danger">{{$errors->first('lname')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Email</label>
                  {{ Form::text('email', null, ["class" => 'form-control input-lg']) }}
                  @if ($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}} </p>
                     @endif
                </div>

                 <!-- text input -->
                <div class="form-group">
                  <label>Volunteer Age</label>
                  {{ Form::text('age', null, ["class" => 'form-control input-lg']) }}
                  @if ($errors->has('age'))
                      <p class="help is-danger">{{$errors->first('age')}} </p>
                   @endif
                </div> 

                <!-- text input -->
                <div class="form-group">
                  <label>Phone Number</label>
                  {{ Form::text('phone', null, ["class" => 'form-control input-lg']) }}
                  @if ($errors->has('phone'))
                      <p class="help is-danger">{{$errors->first('phone')}} </p>
                   @endif
                </div>

                <div class="form-group">
                  {{ Form::label('volum_image', 'Upload Profile Image:')}}
                  {{ Form::file('volum_image')}}
                </div>

                <div class="form-group">
                  <label>Residence</label>
                  {{ Form::text('residence', null, ["class" => 'form-control input-lg']) }}
                  @if ($errors->has('residence'))
                      <p class="help is-danger">{{$errors->first('residence')}} </p>
                   @endif
                </div>

                <div class="form-group">
                  <label>Personal Link</label>
                  {{ Form::text('link', null, ["class" => 'form-control input-lg']) }}
                  @if ($errors->has('link'))
                      <p class="help is-danger">{{$errors->first('link')}} </p>
                   @endif
                </div>

                <div class="form-group">
                  <label>Select Level</label>
                  {{ Form::select('department_id', $departments, null, ["class" => 'form-control input-lg']) }}
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Content</label>
                  {{ Form::textarea('content', null, ["class" => 'form-control']) }}
                  @if ($errors->has('content'))
                        <p class="help is-danger">{{$errors->first('content')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">update</button>
                <a href="{{ route('volunterism.index') }}" class="btn btn-warning">Cancel</a>
              </div>
</div>
 </div>
 </div>
{!! Form::close() !!}  
  </div>
@endsection