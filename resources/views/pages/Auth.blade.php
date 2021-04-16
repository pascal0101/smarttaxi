 
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

 
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

<style type="text/css">
.col-md-8{
  margin:auto;
}
</style>
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8 col-md-offset-5 col-sm-10 col-sm-offset-1">
            <!-- general form elements -->
            <div class="card card-success">
              
              <div class="card-header">

  <h3 class="card-title">
    <marquee><strong>CONNECTEZ -VOUS COMME UN MANAGERS</strong></marquee>
  </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
          <form method="POST" action="" enctype="multipart/form-data" novalidate>
                {{csrf_field()}}
           
 <div class="card-body">
      <div class="form-group">
               <label for="Prenom">Email<strong style="color: red;">*</strong></label>
        <input type="email" class="form-control"  placeholder="Saisir l'email du chauffeur" name="email" required>
            </div>

            <div class="form-group">
               <label for="Prenom">Password<strong style="color: red;">*</strong></label>
        <input type="Password" class="form-control"  placeholder="Saisir votre Mot de passe" name="password" required>
            </div>
   </div>  

                            <div class="card-footer">
                 <button class="btn btn-info btn-block" type="submit"><strong><span class="glyphiconglyphicon-ok-sign" style="color:#4f4;"></span>connexion</strong></button> 
                </div>
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->

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
</body>
</html>

 


