@extends('layouts.boxed')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn">
                    <a class="btn btn-success" href="{{ route('team.create')}}">Create A New Team</a><br>
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
              <h3 class="box-title">Team Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Team Name</th>
                  <th>Position</th>
                  <th>G-mail</th>
                  <th>Facebook</th>
                  <th>Twitter</th>
                  <th>Linkedin</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                  @foreach($teams as $team ) 
                <tr>
                  <td>{{ substr(strip_tags($team->name), 0, 40) }} {{ strlen(strip_tags($team->name)) > 40 ? "...." : "" }}</td>
                  <td>{!! substr(strip_tags($team->position), 0, 20) !!} {!! strlen(strip_tags($team->position)) > 20 ? "...." : "" !!}</td>
                  <td>{!! substr(strip_tags($team->gmail), 0, 15) !!} {!! strlen(strip_tags($team->gmail)) > 15 ? "...." : "" !!}</td>
                  <td>{!! substr(strip_tags($team->facebook), 0, 15) !!} {!! strlen(strip_tags($team->facebook)) > 15 ? "...." : "" !!} </td>
                  <td>{!! substr(strip_tags($team->twitter), 0, 15) !!} {!! strlen(strip_tags($team->twitter)) > 15 ? "...." : "" !!} </td>
                  <td>{!! substr(strip_tags($team->linkedin), 0, 15) !!} {!! strlen(strip_tags($team->linkedin)) > 15 ? "...." : "" !!} </td>
                  <td><a class="btn btn-info btn-xs" href="{{ route('team.show', $team->id)}}">Show</a>
                    <a class="btn btn-primary btn-xs" href="{{ route('team.edit', $team->id) }}">Edit English</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['team.destroy', $team->id],'style'=>'display:inline']) !!}
                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}</td>
                </tr>
                @endforeach
                </tbody>
    
                <tfoot>
                  <th>Team Name</th>
                  <th>Position</th>
                  <th>G-mail</th>
                  <th>Facebook</th>
                  <th>Twitter</th>
                  <th>Linkedin</th>
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