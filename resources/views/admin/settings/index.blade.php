@extends('layouts.boxed')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn">
                    <a class="btn btn-success" href="{{ route('setting.create')}}">Create A New Setting</a><br>
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
              <h3 class="box-title">Setting Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Facebook</th>
                  <th>Twitter</th>
                  <th>Youtube</th>
                  <th>Instagram</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                  @foreach($settings as $setting ) 
                <tr>
                  <td>{{ substr(strip_tags($setting->email), 0, 10) }} {{ strlen(strip_tags($setting->email)) > 10 ? "...." : "" }}</td>
                  <td>{!! substr(strip_tags($setting->phone), 0, 10) !!} {!! strlen(strip_tags($setting->phone)) > 10 ? "...." : "" !!}</td>
                  <td>{!! substr(strip_tags($setting->facebook), 0, 15) !!} {!! strlen(strip_tags($setting->facebook)) > 15 ? "...." : "" !!} </td>
                  <td>{!! substr(strip_tags($setting->twitter), 0, 15) !!} {!! strlen(strip_tags($setting->twitter)) > 15 ? "...." : "" !!} </td>
                  <td>{!! substr(strip_tags($setting->youtube), 0, 15) !!} {!! strlen(strip_tags($setting->youtube)) > 15 ? "...." : "" !!} </td>
                  <td>{!! substr(strip_tags($setting->instagram), 0, 15) !!} {!! strlen(strip_tags($setting->instagram)) > 15 ? "...." : "" !!} </td>
                  <td><a class="btn btn-info btn-xs" href="{{ route('setting.show', $setting->id)}}">Show</a>
                    <a class="btn btn-primary btn-xs" href="{{ route('setting.edit', $setting->id) }}">Edit English</a>
                   </td>
                </tr>
                @endforeach
                </tbody>
    
                <tfoot>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Facebook</th>
                  <th>Twitter</th>
                  <th>Youtube</th>
                  <th>Instagram</th>
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