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
              <h3 class="box-title">Page Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::model($page, ['route' => ['page.update', $page->id], 'method' => 'PATCH', 'files' =>true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Title</label>
                  {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}
                    @if ($errors->has('title'))
                        <p class="help is-danger">{{$errors->first('title')}} </p>
                     @endif
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Sub Title</label>
                  {{ Form::text('sub_title', null, ["class" => 'form-control input-lg']) }}
                    @if ($errors->has('sub_title'))
                        <p class="help is-danger">{{$errors->first('sub_title')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Adding Text</label>
                  {{ Form::text('option', null, ["class" => 'form-control input-lg']) }}
                </div>

                 <!-- text input -->
                <div class="form-group">
                  <label>Adding Text</label>
                  {{ Form::text('option1', null, ["class" => 'form-control input-lg']) }}
                </div>

                <div class="form-group">
                  {{ Form::label('page_image', 'Upload Page Image:')}}
                  {{ Form::file('page_image')}}
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
                <a href="{{ route('page.index') }}" class="btn btn-warning">Cancel</a>
              </div>
</div>
 </div>
 </div>
 <div id="menu1" class="tab-pane fade">
      <div class="box-body">
              
                <div class="form-group">
                  <label>Titre</label>
                 {{ Form::text('title_fr', null, ["class" => 'form-control']) }}
                     @if ($errors->has('title_fr'))
                        <p class="help is-danger">{{$errors->first('title_fr')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Sous-titre</label>
                  {{ Form::text('sub_title_fr', null, ["class" => 'form-control input-lg']) }}
                    @if ($errors->has('sub_title_fr'))
                        <p class="help is-danger">{{$errors->first('sub_title_fr')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Texte d'ajout</label>
                  {{ Form::text('option_fr', null, ["class" => 'form-control input-lg']) }}
                </div>

                 <!-- text input -->
                <div class="form-group">
                  <label>Texte d'ajout</label>
                  {{ Form::text('option1_fr', null, ["class" => 'form-control input-lg']) }}
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Contenu</label>
                  {{ Form::textarea('content_fr', null, ["class" => 'form-control']) }}
                     @if ($errors->has('content_fr'))
                        <p class="help is-danger">{{$errors->first('content_fr')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('page.index') }}" class="btn btn-warning">Cancel</a>
              </div>

{!! Form::close() !!}
 </div>
    </div>   
  </div>
@endsection