@extends('layouts.master')


@section('content')
<marquee> <i class="fa fa-taxi fa-5x"></i><strong style="color:red;">SmartTaxi </strong></marquee>
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
          <!-- ./col -->
          
          <!-- ./col -->
          
          <!-- ./col -->
         

  

        
       <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                  <div class="col-xs-3">
                      <i class="fa fa-user-plus fa-5x"></i>
                  </div>

                <p><strong>CREER LES MANAGERS</strong></p>
              </div>
              <div class="icon">
                  <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ url('/Managers') }}" class="small-box-footer"  style="font-style:italic;">CREER LES MANAGERS <i class="fa fa-arrow-circle-right"></i></a>
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
              <a href="{{ url('/ListeManagers') }}" class="small-box-footer">LISTE DES MANAGERS <i class="fa fa-arrow-circle-right"></i></a>
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

        
 @endsection