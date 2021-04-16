<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Agence;
use Illuminate\Http\Request;

class AgenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $agences = agence::all();
        return view('pages.creeragence')->withAgences($agences);
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

        $agence = new agence();
        
        $agence->codeAgen=$request->input('CodeAg');
        $agence ->NomAgen = $request->input('NomAg');
        $agence->TelephonAg = $request->input('NumeroAg');
        $agence ->Email = $request->input('EmailAg');
       
     //dd($agence);

             $agence->save();
          
        }

         $agence = agence::all();

        session()->flash('message2','Agence crée avec succès !!!');

            return redirect('/Agence');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function show(Agence $agence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agence = agence::findOrFail($id);
            
    return view('pages.modifAgen')->withAgence($agence);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agence  $agence
     * @return \Illuminate\Http\Response
     */
   
       public function update(Request $request, $id)
    {
      
//dd($request);
       $agence = DB::table('agences')->where('id',$id)->update(array(
           
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
     * @param  \App\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agence $agence)
    {
        //
    }

     public function delete($id)
    {

         $agence =  agence::findOrFail($id);
          $agence ->delete($id);
         session()->flash('message5','Agence Supprimé avec succes!!!');
          return redirect('/Agence');
    }
}
