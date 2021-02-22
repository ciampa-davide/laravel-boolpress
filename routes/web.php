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

// Route::get('/', function () {
//     return view('welcome');
// });
//con questa riga vado a creare un richiamo per le route list
Route::resource('blogs','BlogController');


//nel caso volessimo crearle a mano dovrevo fare cosi:
//creazione route-> Route::metodo('uri','NameControllora@NomeMetodo') poi daremo il nome per richiamarla con la rotta scrivendo cosi ->name('nome.index')
//otterremo cosi Route::metodo('uri','NameControllora@NomeMetodo')->name('nome.index')
//esempio di route
//Route::get('blogs', 'BlogController@index')>name('blogs.index');