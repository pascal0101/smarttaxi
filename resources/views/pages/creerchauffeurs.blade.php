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
            <div class="card card-success">
              
              <div class="card-header">

  <h3 class="card-title">
    <marquee><strong>CREER UN CHAUFFEUR</strong></marquee>
  </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
          <form method="POST" action="{{ route('inscription') }}" enctype="multipart/form-data" novalidate>
                {{csrf_field()}}
                
                <div class="card-body">
                  <div class="form-group has-error">
                    <label for="Nom" class="contol-label" >Nom<strong style="color: red;">*</strong></label>
                <input type="text" class="form-control" placeholder="Saisir votre Nom" name="NomChof" required>
         
                  </div>

            <div class="form-group">
               <label for="Prenom">Prenom<strong style="color: red;">*</strong></label>
              <input type="text" class="form-control"  placeholder="Saisir votre Prenom" name="PrenomChof" required>
            </div>

              <div class="form-group">
                      <label >Sexe<strong style="color: red;">*</strong></label>

                      <select class="form-control" name='SexeChof' required="required">
                      <option value= 'M' > Masculin</option>
                      <option value= 'F' > F&eacute;minin</option>
                      </select>

              </div>

         

            <div class="form-group">
               <label for="Prenom">Adresse<strong style="color: red;">*</strong></label>
              <input type="text" class="form-control"  placeholder="Saisir votre Adresse" name="AdresseChof" required>
            </div>

             <div class="form-group">
                      <label >Catégorie de permis<strong style="color: red;">*</strong></label>

                      <select class="form-control" name='CategorieChof' required="required">
                      <option value= 'A1' >A1</option>
                      <option value= 'A' > A</option>
                      <option value= 'B' > B</option>
                      <option value= 'C' > C</option>
                      <option value= 'E' > E</option>
                      <option value= 'F' > F</option>
                      <option value= 'G' > G</option>
                      </select>

              </div>

             <div class="form-group">
               <label for="Prenom">Numero<strong style="color: red;">*</strong></label>
              <input type="number" min="0" class="form-control"  placeholder="Saisir votre Adresse" name="NumeroChof" required>
            </div>

                    <div class="form-group">
                           <label for="Pays">Taxis<strong style="color: red;">*</strong></label>
                            <select class="form-control" name="TaxiChof" required="required">
                              @foreach($taxi as $taxi)
 
                              <option value="{{$taxi->CodeTaxi}}">{{$taxi->ImmaTaxi}}</option>                   
                              @endforeach
                                </select>
                        </div>


              

            <div class="form-group">
               <label for="Prenom">Photo<strong style="color: red;">*</strong></label>
              <input type="file" class="form-control"  placeholder="Saisir votre Adresse" name="PhotoChof" required>
            </div>

             <div class="form-group">
               <label for="Prenom">Permis<strong style="color: red;">*</strong></label>
              <input type="file" class="form-control"  placeholder="Saisir votre Adresse" name="PermisChof" required>
            </div>


<div class="form-group">
               <label for="Prenom">Email<strong style="color: red;">*</strong></label>
        <input type="email" class="form-control"  placeholder="Saisir l'email du chauffeur" name="EmailChof" required>
            </div>

            <div class="form-group">
               <label for="Prenom">Password<strong style="color: red;">*</strong></label>
        <input type="Password" class="form-control"  placeholder="Saisir votre Mot de passe" name="PasswordChof" required>
            </div>


                            <div class="card-footer">
                  <button type="button" class="btn btn-info" class="fa fa-fw ti-check" data-toggle="modal" data-target="#myModal"><i class="fa fa-check"></i>Ajouter</button>
                  <button type="reset" class="btn btn-danger float-right"><i class="fa fa-close"></i>Annuler</button>

                </div>
       
   


<div class= "modal fade" id="myModal" tabindex= "-1" role= "dialog" aria-labelledby= "exampleModalLabel" aria-hidden= "true" >
  <div class= "modal-dialog" role= "document" >
  <div class= "modal-content" >
  <div class= "modal-header" >
  <h5 class= "modal-title" id= "exampleModalLabel" > CREATION DE CHAUFFEURS </h5>
  <button type= "button" class= "close" data-dismiss= "modal" aria-label= "Close" >
  <span aria-hidden= "true" > &times; </span>
  </button>
  </div>
  <div class= "modal-body" >
  <p>Est-vous sur de vouloir créer ce chauffeur? </p>
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