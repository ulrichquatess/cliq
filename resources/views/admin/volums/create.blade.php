@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<!-- general form elements disabled -->
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Create English Content</a></li>
  </ul>

    <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">VolunterismForm General </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::open(['route' => 'volunterism.store', 'data-parsley-validate' => '', 'files' => true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name ...">
                    @if ($errors->has('fname'))
                        <p class="help is-danger">{{$errors->first('fname')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Last Name...">
                    @if ($errors->has('lname'))
                        <p class="help is-danger">{{$errors->first('lname')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email...">
                    @if ($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Volunteer Age</label>
                  <input type="text" name="age" id="age" class="form-control" placeholder="Enter Age...">
                    @if ($errors->has('age'))
                        <p class="help is-danger">{{$errors->first('age')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Volunteer Telephone</label>
                  <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter phone number...">
                    @if ($errors->has('phone'))
                        <p class="help is-danger">{{$errors->first('phone')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Volunteer Residence</label>
                  <input type="text" name="residence" id="residence" class="form-control" placeholder="Enter residence here...">
                    @if ($errors->has('residence'))
                        <p class="help is-danger">{{$errors->first('residence')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Select Level</label>
                  <select name="department_id" class="form-control">
                    @foreach($department as $department)
                      <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label>Personnal Link</label>
                  <input type="text" name="link" id="link" class="form-control" placeholder="Enter link speaking about you (Optional: Facebook, Twitter, LInkedin etc)">
                    @if ($errors->has('link'))
                        <p class="help is-danger">{{$errors->first('link')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  {{ Form::label('volum_image', 'Upload Your Image:')}}
                  {{ Form::file('volum_image')}}
                   @if ($errors->has('volum_image'))
                        <p class="help is-danger">{{$errors->first('volum_image')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Volunteer Describtion</label>
                  <textarea class="form-control" name="content" id="content" rows="3" placeholder="Enter ..."></textarea>
                  @if ($errors->has('content'))
                        <p class="help is-danger">{{$errors->first('content')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('volunterism.index') }}" class="btn btn-default">Return</a>
              </div>
 </div>
 </div>
</div>
{!! Form::close() !!}  
  </div>
 
@endsection