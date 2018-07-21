@extends('layouts.boxed')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn">
                    <a class="btn btn-success" href="{{ route('artist.create')}}">Create A New Artist</a><br>
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
              <h3 class="box-title">Artist Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Artist Link</th>
                  <th>Artist Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                  @foreach($artists as $artist ) 
                  <tr>
                  <td>{{ substr(strip_tags($artist->name), 0, 30) }} {{ strlen(strip_tags($artist->name)) > 30 ? "...." : "" }}</td>
                  <td>{{ substr(strip_tags($artist->link), 0, 30) }} {{ strlen(strip_tags($artist->link)) > 30 ? "...." : "" }}</td>
                  <td><a class="btn btn-info btn-xs" href="{{ route('artist.show', $artist->id)}}">Show</a>
                    <a class="btn btn-primary btn-xs" href="{{ route('artist.edit', $artist->id) }}">Edit English</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['artist.destroy', $artist->id],'style'=>'display:inline']) !!}
                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}</td>
                </tr>
                @endforeach
                </tbody>
    
                <tfoot>
                <th>Artist Link</th>
                <th>Artist Name</th>
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