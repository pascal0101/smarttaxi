@extends('layouts.master1')


@section('content')
<marquee> <i class="fa fa-taxi fa-5x"></i><strong style="color:red;">SmartTaxi </strong></marquee>
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                
                                <div class="col-xs-3">
                                    <i class="fa fa-list fa-5x"></i>
                                </div>
                <p><strong>LISTE DES CHAUFFEURS</strong></p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              
              <a href="{{ url('/ListeChauffeurs') }}" class="small-box-footer" style="font-style:italic;">LISTE DES CHAUFFEURS <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                  <div class="col-xs-3">
                                    <i class="fa fa-user-plus fa-5x"></i>
                                </div>
                
                <p><strong>CREER LES CHAUFFEURS</strong></p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ url('/Chauffeurs') }}" class="small-box-footer" style="font-style:italic;">CREER LES CHAUFFEURS <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
         

  <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                  <div class="col-xs-3">
                                    <i class="fa fa-taxi fa-5x"></i>
                                </div>

                <p><strong>CREER LES TAXIS</strong></p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ url('/Taxis') }}" class="small-box-footer" style="font-style:italic;">CREER LES TAXIS <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          

        
      

       <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                  <div class="col-xs-3">
                                    <i class="fa fa-institution fa-5x"></i>
                                </div>

                <p><strong>GERER LES AGENCES</strong></p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ url('/Agence') }}" class="small-box-footer">GERER LES AGENCES <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

         

           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                  <div class="col-xs-3">

                                    <i class="fa fa-taxi fa-5x"></i>
                                </div>
                
                <p><strong>LISTE DES TAXIS</strong></p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{url('/ListeTaxis')}}" class="small-box-footer">LISTE DES TAXIS<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                
                                <div class="col-xs-3">
                                    <i class="fa fa-list fa-5x"></i>
                                </div>
                <p><strong>LISTE DES MANAGERS</strong></p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ url('/ListeManagers') }}" class="small-box-footer">LISTE DES MANAGERS<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
 <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                  <div class="col-xs-3">
                      <i class="fa fa-male fa-5x"></i>
                  </div>

                <p><strong>LISTE DES PASSAGERS</strong></p>
              </div>
              <div class="icon">
                  <i class="ion ion-pie-graph"></i>
              </div>             
              <a href="{{ url('/ImprimePassagers') }}" class="small-box-footer">LISTE DES PASSAGERS <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

     <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                  <div class="col-xs-3">
                                    <i class="fa fa-line-chart fa-5x"></i>
                                </div>

                <p><strong>STATISTIQUE</strong></p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">STATISTIQUE <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>  

 @endsection