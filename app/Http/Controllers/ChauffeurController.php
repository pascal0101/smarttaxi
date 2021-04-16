<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Chauffeur;
use App\Taxi;
use App\Attribution;
use Illuminate\Http\Request;
use validator;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use App\Mail\MessageCreated;
class ChauffeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $chauffeurs = chauffeur::all();
    return view('pages/listechauf')->withChauffeurs($chauffeurs);
    }



public function liste()
    {
     
    $chauffeurs = chauffeur::all();
         return view('pages/ImprimeChauff')->withChauffeurs($chauffeurs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function create()
    {
          $taxi = taxi::all(['CodeTaxi', 'ImmaTaxi']);

         return view('pages.creerchauffeurs',compact(['taxi', $taxi]));                         
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

        $chauffeur = new chauffeur();
        

        $chauffeur->NomchauffTaxi=$request->input('NomChof');
        $chauffeur ->PrechauffTaxi = $request->input('PrenomChof');
        $chauffeur->Sexe = $request->input('SexeChof');
        $chauffeur ->AdrChauffTaxi = $request->input('AdresseChof');
        $chauffeur ->CategoriPermis = $request->input('CategorieChof');
        $chauffeur ->Numero = $request->input('NumeroChof');
        $chauffeur ->Identifiant = $request->input('EmailChof');
        $chauffeur ->Password = $request->input('PasswordChof');


         $chauffeur ->photo = $request->PhotoChof->store('image');
    
    //if($request->hasFile('permis')){
         
         $chauffeur ->permis = $request->PermisChof->store('image');
   

      $chauffeur->save();

        $attribution = new attribution();

        $attribution ->CodeChauffTaxi  = $chauffeur->id;
        $attribution ->CodeTaxi= $request->input('TaxiChof');
        $attribution ->dateAttrib = date("Y-m-d H:i:s");


             //dd($attribution);
             $attribution->save();
          
        }

$msg="inscription en cours";
 $mailable= new MessageCreated($chauffeur ->NomchauffTaxi,$chauffeur ->Identifiant,$msg) ;     
Mail::to('pascaldaf2016@gmail.com')->send($mailable);           

session()->flash('message','Chauffeur a été créer avec succès!!!');

            return redirect('/Chauffeurs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chauffeur  $chauffeur
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
          $chauffeur =  Chauffeur::findOrFail($id);

         return view('pages.infochauffeur',compact('chauffeur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chauffeur  $chauffeur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chauffeur = chauffeur::findOrFail($id);
            
    return view('pages.modifChauff')->withAgence($chauffeur);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chauffeur  $chauffeur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $chauffeur = DB::table('chauffeurs')->where('id',$id)->update(array(
           
            'codeAgen' => $request->input('CodeAg'),
            'NomAgen' => $request->input('NomAg'),
            'TelephonAg' => $request->input('NumeroAg'),
            'Email'=>$request->input('EmailAg')));
            session()->flash('message6','Agence Modifié avec succes!!!');
            return redirect('/Agence');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chauffeur  $chauffeur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chauffeur $chauffeur)
    {
        //
    }

     public function delete($id)
    {

         $chauffeur =  chauffeur::findOrFail($id);
          $chauffeur ->delete($id);
         session()->flash('message5','Chauffeur Supprimé avec succes!!!');
          return redirect('/ListeChauffeurs');
    }
}
