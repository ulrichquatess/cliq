@extends('layouts.boxed')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn">
                    <a class="btn btn-success" href="{{ route('project.create')}}">Create A New Project</a><br>
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
              <h3 class="box-title">Project Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Project Name</th>
                  <th>Project Description</th>
                  <th>Project Slug</th>
                  <th></th>
                  <th></th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                  @foreach($projects as $project ) 
                <tr>
                  <td>{{ substr(strip_tags($project->project_title), 0, 20) }} {{ strlen(strip_tags($project->project_title)) > 20 ? "...." : "" }}</td>
                  <td>{!! substr(strip_tags($project->project_description), 0, 20) !!} {!! strlen(strip_tags($project->project_description)) > 20 ? "...." : "" !!}</td>
                  <td>{!! substr(strip_tags($project->slug), 0, 15) !!} {!! strlen(strip_tags($project->slug)) > 15 ? "...." : "" !!}</td>
                  <td></td>
                  <td> </td>
                  <td><a class="btn btn-info btn-xs" href="{{ route('project.show', $project->id)}}">Show</a>
                    <a class="btn btn-primary btn-xs" href="{{ route('project.edit', $project->id) }}">Edit English</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['project.destroy', $project->id],'style'=>'display:inline']) !!}
                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}</td>
                </tr>
                @endforeach
                </tbody>
    
                <tfoot>
                  <th>Project Title</th>
                  <th>Project Description</th>
                  <th>Project Slug</th>
                  <th></th>
                  <th></th>
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