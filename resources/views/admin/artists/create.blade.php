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
              <h3 class="box-title">Artist Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               {!! Form::open(['route' => 'artist.store', 'data-parsley-validate' => '', 'files' => true]) !!}

               <div class="form-group">
                 <label>Artist Link</label>
                 <input type="text" name="name" id="name" class="form-control" placeholder="Enter Link To View Portfolio ...">
                   @if ($errors->has('name'))
                       <p class="help is-danger">{{$errors->first('name')}} </p>
                    @endif
               </div>

               <div class="form-group">
                 <label>Artist Name</label>
                 <input type="text" name="link" id="link" class="form-control" placeholder="Enter Name ...">
                   @if ($errors->has('link'))
                       <p class="help is-danger">{{$errors->first('link')}} </p>
                    @endif
               </div>

                <div class="form-group">
                  {{ Form::label('artist_image', 'Upload Feautured Image:')}}
                  {{ Form::file('artist_image')}}
                   @if ($errors->has('artist_image'))
                        <p class="help is-danger">{{$errors->first('artist_image')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ route('artist.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>

{!! Form::close() !!}   
  </div>
@endsection