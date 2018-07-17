@extends('layouts.boxed')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn">
                    <a class="btn btn-success" href="{{ route('menu.create')}}">Create A New Menu</a><br>
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
              <h3 class="box-title">Menu Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Name in French</th>
                  <th></th>
                  <th></th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                  @foreach($menus as $menu) 
                <tr>
                  <td>{{ substr(strip_tags($menu->name), 0, 20) }} {{ strlen(strip_tags($menu->name)) > 20 ? "...." : "" }}</td>
                  <td>{!! substr(strip_tags($menu->name_fr), 0, 20) !!} {!! strlen(strip_tags($menu->name_fr)) > 20 ? "...." : "" !!}</td>
                  <td></td>
                  <td> </td>
                  <td><a class="btn btn-info btn-xs" href="{{ route('menu.show', $menu->id)}}">Show</a>
                    <a class="btn btn-primary btn-xs" href="{{ route('menu.edit', $menu->id) }}">Edit English</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['menu.destroy', $menu->id],'style'=>'display:inline']) !!}
                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}</td>
                </tr>
                @endforeach
                </tbody>
    
                <tfoot>
                  <th>Name</th>
                  <th>Name In French</th>
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