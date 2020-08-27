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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//route qui permet d'afficher la route qui méne vers le formulaire de package or envelop
Route::post('/package', 'PackageorenvelopController@store')->name('package.store');

//cette route c pr la creation d'un package or envelop cette route nous donne le formulaire
Route::get('/package/create', 'PackageorenvelopController@create')->name('package.create');
