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
    <marquee><strong>MODIFIER UNE AGENCE</strong></marquee>
  </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
<form method="POST" action="{{ route('updateagence',[$agence->id]) }}" enctype="multipart/form-data" novalidate>
                {{csrf_field()}}
                
                <div class="card-body">


                  <div class="form-group">
            <label for="Nom" class="contol-label" >Code Agence<strong style="color: red;">*</strong></label>
                <input type="text" class="form-control" placeholder="Saisir le code agence" name="CodeAg" value="{{$agence ->codeAgen}}" required>
         
                  </div>

                  <div class="form-group has-error">
                <label for="Nom" class="contol-label" >Nom Agence<strong style="color: red;">*</strong></label>
           <input type="text" class="form-control" placeholder="Saisir votre Nom" name="NomAg" value="{{$agence ->NomAgen}}" required>
         
                  </div>

  

             <div class="form-group">
               <label for="Prenom">Numero<strong style="color: red;">*</strong></label>
            <input type="number" min="0" class="form-control"  placeholder="Saisir votre Adresse" name="NumeroAg" value="{{$agence ->TelephonAg}}" required>
            </div>


          <div class="form-group">
              <label for="Prenom">Email<strong style="color: red;">*</strong></label>
              <input type="email" class="form-control"  placeholder="Saisir l'email de l'agence" name="EmailAg" value="{{$agence ->Email}}" required>
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
  <p>Est-vous sur de vouloir modifier cette agence? </p>
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