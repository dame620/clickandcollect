<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
//la route qui méne vers la page de check de packet ou envelop
Route::get('/check', function () {
    return view('checkpackorenv');
});

//route qui affiche formulaire des paquets suite a la demande d'un proforma
Route::get('/packageform', function () {
    return view('package');
});
//route qui affiche formulaire des envelop suite a la demande d'un proforma
Route::get('/envelopeform', function () {
    return view('envelope.envelope');
});


//route d'affichage des donnees de la proforma et des deux bouttons recevoir par email et pick up
Route::get('/invoiceproforma', function () {
    return view('invoiceproforma');
});

//ceci affiche la proforma et des deux bouttons recevoir par email et pick up pour l'envelope
Route::get('/invoiceenvelope', function () {
    return view('invoiceenvelope');
});

//route d'affichage des donnees de la proforma et des deux bouttons recevoir par email et pick up
Route::get('/fillemail', function () {
    return view('fillemail');
});

//route d'affichage des donnees de la proforma et des deux bouttons recevoir par email et pick up
Route::get('/fillemailforenvelope', function () {
    return view('fillemailforenvelope');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//route qui permet d'afficher la route qui méne vers le formulaire de package or envelop
Route::post('/package', 'PackageController@store')->name('package.store');

//cette route c pr la creation d'un package apres demande de quotation.
Route::get('/package/create', 'PackageController@create')->name('package.create');

//route qui nous permet d'afficher le profil de chaque utilisateur
Route::get('/mon-compte', 'ProfilController@show')->name('profil.show');


//route qui permettent d'afficher le formulaire d'enregistrement des envelopes 

Route::get('/envelope/create', 'EnvelopeController@create')->name('envelope.create');

//route qui permet de faire passer les données à travers une route post
Route::post('/envelope', 'EnvelopeController@store')->name('envelope.store');

//ceci est une route qui nous méne vers la page de selection du phyto ou non 
Route::get('/checkphyto', function(){
    return view('checkphyto');
});

//cette route permet d'afficher la page de check de package or envelop lors de la demande d'un pick up
Route::get('/checkforpickup', function(){
    
    return view('checkforpickup');

});