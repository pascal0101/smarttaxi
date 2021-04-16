@extends('layouts.master')


@section('content')
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
            <div class="card card-primary">
              
              <div class="card-header">

  <h3 class="card-title">
    <marquee><strong>CREER UN MANAGER</strong></marquee>
  </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
          <form method="POST" action="{{ route('insManager') }}" enctype="multipart/form-data" novalidate>
                {{csrf_field()}}
                

                <div class="card-body">
               

             
                  <div class="form-group has-error">
                    <label for="Nom" class="contol-label" >Nom<strong style="color: red;">*</strong></label>
                <input type="text" class="form-control" placeholder="Saisir votre Nom" name="NomManag" required>
         
                  </div>

            <div class="form-group">
               <label for="Prenom">Prenom<strong style="color: red;">*</strong></label>
              <input type="text" class="form-control"  placeholder="Saisir votre Prenom" name="PrenomManag" required>
            </div>

              <div class="form-group">
                      <label >Sexe<strong style="color: red;">*</strong></label>

                      <select class="form-control" name='SexeManag' required="required">
                      <option value= 'M' > Masculin</option>
                      <option value= 'F' > F&eacute;minin</option>
                      </select>

              </div>

          <div class="form-group">
               <label for="Prenom">Photo<strong style="color: red;">*</strong></label>
          <input type="file" class="form-control"  placeholder="Saisir votre Adresse" name="photoManag" required>
            </div>


            <div class="form-group">
               <label for="Prenom">Adresse<strong style="color: red;">*</strong></label>
              <input type="text" class="form-control"  placeholder="Saisir votre Adresse" name="AdresseManag" required>
            </div>

            
               <div class="form-group">
                      <label >Numero<strong style="color: red;">*</strong></label>
                      <input type="text" class="form-control"  placeholder="Saisir votre Adresse" name="NumManag" required>

              </div>

                  <div class="form-group">
                           <label for="Pays">Agence<strong style="color: red;">*</strong></label>
                            <select class="form-control" name="AgenceManag" required="required">
                              @foreach($agence as $agence)

                              <option value="{{$agence->CodeAgen}}">{{$agence->NomAgen}}</option>                   
                              @endforeach
                                </select>
                        </div>

      
               <div class="form-group">
               <label for="Prenom">email<strong style="color: red;">*</strong></label>
            <input type="email" class="form-control"  placeholder="Saisir votre email" name="EmailManag" required>
            </div>

            <div class="form-group">
               <label for="Prenom">Password<strong style="color: red;">*</strong></label>
        <input type="Password" class="form-control"  placeholder="Saisir votre Mot de passe" name="PasswordManag" required>
            </div>


                            <div class="card-footer">
                  <button type="button" class="btn btn-info" class="fa fa-fw ti-check" data-toggle="modal" data-target="#myModal"><i class="fa fa-check"></i>Ajouter</button>
                  <button type="reset" class="btn btn-danger float-right"><i class="fa fa-close"></i>Annuler</button>

                </div>
       
   


<div class= "modal fade" id="myModal" tabindex= "-1" role= "dialog" aria-labelledby= "exampleModalLabel" aria-hidden= "true" >
  <div class= "modal-dialog" role= "document" >
  <div class= "modal-content" >
  <div class= "modal-header" >
  <h5 class= "modal-title" id= "exampleModalLabel" > CREATION DE MANAGERS </h5>
  <button type= "button" class= "close" data-dismiss= "modal" aria-label= "Close" >
  <span aria-hidden= "true" > &times; </span>
  </button>
  </div>
  <div class= "modal-body" >
  <p>Est-vous sur de vouloir créer ce manager? </p>
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
@endsection