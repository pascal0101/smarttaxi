<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.Acceuil2');
});

Route::get('/Acceuil', function () {
    return view('pages.Acceuil');
});
Route::get('/Acceuil1', function () {
    return view('pages.Acceuil1');
});

Route::get('modifAgen\{id}', 'AgenceController@edit')->name('updateagence');
Route::post('modifAgen\{id}', 'AgenceController@update')->name('updateagence');

//Route::get('modifChauff\{id}', 'ChauffeurController@edit')->name('modifChauff');
//Route::post('modifChauff\{id}', 'ChauffeurController@update')->name('modifChauff');

Route::get('supprChauff\{id}', 'ChauffeurController@delete')->name('supprChauff');
Route::get('supprAgen\{id}', 'AgenceController@delete')->name('supprAgen');

Route::get('/connexion', 'ManagerController@create1');

Route::post('/connexion', 'ManagerController@connection')->name('connexion');


Route::get('infoChauff\{id}', 'ChauffeurController@show')->name('infoChauff');
Route::get('infoManag\{id}', 'ManagerController@show')->name('infoManag');

Route::get('/ImprimeChauffeurs','ChauffeurController@liste');
Route::get('/ImprimePassagers','PassagerController@liste');


Route::get('/ListeChauffeurs','ChauffeurController@index')->name('Chauffeurs');

Route::get('/ListeManagers','ManagerController@index')->name('Managers');

Route::get('/ListeTaxis','TaxiController@index')->name('Taxis');



Route::get('/Agence', 'AgenceController@create');

Route::post('/insAgences', 'AgenceController@store')->name('insAgence');


Route::get('/Chauffeurs', 'ChauffeurController@create');

Route::post('/insChauffeurs', 'ChauffeurController@store')->name('inscription');

Route::get('/Managers', 'ManagerController@create');

Route::post('/insManagers', 'ManagerController@store')->name('insManager');


Route::get('/Taxis', 'TaxiController@create');

Route::post('/insTaxis', 'TaxiController@store')->name('insTaxis');





//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');








//Authentification routes  
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/users/logout','Auth\LoginController@userLogout')->name('user-logout');

Route::prefix('admin')->group(function(){

Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

Route::get('/', 'AdminController@index')->name('admin.dashboard');

Route::get('/logout','Auth\AdminLoginController@logout')->name('admin-logout');

//password reset route

Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');

Route::post('/password/reset','Auth\AdminResetPasswordController@reset');

Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showReset')->name('admin.password.reset');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
