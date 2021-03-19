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

use Illuminate\Http\Request;
use App\Cheque;
Auth::routes();

 
Route::get('/',function(){
	return view('welcome');
}); //nessa tela é mostrado o botao que redireciona ao login

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/perfil',function(){
	return view('perfil');
})->name('perfil'); 

Route::resource('cheques','ChequeController'); //especifica que terão várias rotas p esse controller (é controlador de recursos)





