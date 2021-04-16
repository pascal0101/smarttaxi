<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SmartTaxi</title>
  <!-- Tell the browser to be responsive to screen width -->
   <link rel="stylesheet" href="DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="DataTables/DataTables-1.10.18/css/dataTables.bootstrap.min.css">
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="theme/plugins/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="theme/plugins/datatables/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="theme/plugins/datatables/jquery.dataTables.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="theme/dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="theme/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="theme/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="theme/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="theme/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="theme/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text edito<r -->
  <link rel="stylesheet" href="theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <script src="bootstrap-sweetalert-master/dist/sweetalert.js"></script>
    <link rel="stylesheet" href="bootstrap-sweetalert-master/dist/sweetalert.css"> 

 


</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/admin') }}" class="nav-link"> <i class="fa fa-home"></i> Accueil</a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
     
            <!-- Message Start -->
            
            <!-- Message End -->
          
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="theme/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><srtrong  style="color:red;">SmartTaxi </srtrong><i class="fa fa-taxi"></i></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="theme/dist/img/iai.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">carlos</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
         
      
          <li class="nav-header">&nbsp;&nbsp;GERER COMPTE&nbsp;&nbsp;&nbsp;<i class="fa fa-key"></i></li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-sign-in"></i>
              <p>
                 COMPTE
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="{{url('/admin/logout')}}" class="nav-link">
                  <i class="fa fa-sign-out  nav-icon"></i>
                  <p>Deconnexion</p>
                </a>
              </li>
              
            </ul>
          </li>
 
              
          
          </li>
             <li class="nav-item">
                <a href="{{ url('/admin') }}" class="nav-link active">
                  <i class="fa fa-home"></i>
                  <p>ACCEUIL</p>
                </a>
              </li>
 
         

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
                
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin')}}" class="btn btn-success"><i class="fa fa-home"></i>ACCEUIL</a></li>
              <li class="breadcrumb-item active"><i class="fa fa-taxi"></i><strong style="color:red;">SmartTaxi</strong></li>
            </ol>

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
      <!-- /.container-fluid -->
      
    </div>
    <!-- /.content-header -->


      @if(session()->has('message'))

        <div class="alert alert-primary">
            {{ session()->get('message')}}
        </div>

        @endif

     @if(session()->has('message1'))

        <div class="alert alert-primary">
            {{ session()->get('message1')}} 
        </div>
      @endif



@if(session()->has('message2'))

        <div class="alert alert-primary">
            {{ session()->get('message2')}} 
        </div>
      @endif
@if(session()->has('message3'))

        <div class="alert alert-primary">
            {{ session()->get('message3')}} 
        </div>
      @endif

@if(session()->has('message4'))

        <div class="alert alert-primary">
            {{ session()->get('message4')}} 
        </div>
      @endif
@if(session()->has('message5'))

        <div class="alert alert-primary">
            {{ session()->get('message5')}} 
        </div>
      @endif

@if(session()->has('message6'))

        <div class="alert alert-primary">
            {{ session()->get('message6')}} 
        </div>
      @endif
@if(session()->has('message7'))

        <div class="alert alert-primary">
            {{ session()->get('message7')}} 
        </div>
      @endif

@if(session()->has('message8'))

        <div class="alert alert-primary">
            {{ session()->get('message8')}} 
        </div>
      @endif


    @yield('content')
    <!-- Main content -->
    
          <!-- ./col -->
        </div>
     
        <!-- /.row -->
        <!-- Main row -->
      
  </div>
  <!-- /.content-wrapper -->


   

  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->


 <footer class="main-footer" style="color:skyblue;">
<marquee><strong style="color:red;">SmartTaxi</strong></marquee>
    <strong>Copyright &copy; 2017-2018 <strong style="color:red;">SmartTaxi</strong></strong>
    tout droit est reserves.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b>1.0
    </div>
</footer>

    
 
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

<!-- jQuery -->
<script src="DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>

<script src="DataTables/DataTables-1.10.18/js/dataTables.bootstrap.min.js"></script>
<script src="DataTables/DataTables-1.10.18/js/jquery.js"></script>



<script src="theme/plugins/jquery/jquery.min.js"></script>
<script src="theme/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="theme/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="theme/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="theme/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="theme/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="theme/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="theme/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="theme/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="theme/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="theme/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="theme/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="theme/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="theme/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="theme/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="theme/dist/js/demo.js"></script>


</body>
</html>
