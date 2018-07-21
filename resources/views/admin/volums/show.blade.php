@extends('layouts.boxed')
@section('content')


    <!-- Main content -->
    <section class="content">

      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-red">
                    {{ date( ' h:ia ', strtotime( $volun->updated_at ))}}
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-envelope bg-blue"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i>{{ date( 'M j Y ', strtotime( $volun->updated_at ))}}</span>

                <h3 class="timeline-header"><a>{{ $volun->fname }} {{ $volun->lname }}</a></h3>

                <div class="timeline-body">
                  {!! $volun->content !!}
                </div>

                 <h3 class="timeline-header"><a>{{ $volun->describtion }}</a></h3>

                <div class="timeline-footer">
                  <a class="btn btn-info" href="{{ route('volunterism.index')}}">Return</a>
                </div>
              </div>
              <div class="container" style="margin-top: 50px; margin-left: 10px;">
                <div class="row">
                  <div class="col-lg-2">
                     <img src="{{asset('images/volum/'.$volun->image)}}" alt="image logo">
                  </div>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
          </ul>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
@endsection