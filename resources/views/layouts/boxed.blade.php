<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('', 'Cliq Festival') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('Health/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('Health/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('Health/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('Health/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('Health/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('Health/dist/css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<body class="hold-transition skin-blue layout-boxed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>LIQ</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>{{ config('', 'Cliq Festival') }}</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a  class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('Health/dist/img/avatar.png')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('Health/dist/img/avatar.png')}}" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->name }}
                  <small>{{ Auth::user()->created_at }}</small>
                </p>
              </li>

              <li class="user-footer">
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Log out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('Health/dist/img/avatar.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a>
            <i class="fa fa-edit"></i> <span>Pages Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('page.create')}}"><i class="fa fa-circle-o"></i>Create New Page</a></li>
            <li><a href="{{ route('page.index') }}"><i class="fa fa-circle-o"></i>Show all Pages</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a>
            <i class="fa fa-edit"></i> <span>Client or Partner Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('client.create') }}"><i class="fa fa-circle-o"></i>Create New Client</a></li>
            <li><a href="{{ route('client.index') }}"><i class="fa fa-circle-o"></i>Show All Client</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a>
            <i class="fa fa-edit"></i> <span>Artist Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('artist.create') }}"><i class="fa fa-circle-o"></i>Create New Artist</a></li>
            <li><a href="{{ route('artist.index') }}"><i class="fa fa-circle-o"></i>Show All Artist</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a>
            <i class="fa fa-edit"></i> <span>BLog Or News Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('blog.create') }}"><i class="fa fa-circle-o"></i>Create New Blog</a></li>
            <li><a href="{{ route('blog.index') }}"><i class="fa fa-circle-o"></i>Show All Blog</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a>
            <i class="fa fa-edit"></i> <span>Events Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('service.create') }}"><i class="fa fa-circle-o"></i>Create New Event</a></li>
            <li><a href="{{ route('service.index') }}"><i class="fa fa-circle-o"></i>Show All Events</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a>
            <i class="fa fa-edit"></i> <span>Slide Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('slide.create') }}"><i class="fa fa-circle-o"></i>Create New Slide</a></li>
            <li><a href="{{ route('slide.index') }}"><i class="fa fa-circle-o"></i>Show All Slide</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a>
            <i class="fa fa-edit"></i> <span>Team Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('team.create') }}"><i class="fa fa-circle-o"></i>Create New Team</a></li>
            <li><a href="{{ route('team.index') }}"><i class="fa fa-circle-o"></i>Show All Team</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a>
            <i class="fa fa-edit"></i> <span>Project Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('project.create') }}"><i class="fa fa-circle-o"></i>Create New Project</a></li>
            <li><a href="{{ route('project.index') }}"><i class="fa fa-circle-o"></i>Show All Project</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a>
            <i class="fa fa-edit"></i> <span>Media Marketing Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('media.create') }}"><i class="fa fa-circle-o"></i>Create New Media</a></li>
            <li><a href="{{ route('media.index') }}"><i class="fa fa-circle-o"></i>Show All Media</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a>
            <i class="fa fa-edit"></i> <span>Menu Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('menu.create') }}"><i class="fa fa-circle-o"></i>Create New Menu</a></li>
            <li><a href="{{ route('menu.index') }}"><i class="fa fa-circle-o"></i>Show All Menu</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a>
            <i class="fa fa-edit"></i> <span>Volunterism Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('volunterism.create') }}"><i class="fa fa-circle-o"></i>Create New volunterism</a></li>
            <li><a href="{{ route('volunterism.index') }}"><i class="fa fa-circle-o"></i>Show All volunterism</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a>
            <i class="fa fa-edit"></i> <span>Department Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('department.create') }}"><i class="fa fa-circle-o"></i>Create New Department</a></li>
            <li><a href="{{ route('department.index') }}"><i class="fa fa-circle-o"></i>Show All Department</a></li>
          </ul>
        </li>

          <li class="treeview">
          <a>
            <i class="fa fa-edit"></i> <span>Setting Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('setting.create') }}"><i class="fa fa-circle-o"></i>Create New Setting</a></li>
            <li><a href="{{ route('setting.index') }}"><i class="fa fa-circle-o"></i>Show All Setting</a></li>
          </ul>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!--The content Found Here-->
    @yield('content');
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2017 <a>Cliq Festival</a>.</strong> All rights
    reserved. Build By <a>Quatess</a>
    <input type="hidden" name="Ulrich Quatess ulrichquatess@gmail.com">
  </footer>


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{URL::to('Health')}}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{URL::to('Health')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- DataTables -->
<script src="{{URL::to('Health')}}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{URL::to('Health')}}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- SlimScroll -->
<script src="{{URL::to('Health')}}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{URL::to('Health')}}/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{URL::to('Health')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::to('Health')}}/dist/js/demo.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
