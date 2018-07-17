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
              <h3 class="box-title">Éléments généraux</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::open(['route' => 'page.store', 'data-parsley-validate' => '', 'files' => true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="Enter ...">
                    @if ($errors->has('title'))
                        <p class="help is-danger">{{$errors->first('title')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Sub Title</label>
                  <input type="text" name="sub_title" id="sub_title" class="form-control" placeholder="Optional...">
                    @if ($errors->has('subtitle'))
                        <p class="help is-danger">{{$errors->first('sub_title')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Addition Text</label>
                  <input type="text" name="option" id="option" class="form-control" placeholder="Optional...">
                    @if ($errors->has('option'))
                        <p class="help is-danger">{{$errors->first('option')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Addition Text</label>
                  <input type="text" name="option1" id="option1" class="form-control" placeholder="Optional...">
                    @if ($errors->has('option1'))
                        <p class="help is-danger">{{$errors->first('option1')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  {{ Form::label('page_image', 'Upload Page Image:')}}
                  {{ Form::file('page_image')}}
                   @if ($errors->has('page_image'))
                        <p class="help is-danger">{{$errors->first('page_image')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Content</label>
                  <textarea class="form-control" name="content" id="content" rows="3" placeholder="Enter ..."></textarea>
                  @if ($errors->has('content'))
                        <p class="help is-danger">{{$errors->first('content')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <a href="{{ route('page.index') }}" class="btn btn-default">Return</a>
              </div>
 </div>
 </div>
</div>

<div id="menu1" class="tab-pane fade">
      <div class="box-body">

               <div class="form-group">
                  <label>Titre</label>
                  <input type="text" name="title_fr" id="title_fr" class="form-control" placeholder="Enter ...">
                    @if ($errors->has('title_fr'))
                        <p class="help is-danger">{{$errors->first('title_fr')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Sous-titre</label>
                  <input type="text" name="sub_title_fr" id="sub_title_fr" class="form-control" placeholder="Optional ...">
                    @if ($errors->has('sub_title_fr'))
                        <p class="help is-danger">{{$errors->first('sub_title_fr')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Texte d'ajout</label>
                  <input type="text" name="option_fr" id="option_fr" class="form-control" placeholder="Optional ...">
                    @if ($errors->has('option_fr'))
                        <p class="help is-danger">{{$errors->first('option_fr')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Texte d'ajout</label>
                  <input type="text" name="option1_fr" id="option1_fr" class="form-control" placeholder="Optional ...">
                    @if ($errors->has('option1_fr'))
                        <p class="help is-danger">{{$errors->first('option1_fr')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Contenu</label>
                  <textarea class="form-control" name="content_fr" id="content_fr" rows="3" placeholder="Enter ..."></textarea>
                  @if ($errors->has('content_fr'))
                        <p class="help is-danger">{{$errors->first('content_fr')}} </p>
                     @endif
                </div>
               
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('page.index') }}" class="btn btn-default">Return</a>
              </div>

{!! Form::close() !!}
 </div>
    </div>   
  </div>
 
@endsection