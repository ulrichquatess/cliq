@extends('layouts.boxed')
@section('content')
    <!-- Content Header (Volunteer header) -->
    <section class="content-header">
      <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn">
                    <a class="btn btn-success" href="{{ route('volunterism.create')}}">Create A New Volunteer</a><br>
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
              <h3 class="box-title">Volunteer Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Work Level</th>
                  <th>Volunteer Content</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                  @foreach($voluns as $volun ) 
                <tr>
                  <td>{{ substr(strip_tags($volun->fname), 0, 20) }} {{ strlen(strip_tags($volun->fname)) > 20 ? "...." : "" }}</td>
                  <td>{{ substr(strip_tags($volun->lname), 0, 20) }} {{ strlen(strip_tags($volun->lname)) > 20 ? "...." : "" }}</td>
                  <td>{{ substr(strip_tags($volun->department->name), 0, 20) }} {{ strlen(strip_tags($volun->department->name)) > 20 ? "...." : "" }}</td>
                  <td>{!! substr(strip_tags($volun->content), 0, 20) !!} {!! strlen(strip_tags($volun->content)) > 20 ? "...." : "" !!}</td>
                  <td><a class="btn btn-info btn-xs" href="{{ route('volunterism.show', $volun->id)}}">Show</a>
                    <a class="btn btn-primary btn-xs" href="{{ route('volunterism.edit', $volun->id) }}">Edit English</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['volunterism.destroy', $volun->id],'style'=>'display:inline']) !!}
                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}</td>
                </tr>
                @endforeach
                </tbody>
    
                <tfoot>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Work Level</th>
                  <th>Volunteer Content</th>
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