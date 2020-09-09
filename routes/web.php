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
    return view('envelop');
});


//route d'affichage des donnees de la proforma et des deux bouttons recevoir par email et pick up
Route::get('/invoiceproforma', function () {
    return view('invoiceproforma');
});

//route d'affichage des donnees de la proforma et des deux bouttons recevoir par email et pick up
Route::get('/fillemail', function () {
    return view('fillemail');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//route qui permet d'afficher la route qui méne vers le formulaire de package or envelop
Route::post('/package', 'PackageController@store')->name('package.store');

//cette route c pr la creation d'un package apres demande de quotation.
Route::get('/package/create', 'PackageController@create')->name('package.create');

//route qui nous permet d'afficher le profil de chaque utilisateur
Route::get('/mon-compte', 'ProfilController@show')->name('profil.show');

