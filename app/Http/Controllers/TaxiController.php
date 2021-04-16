<?php

namespace App\Http\Controllers;

use App\Taxi;
use App\Agence;
use Illuminate\Http\Request;
use View;
use validator;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use App\Mail\MessageCreated1;
class TaxiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $taxis = taxi::all();


    return view('pages/listetaxi')->withTaxis($taxis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $agence = agence::all(['CodeAgen', 'NomAgen']);
          
       return view('pages.creertaxis',compact(['agence', $agence]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('post')){

        $taxi = new taxi();
       
                   
        $taxi->CodeAgen=$request->input('Code_Agence');
        $taxi->CodeTypCon=$request->input('Code_Type_con');
        $taxi ->LibTaxi = $request->input('LibTaxi');
        $taxi ->Nbrplace = $request->input('Nbrplace');
        $taxi->ImmaTaxi = $request->input('ImmaTaxi');
        $taxi ->CoulTaxi = $request->input('Couleur_Taxi');
      

             $taxi->save();
          
        }

//$msg="inscription en cours";
//$mailable= new MessageCreated1($manager ->NomManag,$manager ->PrenomManag,$msg) ;     
//Mail::to('pascaldaf2016@gmail.com')->send($mailable);           

session()->flash('message2','Taxis a été créer avec succès!!!');

            return redirect('/Taxis');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Taxi  $taxi
     * @return \Illuminate\Http\Response
     */
    public function show(Taxi $taxi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Taxi  $taxi
     * @return \Illuminate\Http\Response
     */
    public function edit(Taxi $taxi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Taxi  $taxi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $filiere = DB::table('filieres')->where('id',$id)->update(array(
            'NomFil' => $request->input('NomFiliere'),
            'LibelleFil'=>$request->input('LibelleFiliere')));
            session()->flash('message6','Filiere Modifié avec succes!!!');
            return redirect('/fili');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Taxi  $taxi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Taxi $taxi)
    {
        //
    }
}
