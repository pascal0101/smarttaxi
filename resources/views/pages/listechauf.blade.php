 @extends('layouts.master')


@section('content')

 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Liste des chauffeurs</title>
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

    

 <body>  

 <div class="callout callout-info">
             
      <strong><h3><i class="fa fa-info"></i> NB:</h3>Veuillez cliquer sur le boutton imprimer pour Imprimer la liste</strong>
            </div>

 <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des Chauffeurs</h3>

            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Sexe</th>
                  <th>Adresse</th>
                  <th>Catégorie</th>
                  <th>Numero de Téléphone</th>
                  <th>Permis</th>
                  <th class="text-center">Actions</th>
                </tr>
                </thead>


              @foreach($chauffeurs as $chauffeur)
                <tbody>
                <tr>
                  <td>{{($chauffeur->NomchauffTaxi)}}</td>
                  <td>{{($chauffeur->PrechauffTaxi)}}</td>
                   <td>{{($chauffeur->Sexe)}}</td>
                  <td>{{($chauffeur->AdrChauffTaxi)}}</td>
                  <td>{{($chauffeur->CategoriPermis)}}</td>
                  <td>{{($chauffeur->Numero)}}</td>
              <td><a href="{{ asset('storage/'.$chauffeur ->permis) }}" class="btn btn-success btn-lg" role="button">Permis <i class="fa fa-file-pdf-o">&nbsp;&nbsp;</i></a></td>
                 
                 
<td class="text-center">
  <a class="btn btn-success btn-primary btn-sm" href="{{ route('infoChauff',[$chauffeur->id])}}"><i class="fa fa-eye" aria-hidden="true"></i></a>

   <a class="btn btn-primary  btn-sm" type="button" href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

    <a class="btn btn-raised btn-danger btn-sm"  data-toggle="modal" data-target="#myModalsup"><i class="fa fa-trash-o"></i></a>
</td>



<div class= "modal fade" id="myModalsup" tabindex= "-1" role= "dialog" aria-labelledby= "exampleModalLabel" aria-hidden= "true" >
  <div class= "modal-dialog" role= "document" >
  <div class= "modal-content" >
  <div class= "modal-header" >
  <h5 class= "modal-title" id= "exampleModalLabel" > Gerer Chauffeurs </h5>
  <button type= "button" class= "close" data-dismiss= "modal" aria-label= "Close" >
  <span aria-hidden= "true" > &times; </span>
  </button>
  </div>
  <div class= "modal-body" >
  <p>Est-vous sur de vouloir Supprimer cet chauffeur? </p>
  </div>
  <div class= "modal-footer" >
  <button type= "button" class= "btn btn-secondary" data-dismiss= "modal" > Non</button>
 <a href="{{ route('supprChauff',[$chauffeur->id])}}"> <button type= "submit" class= "btn btn-primary" > Oui  </button></a>
</div>
</div>
</div>
</div>


                 
                </tr>               
                </tbody>
                @endforeach

                
                <tfoot>
                <tr>
                    <th>Nom</th>
                  <th>Prenom</th>
                  <th>Sexe</th>
                  <th>Adresse</th>
                  <th>Catégorie</th>
                  <th>Numero_de_Téléphone</th>
                  <th>Permis</th>
                  <th class="text-center">Actions</th>
                </tr>
                </tfoot>
              </table>
              <a href="{{ url('/ImprimeChauffeurs') }}" class="btn btn-primary"><i class="fa fa-file-pdf-o">&nbsp;&nbsp;IMPRIMER</i></a>
            </div>          
          </div>        
        </div>       
      </div> 
    </section>    
  </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
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
@endsection
