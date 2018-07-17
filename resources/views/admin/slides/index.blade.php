@extends('layouts.boxed')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn">
                    <a class="btn btn-success" href="{{ route('slide.create')}}">Create A New Slide</a><br>
                  </div>
                </div>
              </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Slide Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>Titre</th>
                  <th>Content</th>
                  <th>Video Link</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                  @foreach($slides as $slide ) 
                <tr>
                  <td>{{ substr(strip_tags($slide->title), 0, 40) }} {{ strlen(strip_tags($slide->title)) > 40 ? "...." : "" }}</td>
                  <td>{!! substr(strip_tags($slide->content), 0, 20) !!} {!! strlen(strip_tags($slide->content)) > 20 ? "...." : "" !!}</td>
                  <td>{!! substr(strip_tags($slide->video), 0, 20) !!} {!! strlen(strip_tags($slide->video)) > 20 ? "...." : "" !!}</td>
                  <td><a class="btn btn-info btn-xs" href="{{ route('slide.show', $slide->id)}}">Show</a>
                    <a class="btn btn-primary btn-xs" href="{{ route('slide.edit', $slide->id) }}">Edit English</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['slide.destroy', $slide->id],'style'=>'display:inline']) !!}
                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}</td>
                </tr>
                @endforeach
                </tbody>
    
                <tfoot>
                  <th>Titre</th>
                  <th>Content</th>
                  <th>Video LInk</th>
                  <th>Action</th>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection        