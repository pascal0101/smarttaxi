@extends('layouts.master')


@section('content')
<style type="text/css">
.col-md-8{
  margin:auto;
}
</style>
<body style="background-color: yellow">
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8 col-md-offset-5 col-sm-10 col-sm-offset-1">
            <!-- general form elements -->
            <div class="card card-success">
              
              <div class="card-header">

  <h3 class="card-title">
    <marquee><strong>CREER UNE AGENCE</strong></marquee>
  </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
          <form method="POST" action="{{ route('insAgence') }}" enctype="multipart/form-data" novalidate>
                {{csrf_field()}}
                


                <div class="card-body">


                  <div class="form-group">
            <label for="Nom" class="contol-label" >Code Agence<strong style="color: red;">*</strong></label>
            <input type="text" class="form-control" placeholder="Saisir le code agence" name="CodeAg" required>
         
                  </div>

                  <div class="form-group has-error">
                <label for="Nom" class="contol-label" >Nom Agence<strong style="color: red;">*</strong></label>
                <input type="text" class="form-control" placeholder="Saisir votre Nom" name="NomAg" required>
         
                  </div>

  

             <div class="form-group">
            <label for="Prenom">Numero<strong style="color: red;">*</strong></label>
            <input type="number" min="0" class="form-control"  placeholder="Saisir votre Adresse" name="NumeroAg" required>
            </div>


          <div class="form-group">
              <label for="Prenom">Email<strong style="color: red;">*</strong></label>
              <input type="email" class="form-control"  placeholder="Saisir l'email de l'agence" name="EmailAg" required>
          </div>


                            <div class="card-footer">
                  <button type="button" class="btn btn-info" class="fa fa-fw ti-check" data-toggle="modal" data-target="#myModal"><i class="fa fa-check"></i>Ajouter</button>
                  <button type="reset" class="btn btn-danger float-right"><i class="fa fa-close"></i>Annuler</button>

                </div>
       
   


<div class= "modal fade" id="myModal" tabindex= "-1" role= "dialog" aria-labelledby= "exampleModalLabel" aria-hidden= "true" >
  <div class= "modal-dialog" role= "document" >
  <div class= "modal-content" >
  <div class= "modal-header" >
  <h5 class= "modal-title" id= "exampleModalLabel" > CREATION D'AGENCE </h5>
  <button type= "button" class= "close" data-dismiss= "modal" aria-label= "Close" >
  <span aria-hidden= "true" > &times; </span>
  </button>
  </div>
  <div class= "modal-body" >
  <p>Est-vous sur de vouloir créer cette agence? </p>
  </div>
  <div class= "modal-footer" >
  <button type= "button" class= "btn btn-secondary" data-dismiss= "modal" > Non</button>
  <button type= "submit" class= "btn btn-primary" > Oui </button>
</div>
</div>
</div>
</div>


        </div>
      </div>
      </div>
      </div>
      </form>
      </div>
<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
    <center><h3 class="card-title"><i class="glyphicon glyphicon-folder-open"></i>Liste des Agences</h3></center> 

            </div>
        
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Code</th>
                  <th>Agence</th>
                  <th>Telephone</th>
                  <th>Email</th>               
                  <th class="text-center">Actions</th>
                </tr>
                </thead>
                
                @foreach($agences as $agence)
                <tbody>
                <tr>

                  <td>{{($agence->codeAgen)}}</td>
                  <td>{{($agence->NomAgen)}}</td>
                   <td>{{($agence->TelephonAg)}}</td>
                  <td>{{($agence->Email)}}</td>
                

<td class="text-center">
  <a class="btn btn-success  btn-sm" type="button" href="{{ route('updateagence',[$agence->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> || <a class="btn btn-raised btn-danger btn-sm"  data-toggle="modal" data-target="#myModalsup"><i class="fa fa-trash-o"></i></a>
</td>

<div class= "modal fade" id="myModalsup" tabindex= "-1" role= "dialog" aria-labelledby= "exampleModalLabel" aria-hidden= "true" >
  <div class= "modal-dialog" role= "document" >
  <div class= "modal-content" >
  <div class= "modal-header" >
  <h5 class= "modal-title" id= "exampleModalLabel" > AGENCE </h5>
  <button type= "button" class= "close" data-dismiss= "modal" aria-label= "Close" >
  <span aria-hidden= "true" > &times; </span>
  </button>
  </div>
  <div class= "modal-body" >
  <p>Est-vous sur de vouloir Supprimer cette agence? </p>
  </div>
  <div class= "modal-footer" >
  <button type= "button" class= "btn btn-secondary" data-dismiss= "modal" > Non</button>
 <a href="{{ route('supprAgen',[$agence->id])}}"> <button type= "submit" class= "btn btn-primary" > Oui  </button></a>
</div>
</div>
</div>
</div>
                 
                </tr>               
                </tbody>
                @endforeach
                
              </table>

            </div>          
          </div>
         </div>
     </section>
          <script>
  $( '#myModal' ).on( 'shown.bs.modal' , function () {
      $( '#myInput' ).trigger( 'focus' )
    });

   $( '#myModalsup' ).on( 'shown.bs.modal' , function () {
      $( '#myInput' ).trigger( 'focus' )
    });
</script> 
</body>
@endsection