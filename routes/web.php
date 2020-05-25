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
//accueil
Route::get('/', 'FrontOfficeController@accueil')->name('frontoffice.index');
Route::resource('frontoffice','FrontOfficeController');//->except(['index']);
// Nous trouver
Route::get('contact', 'FrontOfficeController@contact');
Route::post('envoi-formulaire', 'FrontOfficeController@envoiDemande');
// presentation
Route::get('presentation', 'FrontOfficeController@presentation');
