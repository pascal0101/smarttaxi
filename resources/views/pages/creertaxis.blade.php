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
            <div class="card card-warning">
              
              <div class="card-header">

  <h3 class="card-title">
    <marquee><strong>CREER UN TAXIS</strong></marquee>
  </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
          <form method="POST" action="{{ route('insTaxis') }}" enctype="multipart/form-data" novalidate>
                {{csrf_field()}}
                
                <div class="card-body">
                  
                    <div class="form-group">
                           <label for="Pays">Agence<strong style="color: red;">*</strong></label>
                            <select class="form-control" name="Code_Agence" required="required">
                              @foreach($agence as $agence)

                              <option value="{{$agence->CodeAgen}}">{{$agence->NomAgen}}</option>                   
                              @endforeach
                                </select>
                        </div>

      
               <div class="form-group">
                      <label >Type Conducteur<strong style="color: red;">*</strong></label>

                      <select class="form-control"  name='Code_Type_con' required="required">
                      <option value= 'Taxi Mixte'> Taxi Mixte</option>
                      <option value= 'Taxi Reservé'>Taxi Reservé</option>
                      </select>

              </div>
              <div class="form-group">
                <label class="contol-label">Marque Taxi<strong style="color: red;">*</strong></label>
                <input type="text" class="form-control" placeholder="Saisir le Libelle Taxi" name="LibTaxi" required>
         
                  </div>

            <div class="form-group">
               <label for="Prenom">Nombre de place<strong style="color: red;">*</strong></label>
              <input type="number" min="5" class="form-control"  placeholder="Saisir le nombre de place" name="Nbrplace" required>
            </div>
            <div class="form-group">
               <label for="Prenom">Immatriculation Taxi<strong style="color: red;">*</strong></label>
              <input type="text" class="form-control"  placeholder="Saisir l'imatriculation'" name="ImmaTaxi" required>
            </div>
              
               <div class="form-group">
                      <label >Couleur Taxi<strong style="color: red;">*</strong></label>

                      <select class="form-control" name='Couleur_Taxi' required="required">
                      <option value= 'Rouge' > Rouge</option>
                      <option value= 'Jaune' > Jaune</option>
                      <option value= 'Vert' > Vert</option>
                      <option value= 'Bleu' > Bleu</option>
                      </select>

              </div>

                   

                            <div class="card-footer">
                  <button type="button" class="btn btn-info" class="fa fa-fw ti-check" data-toggle="modal" data-target="#myModal"><i class="fa fa-check"></i>Ajouter</button>
                  <button type="reset" class="btn btn-danger float-right"><i class="fa fa-close"></i>Annuler</button>

                </div>
       
   


<div class= "modal fade" id="myModal" tabindex= "-1" role= "dialog" aria-labelledby= "exampleModalLabel" aria-hidden= "true" >
  <div class= "modal-dialog" role= "document" >
  <div class= "modal-content" >
  <div class= "modal-header" >
  <h5 class= "modal-title" id= "exampleModalLabel" > CREATION DE TAXIS </h5>
  <button type= "button" class= "close" data-dismiss= "modal" aria-label= "Close" >
  <span aria-hidden= "true" > &times; </span>
  </button>
  </div>
  <div class= "modal-body" >
  <p>Est-vous sur de vouloir créer ce Taxis? </p>
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