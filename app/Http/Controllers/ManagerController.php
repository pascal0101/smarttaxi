<?php

namespace App\Http\Controllers;

use App\Manager;
use App\Agence;
use App\User;
use Illuminate\Http\Request;
use validator;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use App\Mail\MessageCreated1;
use Auth;
use Session;
use attempt;
class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $managers = manager::all();
    return view('pages/listemanag')->withManagers($managers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $agence = agence::all(['CodeAgen', 'NomAgen']);

         return view('pages.creermanagers',compact(['agence', $agence]));
    }

    public function create1()
    {
         return view('pages.Auth');
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

        $manager = new manager();
        
                   
        $manager->NomManag=$request->input('NomManag');
        $manager->PrenomManag=$request->input('PrenomManag');
        $manager ->sexe = $request->input('SexeManag');
        $manager ->AdressManag = $request->input('AdresseManag');
        $manager->TelephonManag = $request->input('NumManag');
        $manager ->Email = $request->input('EmailManag');
              
        $manager ->Password = $request->input('PasswordManag');
        $manager ->CodeAgen = $request->input('AgenceManag');
        
        $manager ->photo = $request->photoManag->store('image');
        
    //dd($manager); 

         $manager->save();

        $user = new user();


        $user->name = $request->input('NomManag');
        $user->email = $request->input('EmailManag');
        $user->password = bcrypt($request->input('PasswordManag'));
        $user->remember_token=Null;
//dd($user);
 
            $user->save();
          
        }

//$msg="inscription en cours";
//$mailable= new MessageCreated1($manager ->NomManag,$manager ->PrenomManag,$msg) ;     
//Mail::to('pascaldaf2016@gmail.com')->send($mailable);           

session()->flash('message1','Manager a été créer avec succès!!!');

            return redirect('/Managers');
    }

    public function connection(Request $request)
    {


        /*$this->validate($request,[

            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);*/
//dd($request);
        /*if(([$manager ->Email => $request->email, $manager ->Password => $request->password], $request->remember)){*/

        $login = $request->input('email');
       $password = $request->input('password');
       
        $managers = manager::all();
//if(( Manager::whereEmailAndPassword([$login,$password])->first()){

           // return redirect()->intended(route('admin.dashboard'));
       //return redirect()->intended('Acceuil');
       
        //dd("toto"), 
    //}
  //return redirect()->back()->withInput($request->only('email','remember'));
//}
       /*$resultat = [
       'email'=>$request['email'],
       'password'=>$request['password'],
       ];
   //dd($resultat);
    // && name="Admin"
       /*if(Auth::attempt($resultat)){
            if(Auth::check() && Auth::Manager()->etat==1){
                return redirect()->intended('connexion');
            }

            if(Auth::check() && Auth::Manager()->etat==0){
                Auth::logout();
                $msg="Accès refusé !";
                Session::flash('flash_message',$msg);
                return redirect()->intended('Acceuil');
            }
       }
       else{
        Auth::logout();
        $msg="Mot de passe ou login incorrect !";
        Session::flash('flash_message',$msg);
          return view('pages.Auth');
       }*/
      /* $login = $request->input('email');
       $password = $request->input('password');

     $manager = Manager::whereEmailAndPassword([$login,$password])->first();

         if ($manager->whereCount() > 1){

           return redirect()->intended('Acceuil');
         }

            else{
               
                  return redirect()->intended('connexion');
            }*/
    }


//guard('admin')->
        
    /**
     * Display the specified resource.
     *
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
         $manager =  Manager::findOrFail($id);

         return view('pages.infomanager',compact('manager'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function edit(Manager $manager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manager $manager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manager $manager)
    {
        //
    }


}
